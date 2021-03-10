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
			'title'=>'Pengenalan About',
			'message'=>'Halamn pengenalan kelompok 1 , Abdulloh Aqil - Zulfikar rahhman'
		];
		$data = Customer::paginate(10)->get();
		return view('customer',$hola,compact('data'));
	}
}