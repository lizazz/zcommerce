<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadImageRequest;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(UploadImageRequest $request)
    {
        $path = $request->image->storeAs('images', $request->image->getClientOriginalName(), 's3');
        return response()->json(['path' => Storage::disk('s3')->url($path)]);
    }
}
