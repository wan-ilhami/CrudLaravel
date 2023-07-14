<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        return view('products.index');
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
        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }
}
