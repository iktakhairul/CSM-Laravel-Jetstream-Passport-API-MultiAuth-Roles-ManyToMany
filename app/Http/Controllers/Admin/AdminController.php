<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUpdateUserRequest;
use App\Models\CarModel;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

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

        return view('admin.user.index', [
            'users' => $users,
            'roles' => $roles,
            'car_model' => $car_model,
        ]);
    }

    public function store()
    {
        $data = \request()->validate([

            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:8',
            'role_id' => 'required|integer',
        ]);
        $users = new User();
        $users->name = request('name');
        $users->email = request('email');
        $users->password = Hash::make(request('password'));
        $users->role_id = request('role_id');
        $users->save();

        return back();
    }

    public function edit(User $user)
    {
        if (Gate::denies('manage_employee')) {
            abort(403);
        }
        $role = Role::pluck('name', 'id');
        $user->load('role');

        return view('admin.user.edit', compact('user', 'role'));
    }

    public function update(AdminUpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('admin.user.index');
    }

    public function destroy(User $user)
    {
        if (Gate::denies('manage_employee')) {
            abort(403);
        }
        $user->delete();

        return redirect()->route('admin.user.index');
    }
}
