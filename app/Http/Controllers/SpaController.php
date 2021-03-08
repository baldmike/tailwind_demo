<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class SpaController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('spa');
    }

    public function notFound()
    {
        return view('spa');
    }
}
