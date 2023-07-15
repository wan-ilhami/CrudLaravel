<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class productController extends Controller
{
    public function index(){
        $products = products::all();//to show all product in database into website
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $rq){
        //store in array to post
        $data = $rq->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            ]);

        //store in database
        $newProduct = products::create($data);

        return redirect(route('product.index'));
    }

    public function edit(products $product){
        return view('products.edit', ['product' => $product]);
    }
    
    public function update(products $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Succesffully');

    }

    public function destroy(products $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted Succesffully');
    }
}
