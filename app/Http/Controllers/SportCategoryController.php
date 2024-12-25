<?php

namespace App\Http\Controllers;

use App\Http\Resources\SportCategoryResource;
use App\Models\SportCategory;
use Illuminate\Http\Request;

class SportCategoryController extends Controller
{
    public function index()
    {
        return SportCategoryResource::collection(SportCategory::all());
    }
}
