<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class EmployeeAboutContactController extends Controller
{
    public function index()
    {

        if (Gate::denies('manage_users')) {
            abort(403);
        }

        return view('employee.about');
    }

    public function contact()
    {

        if (Gate::denies('manage_users')) {
            abort(403);
        }
        return view('employee.contact');
    }
}
