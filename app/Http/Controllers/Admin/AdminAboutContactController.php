<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminAboutContactController extends Controller
{
    public function index()
    {

        if (Gate::denies('manage_employee')) {
            abort(403);
        }

        return view('admin.about');
    }

    public function contact()
    {

        if (Gate::denies('manage_employee')) {
            abort(403);
        }
        return view('admin.contact');
    }
}
