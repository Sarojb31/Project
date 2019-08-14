<?php

namespace App\Http\Controllers;

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
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       return view('FrontEnd.index');
    }
     public function shop()
    {
       return view('FrontEnd.shop');
    }
     public function about()
    {
       return view('FrontEnd.about');
    }
     public function contact()
    {
       return view('FrontEnd.contact');
    }
}
