<x-users-layout>
        <x-slot name="header">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Add New Brand') }}
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
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
            <form method="POST" action="{{ route('admin.car_panel') }}" x-data="{role_id: 3}">
                @csrf
            <div class="container ">
                <div class="form-check">
                    <input class=" row-auto form-check-input" type="checkbox" value="Brand 1" id="brand_name" name="brand_name">
                    <div class="card">
                        <div class="card-header row-auto">
                            Brand 1
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">Car Brand Details.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class=" row-auto form-check-input" type="checkbox" value="Brand 2" id="brand_name" name="brand_name">
                    <div class="card">
                        <div class="card-header row-auto">
                            Brand 2
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">Car Brand Details.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class=" row-auto form-check-input" type="checkbox" value="Brand 3" id="brand_name" name="brand_name">
                    <div class="card">
                        <div class="card-header row-auto">
                            Brand 3
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">Car Brand Details.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class=" row-auto form-check-input" type="checkbox" value="Brand 4" id="brand_name" name="brand_name">
                    <div class="card">
                        <div class="card-header row-auto">
                            Brand 4
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">Car Brand Details.</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input class=" row-auto form-check-input" type="checkbox" value="Brand 5" id="brand_name" name="brand_name">
                    <div class="card">
                        <div class="card-header row-auto">
                            Brand 5
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
                        {{ __('Car Brand') }}
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
                                                Brand Id
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Date Added
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            @foreach ($brands as $brand)
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">{{ $brand->brand_name }}</div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">{{ $brand->id }}</div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">{{ $brand->created_at }}</div>
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
