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

	public function getShow($id){
		$produits = Product::find($id);
		return view ('oneproduct', ['produits' => $produits]);
	}

	public function stockless($id){
		$produits = Product::find($id);
		$produits->stock--;
		$produits->save();
		return back();
	}

	public function stockMore($id){
		$produits = Product::find($id);
		$produits->stock++;
		$produits->save();
		return back();
	}
}
