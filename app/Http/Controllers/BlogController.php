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
			'title'=>'Pengenalan Home',
			'message'=>'HomePage'
		];
		return view('blog',$hola);
	}
}