<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Menu;

class BerandaController extends Controller
{
    
    public function index()
    {
      

         $all_data= menu::all()->take(4);
        
      

        return view('beranda', compact("all_data"));
    }

public function detail(Request $id)
    {

    $kode=  Request('id');
    // $decrypted = Crypt::decryptString($kode);
    $all_data = DB::table('menu')
        ->where('menu.id',$kode);
    return view('detail',compact("all_data"));
    }
}
