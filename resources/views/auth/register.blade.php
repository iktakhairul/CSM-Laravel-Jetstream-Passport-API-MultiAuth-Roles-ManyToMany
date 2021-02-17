<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" x-data="{role_id: 3}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" x-model="role_id" required class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option selected>Select</option>
                    <option value="2">Employee</option>
                    <option value="3">User</option>
                </select>
            </div>

            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="employee_designation" value="{{ __('Designation') }}" />
                <x-jet-input id="employee_designation" class="block mt-1 w-full" type="text" :value="old('employee_designation')" name="employee_designation" />
            </div>

            <div class="mt-4">
                <x-jet-label for="car_id" value="{{ __('Car Model (Optional)') }}" />
                <select name="car_id" x-model="car_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option selected>Select Your Car Model</option>
                    <option value="1">Toyota Corolla</option>
                    <option value="2">Toyota Avalon</option>
                    <option value="3">Toyota Camry</option>
                    <option value="4">Toyota Prius</option>
                    <option value="5">Toyota 86</option>
                    <option value="6">Toyota RAV4</option>
                    <option value="7">Mercedes-Benz A-Class</option>
                    <option value="8">Mercedes-Benz A-Class-sedan</option>
                    <option value="9">Mercedes-Benz CLS-Class</option>
                    <option value="10">Mercedes-Benz AMG-GT</option>
                </select>
            </div>

            <div class="mt-4" x-show="role_id == 3">
                <x-jet-label for="user_address" value="{{ __('Address') }}" />
                <x-jet-input id="user_address" class="block mt-1 w-full" type="text" :value="old('user_address')" name="user_address" />
            </div>

            <div class="mt-4" x-show="role_id == 3">
                <x-jet-label for="user_phone_number" value="{{ __('Phone Number') }}" />
                <x-jet-input id="user_phone_number" class="block mt-1 w-full" type="text" :value="old('user_phone_number')" name="user_phone_number" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
