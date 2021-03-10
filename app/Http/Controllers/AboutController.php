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
			'title'=>'Pengenalan About',
			'message'=>'Halamn pengenalan kelompok 1 , Abdulloh Aqil - Zulfikar rahhman'
		];
		$data = About::where('id',3)->first();
		return view('about',$hola,compact('data'));
	}
}