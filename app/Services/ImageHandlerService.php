<?php

namespace App\Services;
use Illuminate\Support\Facades\Storage;

class ImageHandlerService
{
    public function uploadImage($file,  $folder): string
    {
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/'.$folder), $fileName);
        return 'uploads/' . $folder . '/' . $fileName;
    }

    public function deleteImage( $path): void
    {
        Storage::disk('public')->delete($path);
    }

    public function editImage($request, $obj){
        $imageUrl = "";
        if ($request->hasFile('image')) {
            if($obj->image){
                $this->deleteImage($obj->image);
            }
            $imageUrl = $this->uploadImage($request->file('image'), 'objs');
        }else{
            $imageUrl = $obj->image;
        }
        return $imageUrl;
    }
}