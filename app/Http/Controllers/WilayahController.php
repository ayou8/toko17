<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Ixudra\Curl\Facades\Curl;


class WilayahController extends Controller
{
	/**
     * Show the application myform.
     *
     * @return \Illuminate\Http\Response
     */
    public function provinsi()
    {
       
         $states = DB::table('data_kota')->groupBy('idprovinsi')->get();

        return view('checkout',compact('states'));
    }

    public function kota2($id)
    {
        $cities = DB::table("data_kota")
                    ->where("idprovinsi",$id)
                    ->get();
        return json_encode($cities);
    }
    public function kota(Request $request)
    {
        if($request->ajax()){
            $states = DB::table('data_kota')->where('idprovinsi',$request->id_country)->pluck("kota","idkota")->all();
            $data = view('kota',compact('states'))->render();
            return response()->json(['options'=>$data]);
        }
    }

}