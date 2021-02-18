<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CarListController extends Controller
{
    public function index()
    {

        if (Gate::denies('manage_employee')) {
            abort(403);
        }

        $users = User::with('role')->get();
        $roles = Role::select('name')->get();

        return view('admin.user.index', [
            'users' => $users,
            'roles' => $roles,
        ]);
    }

//    public function store(){
//
//        $data = \request()->validate([
//
//            'car_brand' => 'required',
//            'car_model' => 'required',
//
//        ]);
//
//        $cars_list = new CarList();
//        $cars_list->car_brand = request('car_brand');
//        $cars_list->car_model = request('car_model');
//
//        $cars_list->save();
//        return back();
//    }
}
