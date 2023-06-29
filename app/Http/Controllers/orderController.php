<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;

class orderController extends Controller
{
   
    public function index()
    {
        $users=User::all()->where('is_admin','=',0) ; 
        // $sum=order::sum('total');
        $orders=order::orderBy('user_id')->get();
        
        return view('orders.index',compact('orders','users'));
    }

    public function Delivered()
    {
        // $users=User::all()->where('is_admin','=',0) ; 
        // $sum=order::sum('total');
        $items=\Cart::getContent();
        $count=count($items->toArray());
        $orders=order::orderBy('user_id')->get();
        
        return view('customer\delivred',compact('orders','count'));
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

     
    public function updateDelivered(Request $request, order $order)
    {
        //
        $order->update([
            "delivered" => 1
        ]);
        
        return redirect()->back()->withSuccess("Order updated");
    }

    public function updatePaid(Request $request, order $order)
    {
        
        $order->update([
            "paid" => 1
        ]);
        return redirect()->back()->withSuccess("Order paid");
    }

    
    public function destroy(order $order)
    {
        //
        $order->delete();
        return redirect()->back()->withSuccess("Order deleted");
    }
}
    

