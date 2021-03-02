<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AdminAddBrandController extends Controller
{
    public function index()
    {
        if (Gate::denies('manage_employee')) {
            abort(403);
        }
        $users = User::with('role')->get();
        $brands = Brand::all();

        return view('admin.car_panel', [
            'users' => $users,
            'brands' => $brands,
        ]);
    }

    public function store()
    {
        $data = \request()->validate([
            'brand_name' => ['required', 'string', 'unique:App\Models\Brand,brand_name'],
        ]);
        $brand = new Brand();
        $brand->brand_name = request('brand_name');
        $brand->save();

        return back()->with('success', 'New Brand Added successfully.');
    }
}
