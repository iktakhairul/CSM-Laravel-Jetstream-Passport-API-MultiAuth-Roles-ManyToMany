<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\ownership;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AddBrandController extends Controller
{

    public function index()
    {
        if (Gate::denies('users_view')) {
            abort(403);
        }

        $users = User::with('role')->get();
        $brands = Brand::all();
        $ownership = ownership::all();
        $roles = Role::select('name')->get();

        return view('users.add_brand', [
            'users' => $users,
            'roles' => $roles,
            'brands' => $brands,
            'ownership' => $ownership,

        ]);
    }

    public function store(){

        // $user = User::first();
        // $user->brands()->sync([1,2,3,4,5]);

        $data = \request()->validate([

            'user_id' => 'required|integer',
            'brand_id' => ['required', 'integer',

            ],

        ]);

        $check =  ownership::where('user_id', '=', request('user_id'))->where('brand_id', '=', request('brand_id'))->first();

        if($check == null){

            $user = User::find(request('user_id'));
            $user->brands()->syncWithoutDetaching(request('brand_id'));

        }else{

            return back()->with('danger', 'You already own this Brand!');
        }

        return back()->with('success', 'Brand Added successfully.');
    }

}
