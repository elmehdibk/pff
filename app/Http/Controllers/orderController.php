<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class orderController extends Controller
{
   
    public function index()
    {
        $orders=order::all();
        return view('orders.index',compact('orders'));
    }


    public function store(Request $request)
    {
        //
    }

    
    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        //
    }

     
    public function update(Request $request, order $order)
    {
        //
        $order->update([
            "delivered" => 1
        ]);
        $order->update([
            "paid" => 1
        ]);
        return redirect()->back()->withSuccess("Order updated");
    }

    
    public function destroy(order $order)
    {
        //
        $order->delete();
        return redirect()->back()->withSuccess("Order deleted");
    }
}
    

