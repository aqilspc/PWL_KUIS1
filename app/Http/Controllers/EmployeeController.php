<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Models\Employee;
class EmployeeController extends Controller
{
	public function index()
	{
		Session::put('aktif',5);

		$hola = [
			'title'=>'Pengenalan About',
			'message'=>'Halamn pengenalan kelompok 1 , Abdulloh Aqil - Zulfikar rahhman'
		];
		$data = Employee::paginate(10)->get();
		return view('employee',$hola,compact('data'));
	}
}