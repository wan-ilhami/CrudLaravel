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
        $data = $rq->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            ]);

        $newProduct = Product::create($data);//store in database

        return redirect(route('product.index'));
    }
}
