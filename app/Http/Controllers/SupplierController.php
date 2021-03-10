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
			'title'=>'Daftar Supplier'
		];
		$data = Supplier::paginate(5);
		return view('supplier',$hola,compact('data'));
	}
}