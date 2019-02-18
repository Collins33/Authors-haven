<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    //
    public function index(){
        return Product::all();
    }

    public function show(Product $product){
        // returns a single product
        return $product;
    }

    public function store(Request $request){
        // creates a product in the databse
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product){
        // updates a single product
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function delete(Product $product){
        // deleted a single product
        $product->delete();
        return response()->json(null, 204);

    }
}
