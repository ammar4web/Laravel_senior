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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            "data1" => "My data1 From Controller",
            "data2" => "My data2 From Controller",
            "data3" => "My data3 From Controller",
        ];

        $opj = new \stdClass();
        $opj->data1 = "My data1 From Controller From Opject";
        $opj->data2 = "My data2 From Controller From Opject";
        $opj->data3 = "My data3 From Controller From Opject";

        // associative array: (, $data)
        // opject: (, compact('opj'))
        return view('home', $data, compact('opj'));
    }
}
