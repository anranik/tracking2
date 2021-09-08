<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContainerController extends Controller
{
    //

    public function index(){
        return view('containers.list');
    }
    public function create(){
        return view('containers.new');
    }

    public function store(Request $request){
    }
}
