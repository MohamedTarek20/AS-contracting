<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait FilesHelper
{
    /**
     * @param $file
     * @param $location
     * @return string|null
     */
    protected function fileUpload($file, $location): ?string
    {
        if (!is_file($file)) {
            if (Str::contains($file, ";base64,")) {
                $fileParts = explode(";base64,", $file);
                $fileTypeAux = explode("/", $fileParts[0]);
                $uploadedFileOriginalExtension = $fileTypeAux[1];
                $uploadedFileUniqueName = $this->uniqueName($uploadedFileOriginalExtension);

                $file = $location . '/' . $uploadedFileUniqueName;
                $fileBase64 = base64_decode($fileParts[1]);
                Storage::put('uploads/' . $file, $fileBase64);
                return $uploadedFileUniqueName;
            }
            return null;
        }
        $uploadedFileOriginalExtension = $file->getClientOriginalExtension();
        $uploadedFileUniqueName = $this->uniqueName($uploadedFileOriginalExtension);

        Storage::putFileAs('uploads/' . $location, $file, $uploadedFileUniqueName, [
            'visibility' => 'public',
            'directory_visibility' => 'public'
        ]);

        // $file->storeAs('public/uploads/'.$location, $uploadedFileUniqueName);
        return $uploadedFileUniqueName;
    }

    /**
     * @param $name
     * @return string
     */
    private function uniqueName(string $name): string
    {
        return time() . '_' . Str::random(6) . '.' . $name;
    }
}
