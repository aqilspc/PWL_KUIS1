<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
class ContactController extends Controller
{
	public function index()
	{
		Session::put('aktif',2);
		$hola = [
			'title'=>'Pengenalan Contact Us',
			'message'=>'Halamn pengenalan kelompok 1 , Abdulloh Aqil - Zulfikar rahhman'
		];
		return view('contact',$hola);
	}
}