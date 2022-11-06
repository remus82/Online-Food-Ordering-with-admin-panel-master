<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

   public function index() {

       // get all the products
		$products = Product::all();

		// load the view and pass the products
		return View::make('products.index')
			->with('products', $products);



   }
   public function create() {
      // load the create form (views/users/create.blade.php)
		return View::make('products.create');
   }
   public function store(Request $request) {
            // store
			$product = new Product;
			$product->name       = Input::get('name');
			$product->description      = Input::get('description');
            $product->ingredients      = Input::get('ingredients');
			$product->status = Input::get('status');
			$product->save();

			// redirect
			Session::flash('message', 'Product successfully created!');
			return Redirect::to('products');
   }
   public function show($id) {
     // get the product
		$product = Product::find($id);

		// show the view and pass the product to it
		return View::make('products.show')
			->with('product', $product);
   }
   public function edit($id) {
     // get the product
		$product = Product::find($id);

		// show the edit form and pass the product
		return View::make('products.edit')
			->with('product', $product);
   }
   public function update($id) {
            // store
			$nerd = Product::find($id);
			$product->name       = Input::get('name');
			$product->description      = Input::get('description');
            $product->ingredients      = Input::get('ingredients');
			$product->status = Input::get('status');
			$product->save();

			// redirect
			Session::flash('message', 'Product successfully updated!');
			return Redirect::to('products');
   }
   public function destroy($id) {
            // delete
            $product = Product::find($id);
            $product->delete();

        // redirect
			Session::flash('message', 'Product successfully deleted!');
			return Redirect::to('products');
   }

}
