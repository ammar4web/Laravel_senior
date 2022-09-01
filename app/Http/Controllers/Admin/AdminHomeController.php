<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(methods: 'exception');
    }

    public function home()
    {
        return "Hello from AdminHomeController With using middleware in controller";
    }

    public function exception()
    {
        return "Hello from AdminHomeController With using Controller: exception from middleware in controller";
    }
}
