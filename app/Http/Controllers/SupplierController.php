<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Models\Supplier;
class SupplierController extends Controller
{
	public function index()
	{
		Session::put('aktif',7);

		$hola = [
			'title'=>'Pengenalan About',
			'message'=>'Halamn pengenalan kelompok 1 , Abdulloh Aqil - Zulfikar rahhman'
		];
		$data = Supplier::paginate(10)->get();
		return view('supplier',$hola,compact('data'));
	}
}