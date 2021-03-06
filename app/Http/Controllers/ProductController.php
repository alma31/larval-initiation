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

	public function PostProductAdd(Request $request)
	{
		Product::create($request->all());
		return redirect()->action('ProductController@getIndex');
	}


	public function ModifProduct(Request $request){
		$produits = Product::find($request->id);
		$produits->name = $request->name;
		$produits->description = $request->description;
		$produits->price = $request->price;
		$produits->stock = $request->stock;
		$produits->save();
		return redirect()->action('ProductController@getIndex');



	}

	public function deletProduct($id){		
		$products = Product::find($id);
		$products->delete();
		return redirect()->action('ProductController@getIndex');
	}
}
