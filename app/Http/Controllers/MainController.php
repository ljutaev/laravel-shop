<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class MainController extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function categories()
	{
		$categories = Category::get();
		return view('categories', compact( 'categories' ));
	}

	public function category( $code )
	{
		$category = Category::where('code', $code)->first();
		return view('category', compact( 'category' ) );
	}

	public function product( $product )
	{
		return view('product', [ 'product', $product ]);
	}
}
