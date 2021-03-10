<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Product;
class ProdukKategoriController extends Controller
{
    //
    public function kategori(Request $kat)
    {

    $kategori =  Request('kategori');

   	$kategoris = DB::table('kategori_kode')
        ->where('mainkategori',$kategori)
        ->get();
       	if(count($kategoris)>0){

    	$all_data['kat'] = DB::table('produk')
        ->join('gambar_produk', 'gambar_produk.kode_produk', '=', 'produk.kode_produk')
        ->join('kategori_kode', 'kategori_kode.idkategori', '=', 'produk.kategori')
        ->where('produk.kategori',$kategoris[0]->idkategori)
        ->paginate(12);

   		$all_data['subkategoris'] = DB::table('kategori')
        ->where('kode_kategori',$kategoris[0]->idkategori)
        ->get();

       	}

       	else {
		$all_data['kat'] = DB::table('produk')
        ->join('gambar_produk', 'gambar_produk.kode_produk', '=', 'produk.kode_produk')
        ->join('kategori_kode', 'kategori_kode.idkategori', '=', 'produk.kategori')
        ->where('produk.kategori',2)
        ->paginate(12);    

        $all_data['subkategoris'] = DB::table('kategori')
        ->where('kode_kategori',13)
        ->get();   	
    	}
    	
       	return view('produks.kategori',compact("all_data"));
		

        }
    

}
