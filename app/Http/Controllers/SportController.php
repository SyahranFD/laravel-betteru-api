<?php

namespace App\Http\Controllers;

use App\Http\Resources\SportResource;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index(Request $request)
    {
        $goals = $request->query('goals');
        $category = $request->query('category');
        $search = $request->query('search');

        $food = Sport::query();

        if ($goals && $goals !== '') {
            $food->where('goals', $goals);
        }

        if ($search && $search !== '') {
            $food->where('name', 'like', '%' . $search . '%');
        }

        if ($category && $category !== '') {
            $food->where('category', $category);
        }

        $food = $food->get();

        return SportResource::collection($food);
    }
}
