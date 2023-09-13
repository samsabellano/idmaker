<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait Utils
{
    public static function slugify(string $word): string
    {
        return mt_rand(10000, 99999) . "-" . \Str::slug($word);
    }

    public function newFileName($file)
    {
        return time() . "_" . $file->getClientOriginalName();
    }

    public function storeFile($request, string $fileField, string $path)
    {
        if ($request->hasFile($fileField)) {
            $uploadedFile = $request->file($fileField);
            $fileName = $this->newFileName($uploadedFile);
            return Storage::putFileAs($path, $uploadedFile, $fileName);
        }
    }

    public function storeImage($request, string $imageField, string $path, $objAttr = null, bool $forUpdate = false)
    {
        if ($request->hasFile($imageField)) {
            $uploadedImage = $request->file($imageField);
            $imageName = $this->newFileName($uploadedImage);
            $imagePath = Storage::putFileAs($path, $uploadedImage, $imageName);

            if ($forUpdate) {
                $objAttr ? Storage::delete($objAttr) : null;
            }

            return $imagePath;
        }

        return $objAttr;
    }
}