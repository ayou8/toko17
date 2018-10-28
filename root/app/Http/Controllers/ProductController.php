<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
public function index(){

		return view('product');

}
 public function store(Request $request)
 {
        $product = new Product();
        $product->nama = $request->name;
        $product->harga = $request->type;
        $product->type = $request->price;
        $product->deskripsi = $request->deskripsi;

        $grocery->save();
        return response()->json(['success'=>'Data is successfully added']);
 }

    public function search(Request $request){

  		$categories = Product::where('nama_produk','LIKE',$request->search.'%')->get();
        return response()->json($categories);

}
}
