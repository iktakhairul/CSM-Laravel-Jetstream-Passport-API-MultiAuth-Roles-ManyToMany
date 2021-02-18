<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
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
        $roles = Role::select('name')->get();

        return view('users.user.index', [
            'users' => $users,
            'roles' => $roles,

        ]);
    }

      // Have to work here
//    public function store(){
//
//        $data = \request()->validate([
//
//            'car_id2' => 'required|integer',
//        ]);
//
//        $add_car = new User();
//        $add_car->car_id2 = request('car_id2');
//        $add_car->save();
//        return back();
//    }
      //

}
