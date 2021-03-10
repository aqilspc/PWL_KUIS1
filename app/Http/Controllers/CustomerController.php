<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Models\Customer;
class CustomerController extends Controller
{
	public function index()
	{
		Session::put('aktif',8);

		$hola = [
			'title'=>'Daftar Pelanggan'
		];
		$data = Customer::paginate(5);
		return view('customer',$hola,compact('data'));
	}
}