<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AdminInfoController extends Controller
{
    public function index()
    {
        if (Gate::denies('manage_employee')) {
            abort(403);
        }

        return User::with('role', 'carModel')->get();
    }

    public function brand()
    {
        if (Gate::denies('manage_employee')) {
            abort(403);
        }

        return Brand::all();
    }

    public function carModel()
    {
        if (Gate::denies('manage_employee')) {
            abort(403);
        }

        return CarModel::with('brand')->get();
    }
}
