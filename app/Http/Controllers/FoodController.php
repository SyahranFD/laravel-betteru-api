<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use App\Http\Resources\FoodResource;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function store(FoodRequest $request)
    {
        $request->validated();
        auth()->user();

        $foodData = $request->all();
        $food = Food::create($foodData);
        $food = new FoodResource($food);

        return $this->resStoreData($food);
    }

    public function index(Request $request)
    {
        $goals = $request->query('goals');
        $search = $request->query('search');

        $food = Food::query();

        if ($goals && $goals !== '') {
            $food->where('goals', $goals);
        }

        if ($search && $search !== '') {
            $food->where('name', 'like', '%' . $search . '%');
        }

        $food = $food->get();

        return FoodResource::collection($food);
    }

    public function showById($id)
    {
        $food = Food::find($id);
        if (!$food) {
            return $this->resDataNotFound("Food");
        }
        return new FoodResource($food);
    }

    public function update(FoodRequest $request, $id)
    {
        $request->validated();
        auth()->user();

        $food = Food::find($id);
        if (!$food) {
            return $this->resDataNotFound("Food");
        }

        $foodData = $request->all();
        $food->update($foodData);

        $food = new FoodResource($food);

        return $this->resUpdatedData($food);
    }

    public function delete($id)
    {
        $food = Food::find($id);
        if (!$food) {
            return $this->resDataNotFound("Food");
        }

        $food->delete();

        return $this->resDataDeleted("Food");
    }
}
