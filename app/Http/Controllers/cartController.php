<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use App\Models\User;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index(){
        $orders=order::orderBy('user_id')->get();
        $items=\Cart::getContent();
        $count=count($items->toArray());
        return view('cart.index',compact('items','count','orders'));
    }
    public function addProductToCart(Request $request ,product $product){

        \Cart::add(array(
            "id" => $product->id,
            "name" => $product->product_name,
            "price" => $product->prix,
            "quantity" => $request->qty,
            "attributes" => array(),
            "associatedModel" => $product,
        ));
        return redirect()->route("cart.index");
    }

    public function updateProductOnCart(Request $request, product $product)
    {
        \Cart::update($product->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->qty
            ),
        ));
        return redirect()->route("cart.index");
    }
    public function removeProductFromCart(Product $product)
    {
        \Cart::remove($product->id);
        return redirect()->route("cart.index");
    }

    public function getOrder(Request $request){

        foreach (\Cart::getContent() as $item) {
            order::create([
                "user_id" => auth()->user()->id,
                "product_name" => $item->name,
                "qty" => $item->quantity,
                "price" => $item->price,
                "total" => $item->quantity*$item->price,
                "paid" => 0,
                'adress'=>$request->adress,
                'phone'=>$request->phone,
                'getTotale'=>$request->getTotale,

            
            ]);
            
            \Cart::clear();
        }
        return redirect()->route('cart.index')->with([
            'success' => 'Paid successfully'
        ]);
    }
}