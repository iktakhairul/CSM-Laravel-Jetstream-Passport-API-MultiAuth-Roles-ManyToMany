<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
    public function store(){

        $data = \request()->validate([

            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:8',
            'role_id' => 'required|integer',
        ]);

        $users = new User();
        $users->name = request('name');
        $users->email = request('email');
        $users->password = request('password');
        $users->role_id = request('role_id');

        $users->save();
        return back();
    }
}
