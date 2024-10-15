<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadProduct;

class UploadProductController extends Controller
{
    public function addProduct(){
        return view('addProduct');
    }

    public function store(){
        if(request('image')){
            $file = request()->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time(). '.' . $extension;
            $path = 'uploads/';
            $file->move($path,$filename);
        }

        $store = UploadProduct::create([
            'product' => request('product'),
            'description' => request('description'),
            'price' => intval(request('price')),
            'stock' => intval(request('stock')),
            'image' => $path . $filename
        ]);

        if($store){
            return redirect()->route('view.addProduct');
        }
    }
}