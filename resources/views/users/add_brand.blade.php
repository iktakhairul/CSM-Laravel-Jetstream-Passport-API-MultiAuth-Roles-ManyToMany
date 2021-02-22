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
        <form method="POST" action="{{ route('users.add_brand') }}" x-data="{role_id: 3}">
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
            @foreach($brands as $brand)
            <div class="form-check">
                <input class="row-auto form-check-input" type="checkbox" value="{{ $brand->id }}" id="brand_id" name="brand_id">
                <div class="card">
                    <div class="card-header row-auto">
                        {{$brand->brand_name}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
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
