<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\ownership;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AddBrandController extends Controller
{

    public function index()
    {
        if (Gate::denies('users_view')) {
            abort(403);
        }

        $users = User::with('role')->get();
        $brands = Brand::all();
        $ownership = ownership::all();
        $roles = Role::select('name')->get();
        $car_model = CarModel::with('brand')->get();

        return view('users.add_brand', [
            'users' => $users,
            'roles' => $roles,
            'brands' => $brands,
            'ownership' => $ownership,
            'car_model' => $car_model

        ]);
    }

    public function store(){

        $data = \request()->validate([

            'user_id' => 'required|integer',
            'car_model_id' => ['required', 'integer'],

        ]);

        $check =  Ownership::where('user_id', '=', request('user_id'))->where('car_model_id', '=', request('car_model_id'))->first();

        if($check == null){

            $user = User::find(request('user_id'));
            $user->carmodel()->syncWithoutDetaching(request('car_model_id'));

        }else{

            return back()->with('danger', 'You already own this Brand!');
        }

        return back()->with('success', 'Brand Added successfully.');
    }

}
