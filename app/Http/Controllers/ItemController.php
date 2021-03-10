<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Models\Item;
class ItemController extends Controller
{
	public function index()
	{
		Session::put('aktif',6);

		$hola = [
			'title'=>'Pengenalan About',
			'message'=>'Halamn pengenalan kelompok 1 , Abdulloh Aqil - Zulfikar rahhman'
		];
		$data = Item::paginate(10)->get();
		return view('item',$hola,compact('data'));
	}
}