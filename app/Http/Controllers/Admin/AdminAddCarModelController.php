<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Support\Facades\Gate;

class AdminAddCarModelController extends Controller
{
    public function index()
    {
        if (Gate::denies('manage_employee')) {
            abort(403);
        }

        $brands = Brand::all();
        $car_model = CarModel::all();

        return view('admin.add_car_model', [

            'brands' => $brands,
            'car_model' => $car_model,
        ]);
    }

    public function store(){

        $data = \request()->validate([

            'brand_id' => 'required|integer',
            'car_model_name' => 'required|string',

        ]);

//unique:App\Models\CarModel,car_model_name

        $check = CarModel::where('brand_id', '=', request('brand_id'))->where('car_model_name', '=', request('car_model_name'))->first();

        if($check == null){

            $car_model = new CarModel();
            $car_model->car_model_name = request('car_model_name');
            $car_model->brand_id = request('brand_id');
            $car_model -> save();
            return back()->with('success', 'New Brand Model Added successfully.');

        }else{

            return back()->with('danger', 'You already own this Brand!');
        }

    }
}
