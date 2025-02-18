<?php

namespace App\Http\Traits;

use Carbon\Carbon;
use Illuminate\Http\File as SaveFile;
use Illuminate\Support\Facades\App;
use Session;
use Image;

trait ImageSaver
{
    // <!-- upload file -->
    public function upload_file($file, $model, $fieldName, $basePath)
    {

        // <!-- upload file -->
        if ($file) {

            // <!-- delete file if exist -->
            if (file_exists($model->$fieldName)) {
                unlink($model->$fieldName);
            }

            // <!-- create unique file name -->
            $newFileName   = time() . '.' . $file->getClientOriginalExtension();


            // <!-- create upload directory -->
            $directory   =  'uploads/' . $basePath . '/' . date('Y') . '/';

            // <!-- create store file to directory -->
            $file->move($directory, $newFileName);

            // <!-- update file name to database -->
            $model->$fieldName = $directory . $newFileName;
            $model->save();
        }
    }


    public function uploadFileWithResize($file, $model, $database_field_name, $basePath,$width,$height)
    {
        if ($file) {

            try {
                $basePath = 'uploads/' . $basePath;

                $image_name     = time() . '.' . $file->getClientOriginalExtension();

                if (file_exists($basePath . '/' . $model->image) && $model->image != '') {
                    unlink($basePath . '/' . $model->image);
                    dd("Ache mama");
                }

                if (!is_dir($basePath)) {
                    \File::makeDirectory($basePath, 493, true);
                }

                $resize_image = Image::make(file_get_contents($file));
                $resize_image->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($basePath . '/' . $image_name);

                $model->update([$database_field_name => ($basePath . '/' . $image_name)]);
            } catch (\Exception $ex) {}
        }
    }
}
