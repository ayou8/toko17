<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\menu;
use App\Gambar;
use DB;

class SearchController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

        $q['key'] = $request->q;
         $q['q'] = DB::table('menu')
        ->where('nama','LIKE',$request->q.'%')
        ->groupBy('menu.id')
        ->inRandomOrder()
        ->paginate(8);
       
       
        
            return view('search', compact("q"));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $data = menu::select("nama as nama")->where("nama","LIKE","%{$request->input('query')}%")->get();
        return response()->json($data);
    }
}