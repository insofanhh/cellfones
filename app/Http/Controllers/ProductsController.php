<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;


class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('admin.products.index', ['products' => $products]);
        
    }

    public function create(){
        return view('admin.products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required',
            'description' => 'nullable'
        ]);

        $newProduct = Products::create($data);
        return redirect(route('admin.products.index'));
    }

    public function  edit(Products $product){
        return view('admin.products.edit',['product'=> $product]);
    }

    public function update(Products $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required',
            'description' => 'nullable'
        ]);

        $product->update($data);
        return redirect(route('admin.products.index'))->with('success','Product Updated Seccessfully');
    }

    public function delete(Products $product){
        $product->delete();
        return redirect(route('product.index'))->with('success','Product Deleted Seccessfully');
    }
}