<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EmployeeInfoController extends Controller
{
    public function index()
    {
        if (Gate::denies('manage_users')) {
            abort(403);
        }

        return User::with('role', 'carModel')->where('role_id', '!=', 1)->get();
    }
}
