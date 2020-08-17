<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProductPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPhotoController extends Controller
{
    public function removePhoto(Request $request)
    {
        $photoName = $request->get('photoName');

        //Remover a foto dos arquivos 
        if(Storage::disk('public')->exists($photoName)){
            Storage::disk('public')->delete($photoName);
        }

        //Remover a imagem da base
        $removePhoto = ProductPhoto::where('image', $photoName);
        $productId = $removePhoto->first()->product_id;

        $removePhoto->delete();
        flash('Imagem removida com sucesso!')->success();
        return redirect()->route('admin.products.edit', ['product' => $productId]); //Retorna para a página de edição do produto escolhido

    }
}
