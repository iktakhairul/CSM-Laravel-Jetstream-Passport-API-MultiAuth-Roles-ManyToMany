<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Brand;
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

        $users = User::with('role', 'brands')->get();
        $roles = Role::select('name')->get();
        $brands = Brand::all();
        $ownership = ownership::all();


        return view('users.user.index', [
            'users' => $users,
            'roles' => $roles,
            'brands' => $brands,
            'ownership' => $ownership,

        ]);
    }
}
