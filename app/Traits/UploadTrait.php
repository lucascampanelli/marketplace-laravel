<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait UploadTrait
{
    private function imageUpload($images, $imageColumn = null) //Se não tiver imageColumn, será nulo
    {
        $uploadedImages = [];

        if(!is_null($imageColumn)){ //ou is_array
            foreach($images as $image){
                $uploadedImages[] = [$imageColumn => $image->store('products', 'public')];
            }
        }
        else{
            $uploadedImages = $images->store('logo', 'public'); //Se for nulo, salvará uma logo
        }

        return $uploadedImages;
    }
}