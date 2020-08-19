<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait UploadTrait
{
    private function imageUpload(Request $request, $imageColumn = null) //Se não tiver imageColumn, será nulo
    {
        $images = $request->file('photos');

        $uploadedImages = [];

        foreach($images as $image){
            if(!is_null($imageColumn)){
                $uploadedImages[] = [$imageColumn => $image->store('products', 'public')];
            }
            else{
                $uploadImages = $image; //Se imageColumn for nulo, retornará apenas o nome da imagem
            }
        }

        return $uploadedImages;
    }
}