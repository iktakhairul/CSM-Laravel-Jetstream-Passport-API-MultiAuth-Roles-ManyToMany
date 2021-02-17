<?php

namespace App\Http\Controllers;

use App\Models\CarList;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterCarListController extends Controller
{
    public function list()
    {

        $users = User::with('role')->get();
        $cars_list = User::with('cars')->get();
        $roles = Role::select('name')->get();
        $cars = CarList::all();

        return view('auth.register', [
            'users' => $users,
            'roles' => $roles,
            'cars_list' => $cars_list,
            'cars' => $cars,
        ]);
    }
}
