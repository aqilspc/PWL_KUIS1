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
			'title'=>'Daftar Pegawai'
		];
		$data = Employee::paginate(5);
		return view('employee',$hola,compact('data'));
	}
}