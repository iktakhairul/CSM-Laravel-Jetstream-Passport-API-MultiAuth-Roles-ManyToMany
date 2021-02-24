<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\ownership;
use App\Models\Role;
use App\Models\User;
use Database\Seeders\OwnershipSeeder;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    public function index()
    {

        if (Gate::denies('users_view')) {
            abort(403);
        }

        $users = User::with('role', 'carModel')->get();
        $roles = Role::select('name')->get();
        $brands = Brand::all();
        $ownership = ownership::all();
        $car_model = CarModel::with('users')->get();

        return view('users.user.index', [
            'users' => $users,
            'roles' => $roles,
            'brands' => $brands,
            'ownership' => $ownership,
            'car_model' => $car_model

        ]);
    }
}
