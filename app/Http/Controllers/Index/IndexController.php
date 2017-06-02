<?php

namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;

class IndexController extends Controller{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('index.index');
    }
}
