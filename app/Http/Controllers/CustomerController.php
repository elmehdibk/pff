<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=order::orderBy('user_id')->get();
        $items=\Cart::getContent();
        $count=count($items->toArray());
        $customers=product::latest()->get();
        $New=product::latest()->take(3)->get();
        return view('customer.index',compact('customers','items','count','orders','New'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(product $customer)
    {
        $orders=order::orderBy('user_id')->get();
        $items=\Cart::getContent();
        $count=count($items->toArray());
        return view('customer.show',compact('customer','items','count','orders'));
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
