<x-users-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add Car Brand') }}
            </h2>

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
        @if(Session::has('danger'))
            <div class="alert alert-danger">
                {{ Session::get('danger') }}
                @php
                    Session::forget('danger');
                @endphp
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form method="POST" action="{{ route('users.add_brand') }}" x-data="{role_id: 0}">
            @csrf
            <div class="row-auto form-check-input">
                @foreach ($users as $user)
                    @if($user->role_id === 3 && \Illuminate\Support\Facades\Auth::user()->id == $user->id)
                        <div>
                            <label for="user_id" value="{{ __('For Your Id:') }}" />
                            <input style="border: none; margin-left: -200px" readonly id="user_id" class="block mt-1 w-full" type="text" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}"/>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="container">
{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="" value="{{ __('Select New Brand:') }}" />--}}
{{--                    <select name="" x-model="" required class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">--}}
{{--                        <option selected>Select</option>--}}
{{--                        @foreach( $brands as $brand)--}}
{{--                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}
                <br>
                @foreach($car_model as $car)

                        <div class="form-check">
                            <input class="row-auto form-check-input" type="checkbox" value="{{ $car->id }}" id="car_model_id" name="car_model_id">
                            <div class="card">
                                <div class="card-header row-auto">
                                    {{ $car->brand->brand_name }}
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $car->car_model_name }}</h5>
                                    <p class="card-text">Car Brand Details.</p>
                                </div>
                            </div>
                        </div>
                            <br>

                @endforeach

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="ml-4">
                        {{ __('Add Car') }}
                    </x-jet-button>
                </div>
                <div class="flex items-center justify-end mt-4"></div>
            </div>
        </form>
    <br>
    </div>
</x-users-layout>
