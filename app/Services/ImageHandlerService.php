<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ImageHandlerService
{
    public function uploadImage($folder, $request): ?string
    {
        $imgUrl = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/' . $folder), $fileName);
            $imgUrl = 'uploads/' . $folder . '/' . $fileName;
        }

        return $imgUrl;
    }


    public function deleteImage($path): void
    {
        if (!$path) return;
        Storage::disk('public')->delete($path);
    }

    public function editImage($request, $obj, $folder)
    {
        $imgUrl = $obj->image ?? "";
        if ($request->hasFile('image') && $request->image!= $obj->image) {
            $this->deleteImage($obj->image);
            $imgUrl = $this->uploadImage($folder, $request);
        }
        return $imgUrl;
    }
}
