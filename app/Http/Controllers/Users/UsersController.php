<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserUpdateRequest;
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
        $car_model = CarModel::with('users')->get();

        return view('users.user.index', [
            'users' => $users,
            'roles' => $roles,
            'brands' => $brands,
            'car_model' => $car_model,
        ]);
    }


    public function edit(User $user)
    {
        if (Gate::denies('users_view')) {
            abort(403);
        }
        $role = Role::pluck('name', 'id');
        $user->load('role');

        return view('users.user.edit', compact('user', 'role'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('users.user.index');
    }
}
