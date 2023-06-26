<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($type=null)
    {
        $products=array();
        if($type==null){
            $products=product::all();
        }
        else{

            $products=product::where('type','=', $type)->get();
        }
        
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
            'old_prix'=>'numeric|nullable',
            'bio'=>'required',
            'stock'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg,svg',
            'type'=>'required',
        ]);
        // dd($formFildes);
        if($request->hasFile('image')){
            $formFildes['image']= $request->file('image')->store('product','public');
        }
        product::create($formFildes);
        return to_route('products.create')->with('success','product is added');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $formFildes=$request->validate([
            'product_name'=>'required',
            'prix'=>'required|numeric',
            'old_prix'=>'numeric|nullable',
            'bio'=>'required',
            'stock'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg,svg',
            'type'=>'required',
        ]);
        // dd($formFildes);
        if($request->hasFile('image')){
            $formFildes['image']= $request->file('image')->store('product','public');
        }
        $product->fill($formFildes)->save();
        return to_route('products.index',$product->id)->with('success','product is updated');

    }

    /**
     * Remove the specified resource from storage.
     */
        public function verification(product $product){
                return view('product.verification',compact('product'));
        } 

        public function info(){
            $products=product::all();
            return view('product.info',compact('products'));
        }
    public function destroy($id)
    {
        $product=product::find($id);
        $product->delete();
        return to_route('products.index')->with('success','this product '.'"'.$product->product_name.'"'.' is deleted');
    }
}
