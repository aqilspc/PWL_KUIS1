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
			'title'=>'Daftar Barang'
		];
		$data = Item::paginate(5);
		return view('item',$hola,compact('data'));
	}
}