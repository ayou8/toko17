<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Ixudra\Curl\Facades\Curl;


class AboutController extends Controller
{
	/**
     * Show the application myform.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('about.about');
    }


}