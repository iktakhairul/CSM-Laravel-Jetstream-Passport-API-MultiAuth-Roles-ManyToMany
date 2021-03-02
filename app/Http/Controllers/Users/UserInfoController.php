<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserInfoController extends Controller
{
    public function index()
    {
        if (Gate::denies('users_view')) {
            abort(403);
        }

        return User::with('role', 'carModel')->where('role_id', '=', Auth::user()->id)->get();
    }
}
