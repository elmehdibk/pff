<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=product::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->product_name);
        // dd($request->prix);
        // dd($request->bio);
        $formFildes=$request->validate([
            'product_name'=>'required',
            'prix'=>'required|numeric',
            'bio'=>'required',
            'stock'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg,svg',
        ]);
        // dd($formFildes);
        if($request->hasFile('image')){
            $formFildes['image']= $request->file('image')->store('profile','public');
        }
        product::create($formFildes);
        return to_route('products.index')->with('success','product is added');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
