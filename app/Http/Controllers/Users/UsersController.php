<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\CarList;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{

    public function index()
    {

        if (Gate::denies('users_view')) {
            abort(403);
        }

        $users = User::with('role')->get();
        $cars_list = User::with('cars')->get();
        $roles = Role::select('name')->get();
        $cars = CarList::all();
        $add_car = User::all();

        return view('users.user.index', [
            'users' => $users,
            'roles' => $roles,
            'cars_list' => $cars_list,
            'cars' => $cars,
            'add_car' => $add_car
        ]);
    }

      /* Have to work here
    public function store(){

        $data = \request()->validate([

            'car_id' => 'required|integer',

        ]);

        $add_new_car = new CarList();
        $add_new_car->car_id = request('car_id');
        $add_new_car->save();
        return back();
    }
      */

}
