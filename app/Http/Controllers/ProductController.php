<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
	public function getIndex(){
		$prod = Product::all();
		return view ('products', ['produits' => $prod]);
	}
}