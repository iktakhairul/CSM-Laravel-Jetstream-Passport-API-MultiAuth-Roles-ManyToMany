<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        if (Gate::denies('manage_users')) {
            abort(403);
        }
        $users = User::with('role', 'carModel')->get();
        $roles = Role::select('name')->get();

        return view('employee.user.index', [
            'users' => $users,
            'roles' => $roles,
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
        if (Gate::denies('manage_users')) {
            abort(403);
        }
        $role = Role::pluck('name', 'id');
        $user->load('role');

        return view('employee.user.edit', compact('user', 'role'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('employee.user.index');
    }

    public function destroy(User $user)
    {
        if (Gate::denies('manage_users')) {
            abort(403);
        }
        $user->delete();

        return redirect()->route('employee.user.index');
    }
}
