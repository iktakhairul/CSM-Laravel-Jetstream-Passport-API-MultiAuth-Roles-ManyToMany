<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class UsersAboutContactController extends Controller
{
    public function index()
    {

        if (Gate::denies('users_view')) {
            abort(403);
        }

        return view('users.about');
    }

    public function contact()
    {

        if (Gate::denies('users_view')) {
            abort(403);
        }
        return view('users.contact');
    }
}
