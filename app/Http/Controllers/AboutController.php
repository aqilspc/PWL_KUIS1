<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Models\About;
class AboutController extends Controller
{
	public function index()
	{
		Session::put('aktif',4);

		$hola = [
			'title'=>'Pengenalan Home',
			'message'=>'HomePage'
		];
		$data = About::where('id',3)->first();
		return view('about',$hola,compact('data'));
	}
}