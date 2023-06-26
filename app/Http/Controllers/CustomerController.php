<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=\Cart::getContent();
        $count=count($items->toArray());
        $customers=product::latest()->get();
        return view('customer.index',compact('customers','items','count'));
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
        $items=\Cart::getContent();
        $count=count($items->toArray());
        return view('customer.show',compact('customer','items','count'));
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
