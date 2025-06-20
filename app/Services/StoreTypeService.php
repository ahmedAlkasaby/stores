<?php

namespace App\Services;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Contracts\ImageUploaderInterface;

class StoreTypeService 
{
    public function uploadImage(UploadedFile $image): string
    {
        return $image->store('store_types', 'public');
    }

    public function deleteImage(string $path): void
    {
        Storage::disk('public')->delete($path);
    }
}