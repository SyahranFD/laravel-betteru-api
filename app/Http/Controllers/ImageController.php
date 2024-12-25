<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Http\Resources\ImageResource;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->url = Config::get('url.localhost');
    }

    public function store(ImageRequest $request)
    {
        $request->validated();
        auth()->user();

        $imageData = $request->all();

        if ($request->hasFile('image')) {
            $fileName = Str::random(30);

            $fileExtension = $request->file('image')->getClientOriginalExtension();
            $fileName = $fileName . '.' . $fileExtension;

            $filePath = $request->file('image')->storeAs('public', $fileName);
            $imageData['image'] = $this->url.Storage::url($filePath);
        }

        $image = Image::create($imageData);
        $image = new ImageResource($image);

        return $this->resStoreData($image);
    }

    public function index()
    {
        return Image::all();
    }

    public function showById($id)
    {
        $image = Image::find($id);
        if (!$image) {
            return $this->resDataNotFound("Image");
        }
        return new ImageResource($image);
    }

    public function delete($id)
    {
        $image = Image::find($id);
        if (!$image) {
            return $this->resDataNotFound("Image");
        }
        $image->delete();
        return $this->resDataDeleted("Image");
    }
}
