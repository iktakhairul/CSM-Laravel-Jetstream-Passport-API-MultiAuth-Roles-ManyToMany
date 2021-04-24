<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\http\Resources\UserResourceCollection;
use App\http\Resources\BrandResourceCollection;

class UserInfoController extends Controller
{
    public function index()
    {
        if (Gate::denies('users_view')) {
            abort(403);
        }

        return User::with('role', 'carModel')->where('id', '=', Auth::user()->id)->get();
    }

    public function brand()
    {
        if (Gate::denies('users_view')) {
            abort(403);
        }

        return Brand::select('brand_name')->get();
    }

    public function carModel()
    {
        if (Gate::denies('users_view')) {
            abort(403);
        }
        $users = User::with('role', 'carModel')->get();
        $car_model = '';

        foreach ($users as $user) {
            if ($user->role_id === 3 && Auth::user()->id == $user->id) {
                $car_model = $user->carModel;
            }
        }
        if ($car_model != '[]') {
            return new UserResourceCollection($car_model);
        }else {
            return 'User\'s car not Found.';
        }
    }

    public function toPublicBrandInfo()
    {
        return new UserResourceCollection(CarModel::with('brand')->get());
    }

    public function toPublicCarModelInfo()
    {
        return new BrandResourceCollection(Brand::all());
    }
}
