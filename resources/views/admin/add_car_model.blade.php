<x-users-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Brand Car Model') }}
            </h2>
        </div>
    </x-slot>
    <div class="mx-auto bg-gray-100" style="margin-bottom: -30px">
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('danger'))
            <div class="alert alert-danger">
                {{ Session::get('danger') }}
                @php
                    Session::forget('danger');
                @endphp
            </div>
        @endif
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
        <form method="POST" action="{{ route('admin.add_car_model') }}" x-data="{role_id: 0}">
            @csrf
            <div class="container ">
                <div class="mt-4">
                    <x-jet-label for="brand_id" value="{{ __('Select New Brand:') }}" />
                    <select name="brand_id" x-model="brand_id" required class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option selected>Select</option>
                        @foreach( $brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                        @endforeach
                    </select>
                    @if($errors->first('brand_id'))
                        <div class="alert alert-danger">{{ Session::get('danger', 'Select Brand Please!') }}</div>
                    @endif
                </div>
                <br>
                <div class="form-check">
                    <input class=" row-auto form-check-input" type="checkbox" value="Model 1" id="car_model_name" name="car_model_name">
                    <div class="card">
                        <div class="card-header row-auto">
                            Model 1
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">Car Brand Details.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class=" row-auto form-check-input" type="checkbox" value="Model 2" id="car_model_name" name="car_model_name">
                    <div class="card">
                        <div class="card-header row-auto">
                            Model 2
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">Car Brand Details.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class=" row-auto form-check-input" type="checkbox" value="Model 3" id="car_model_name" name="car_model_name">
                    <div class="card">
                        <div class="card-header row-auto">
                            Model 3
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">Car Brand Details.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class=" row-auto form-check-input" type="checkbox" value="Model 4" id="car_model_name" name="car_model_name">
                    <div class="card">
                        <div class="card-header row-auto">
                            Model 4
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">Car Brand Details.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class=" row-auto form-check-input" type="checkbox" value="Model 5" id="car_model_name" name="car_model_name">
                    <div class="card">
                        <div class="card-header row-auto">
                            Model 5
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">Car Brand Details.</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="ml-4">
                        {{ __('Add Car') }}
                    </x-jet-button>
                </div>
                <div class="flex items-center justify-end mt-4"></div>
            </div>
        </form>
        <hr>
        <div class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Car Brand and Model') }}
                </h2>
            </div>
        </div>
        <div class="mx-auto pb-6 bg-gray-100 ">
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Car Brand
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Car Model
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Brand Id - Car Model Id
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Date Added
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        @foreach ($car_model as $cars)
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $cars->brand->brand_name }}</div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $cars->car_model_name }}</div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $cars->brand->id }} - {{ $cars->id }}</div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $cars->created_at }}</div>
                                                </div>
                                            </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
    </div>
</x-users-layout>
