<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Newuser;

use DB;
use Cart;
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
    public function home(){


     $all_data['nutrisi'] = Product::join('gambar_produk', 'gambar_produk.kode_produk', '=', 'produk.kode_produk')
        ->join('kategori_kode', 'kategori_kode.idkategori', '=', 'produk.kategori')
        ->where('produk.kategori',array(11, 2, 3)) 
        ->groupBy('produk.kode_produk')
        ->inRandomOrder()
        ->take(4);

        $all_data['mom'] = DB::table('produk')
            ->join('gambar_produk', 'gambar_produk.kode_produk', '=', 'produk.kode_produk')
            ->join('kategori_kode', 'kategori_kode.idkategori', '=', 'produk.kategori')
            ->where('produk.kategori','=',7)
            ->select('produk.*', 'kategori_kode.mainkategori', 'gambar_produk.nama_gambar')
            ->paginate(4);

        // ->join('gambar_produk', 'gambar_produk.kode_produk', '=', 'produk.kode_produk')
        // ->join('kategori_kode', 'kategori_kode.idkategori', '=', 'produk.kategori')
        // ->where('produk.kategori','=',7)
        // ->orwhere('produk.kategori','=',2)
        // ->groupBy('produk.kode_produk')
        // ->inRandomOrder()
        // ->paginate(4);

         $all_data['fashion'] = Product::all()->take(4);
        // ->join('gambar_produk', 'gambar_produk.kode_produk', '=', 'produk.kode_produk')
        // ->join('kategori_kode', 'kategori_kode.idkategori', '=', 'produk.kategori')
        // ->where('produk.kategori',7)
        // ->groupBy('produk.kode_produk')
        // ->inRandomOrder()
        // ->paginate(4);

        $all_data['mainan'] = Product::all()->take(4);
        // ->join('gambar_produk', 'gambar_produk.kode_produk', '=', 'produk.kode_produk')
        // ->join('kategori_kode', 'kategori_kode.idkategori', '=', 'produk.kategori')
        // ->where('produk.kategori',1)
        // ->groupBy('produk.kode_produk')
        // ->inRandomOrder()
        // ->paginate(4);

        return view('cart', compact("all_data"));
    }


        public function checkout(){

        $states = DB::table('data_kota')->groupBy('idprovinsi')->get();
        return view('checkout',compact('states'));

        }

        public function newuser(Request $request){
            
            $newuser = new Newuser;
            $newuser->nama_depan = $request->firstname;
            $newuser->nama_belakang = $request->lastname;
            $newuser->email = $request->email;
            $newuser->hp = $request->hp;
            $newuser->alamat = $request->alamat."<hr/>".$request->address2;
            $newuser->kodepos = $request->kodepos;
            $newuser->propinsi = $request->propinsi;
            $newuser->kabupaten = $request->city;

            $newuser->save();
           return $request->all();

        }
}
