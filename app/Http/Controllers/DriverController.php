<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Log;

class DriverController extends Controller
{
    //
//    public function index(){
//        return view('driver.index');
//    }
//    public function create(){
//        return view('drivers.new');
//    }
//
//    public function store(Request $request){
//        Log::info('test');
//        Log::info($request);
//    }


    public function index(){
        return view('drivers.index');
    }

    public function data(){
//        if(auth()->user()->hasRole('expert')){
//            $subscriptions = Service::query()->where('expert_id', auth()->id())->get();
//            return datatables()->of($subscriptions)->make(true);
//        }else{
//            $subscriptions = Service::query()->get();
//            return datatables()->of($subscriptions)->addColumn('subscribed', function(Service $service) {
//                return Subscription::query()->where(['service_id' => $service->id, 'subscriber_id' => auth()->id()])->first() ? 1 : 0;
//            })->make(true);
//        }
    }

    public function create(){
        return view('drivers.create');
    }

    public function store(Request $request){
        Log::info('test');

        $request->validate([
            "name"   => "required|max:30",
            'mobile' => 'required|digits:10|regex:/(0)[0-9]{9}/',
            "username"   => "required|unique:drivers",
            "password"   => "required"
        ]);
        $driver = new Driver();
//        $driver->userid    = auth()->id();
        $driver->mobile    = $request->mobile;
        $driver->name         = $request->name;
        $driver->password  =  Hash::make($request->password);
        $driver->username       = $request->username;
        $driver->save();
        session()->flash('success', "Driver created successfully");
        return redirect()->back();
    }

    public function edit($id){
        $subscription = Driver::find($id);
        return view('drivers.edit')->with("driver", $subscription);
    }

    public function update(Request $request, $id){
        $request->validate([
            "name"   => "required",
            "mobile" => "required",
            "username"   => "required",
        ]);
        $subscription = Driver::find($id);
        if(auth()->id() !== $subscription->expert_id){
            session()->flash('error', "You can't update this driver");
            return redirect()->back();
        }
//        $subscription->name         = $request->name;
//        $subscription->description  = $request->description;
//        $subscription->period       = $request->period;
//        $subscription->cost         = $request->cost;
//        $subscription->save();
        session()->flash('success', "Driver updated successfully");
        return redirect()->back();
    }


    public function delete(Request $request){
        $id = $request->id;
        $subscription = Driver::find($id);
        if($subscription)
            $subscription->delete();
        session()->flash('success', "Driver deleted successfully");
        return "success";
    }

}
