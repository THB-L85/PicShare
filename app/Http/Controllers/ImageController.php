<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        // return "hola desde ImageController store";
        $file = $request->file('file');

        $fileName = Str::uuid() . '.' . $file->extension();

        $imageServer = Image::read($file);
        $imageServer->resize(1000,1000);
        $imageServer->save(public_path('images/posts') . '/' . $fileName);

        return response()->json(['fileName' => $fileName]);
    }
}
