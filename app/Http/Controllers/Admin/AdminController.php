<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarList;
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

        $users = User::with('role')->get();
        $cars_list = User::with('cars')->get();
        $roles = Role::select('name')->get();
        $cars = CarList::all();

        return view('admin.user.index', [
            'users' => $users,
            'roles' => $roles,
            'cars_list' => $cars_list,
            'cars' => $cars
        ]);
    }

    public function store(){

        $data = \request()->validate([

            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:8',
            'role_id' => 'required|integer',
            'employee_designation' => 'required',
            'user_address' => 'required',
            'user_phone_number' => 'required',
        ]);

        $users = new User();
        $users->name = request('name');
        $users->email = request('email');
        $users->role_id = request('role_id');
        $users->password = request('password');
        $users->user_address = request('user_address');
        $users->user_phone_number = request('user_phone_number');
        $users->employee_designation = request('employee_designation');

        $users->save();
        return back();
    }

}
