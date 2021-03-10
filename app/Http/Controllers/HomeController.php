<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Models\Home;
use App\Models\Blog;
use App\Models\Category;
class HomeController extends Controller
{
	public function index()
	{
		Session::put('aktif',1);
		$hola = [
			'title'=>'Pengenalan Home',
			'message'=>'Halamn pengenala kelompok 1 , Abdulloh Aqil - Zulfikar rahhman'
		];
		
		$blog = Blog::limit(4)->get();
		$category = Category::limit(5)->get();
		return view('home',$hola,compact('blog','category'));
	}
}