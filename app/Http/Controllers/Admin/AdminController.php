<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarList;
use App\Models\CarModel;
use App\Models\Ownership;
use App\Models\Role;
use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index()
    {

        if (Gate::denies('manage_employee')) {
            abort(403);
        }

        $users = User::with('role', 'carModel')->get();
        $roles = Role::select('name')->get();
        $car_model = CarModel::with('brand')->get();
        $ownership = Ownership::all();


        return view('admin.user.index', [
            'users' => $users,
            'roles' => $roles,
            'car_model' => $car_model,
            'ownership' => $ownership
        ]);
    }

    public function store(){

        $data = \request()->validate([

            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:8',
            'role_id' => 'required|integer',
        ]);

        $users = new User();
        $users->name = request('name');
        $users->email = request('email');
        $users->role_id = request('role_id');
        $users->password = request('password');

        $users->save();
        return back();
    }

}
