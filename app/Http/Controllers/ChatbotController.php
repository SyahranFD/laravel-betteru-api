<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChatbotRequest;
use App\Http\Resources\ChatbotResource;
use App\Models\Chatbot;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function store(ChatbotRequest $request)
    {
        $request->validated();
        auth()->user();

        $chatbotData = $request->all();
        $chatbotData['user_id'] = auth()->user()->id;

        $chatbot = Chatbot::create($chatbotData);
        $chatbot = new ChatbotResource($chatbot);

        return $this->resStoreData($chatbot);
    }

    public function showCurrent(Request $request)
    {
        $user = auth()->user();
        $sender = $request->query('sender');
        $chatbotMessages = Chatbot::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy(function($date) {
                return $date->created_at->format('Y-m-d');
            });

        if ($sender) {
            $chatbotMessages = $chatbotMessages->map(function($messages) use ($sender) {
                return $messages->filter(function($message) use ($sender) {
                    return $message->sender === $sender;
                });
            });
        }

        $data = $chatbotMessages->map(function($messages, $date) {
            return [
                'date' => $date,
                'message_data' => $messages->map(function($message) {
                    return [
                        'message' => $message->message,
                        'sender' => $message->sender,
                        'created_at' => $message->created_at->format('H:i:s'),
                    ];
                })->values(),
            ];
        })->values();

        return response()->json(['data' => $data]);
    }
}
