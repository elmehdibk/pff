<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders=order::orderBy('user_id')->get();
        $items=\Cart::getContent();
        $count=count($items->toArray());
        $customers=product::all();
        $New=product::latest()->take(3)->get();
        return view('customer.index',compact('customers','items','count','orders','New'));
    }

    public function adminHome()
    {
        return view('home');
    }
}
