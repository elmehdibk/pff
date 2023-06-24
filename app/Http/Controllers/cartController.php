<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index(){
        $items=\Cart::getContent();
        return view('cart.index',compact('items'));
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

    public function getOrder(){
        foreach (\Cart::getContent() as $item) {
            order::create([
                "user_id" => auth()->user()->id,
                "product_name" => $item->name,
                "qty" => $item->quantity,
                "price" => $item->price,
                "total" => $item->quantity*$item->price,
                "paid" => 0
            ]);
            \Cart::clear();
        }
        return redirect()->route('cart.index')->with([
            'success' => 'Paid successfully'
        ]);
    }
}