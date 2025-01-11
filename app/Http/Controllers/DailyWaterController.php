<?php

namespace App\Http\Controllers;

use App\Http\Requests\DailyWaterRequest;
use App\Http\Resources\DailyWaterResource;
use App\Models\DailyWater;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DailyWaterController extends Controller
{
    public function increase(Request $request)
    {
        $dailyWaterData['user_id'] = auth()->user()->id;
        $dailyWaterData['date'] = $request->date ?? now()->format('Y-m-d');
        $dailyWaterData['amount'] = 200;

        $dailyWater = DailyWater::where('user_id', $dailyWaterData['user_id'])
            ->where('date', $dailyWaterData['date'])
            ->first();

        if ($dailyWater) {
            $dailyWater->update(['amount' => $dailyWaterData['amount'] + $dailyWater['amount']]);
        } else {
            $dailyWater = DailyWater::create($dailyWaterData);
        }

        $dailyWater = new DailyWaterResource($dailyWater);

        return $this->resStoreData($dailyWater);
    }

    public function decrease()
    {
        $user = auth()->user();
        $dailyWater = DailyWater::where('user_id', $user->id)
            ->where('date', now()->format('Y-m-d'))
            ->first();

        if (! $dailyWater || $dailyWater['amount'] <= 0) {
            return response(['message' => 'Belum ada data minum harian hari ini'], 400);
        }

        $dailyWater['amount'] = $dailyWater['amount'] - 200;
        $dailyWater->save();
        $dailyWater = new DailyWaterResource($dailyWater);

        return $this->resStoreData($dailyWater);
    }

    public function showCurrent(Request $request)
    {
        $user = auth()->user();
        $date = $request->query('date');

        $dailyWater = DailyWater::where('user_id', $user->id)->orderBy('created_at', 'desc');

        if ($date) {
            $dailyWater = $dailyWater->where('date', $date);
        } else {
            $dailyWater = $dailyWater->where('date', now()->format('Y-m-d'));
        }

        $dailyWater = $dailyWater->first();

        if (!$dailyWater) {
            $dailyWater = new DailyWater([
                'amount' => 0,
                'date' => now()->format('Y-m-d')
            ]);
        }

        return new DailyWaterResource($dailyWater);
    }

    public function showHistory(Request $request)
    {
        $user = auth()->user();
        $days = $request->query('days');

        $userCreatedAt = Carbon::parse($user->created_at)->startOfDay()->addDay();
        $startDate = now()->subDays($days - 1)->startOfDay();
        $startDate = $startDate->lt($userCreatedAt) ? $userCreatedAt : $startDate;
        $endDate = now()->endOfDay();

        $dailyWater = DailyWater::where('user_id', $user->id)
            ->whereBetween('date', [$startDate, $endDate])
            ->orderBy('date', 'desc')
            ->get();

        return DailyWaterResource::collection($dailyWater);
    }
}
