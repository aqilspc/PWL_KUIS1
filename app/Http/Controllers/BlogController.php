<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
class BlogController extends Controller
{
	public function index()
	{
		Session::put('aktif',3);
		$hola = [
			'title'=>'Pengenalan Blog',
			'message'=>'Halamn pengenalan kelompok 1 , Abdulloh Aqil - Zulfikar rahhman'
		];
		return view('blog',$hola);
	}
}