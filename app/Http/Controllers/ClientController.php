<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    //

    public function index(){
        return view('client.index');
    }
    public function create(){
        return view('clients.new');
    }

    public function store(Request $request){
        Log::info('sss');
//        $request->validate([
//            "currency"  => "required",
//            "buy"       => "required",
//            "range"     => "required|numeric",
//            "tp1"       => "required|numeric"
//        ]);
//        $order = new Order();
//        $order->expert_id  = auth('expert')->id();
//        $order->service_id = $request->service_id;
//        $order->currency   = $request->currency;
//        $order->buy        = $request->buy;
//        $order->range      = $request->range;
//        $order->type       = $request->type;
//        $order->stop_loss  = $request->stop_loss;
//        $order->tp1        = $request->tp1;
//        $order->save();
//        session()->flash('success', "Order published successfully");
        return redirect()->back();
    }
}
