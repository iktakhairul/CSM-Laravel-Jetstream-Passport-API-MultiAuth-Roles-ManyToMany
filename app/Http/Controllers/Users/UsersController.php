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
        $users = User::with('role', 'cars')->get();
        $roles = Role::select('name')->get();
        $car_model = CarList::select('car_model')->get();

        return view('users.user.index', [
            'users' => $users,
            'roles' => $roles,
            'car_model' => $car_model,
        ]);
    }

}
