<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Student;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller{
    public function index(){
        return view('admin.index');
    }
    public function demo(){
        $data = Student::get();
        return view('admin.demo',['data',$data]);
    }
    public function create(){

    }
}
