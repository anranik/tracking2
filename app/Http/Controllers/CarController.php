<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\CarService;
use Illuminate\Support\Facades\Log;

class CarController extends Controller
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function index(){
        return view('car.index');
    }
    public function create(){
        return view('cars.new');
    }

    public function store(Request $request){
    }
    //
    public function create1(Request $request)
    {

        try {
            $data = $request->only(['plate_number','model','color','type','contact_person','description']);
            $rules = [
                'plate_number' => 'required',
                'model' => 'required',
                'color' => 'required',
                'contact_person' => 'required',
                'type' => 'required',
                'description' => 'required',
            ];

            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                return $this->response(false,$this->validationHandle($validator->messages()));
            } else {
                $this->carService->saveRecord($data);

//                $newRecord =  new Car();
//                $newRecord->plate_number=$request->plate_number;
//                $newRecord->model=$request->model;
//                $newRecord->color=$request->color;
//                $newRecord->description=$request->description;
//                $newRecord->contact_person=$request->contact_person;
//                $newRecord->type=$request->type;
//
//                $newRecord->save();
                return $this->response(true,'success');
            }
        } catch (Exception $e) {
            return $this->response(false,'system error');
        }

    }
}
