<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
use App\anak;
class MyController extends Controller
{
    //
    public function index () {
    	$a = "Nisa Rahayu";
    	return "Nama Saya Adalah <b> ". $a ;
    }

    public function tampilan () {
    	return view('about');
    } 

    public function tampilmodel () {
    	$ortu = orangtua::all();
    	$anak = anak::all();
    	return view ('about',compact('ortu','anak'));
    }

}
