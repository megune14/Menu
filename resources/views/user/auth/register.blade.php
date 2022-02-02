@extends('user/html.MOBILEbase')

@section('title','情報登録画面(スマホ)')

@section('contents')

<x-guest-layout>
    <x-auth-card>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('user.register') }}">
            @csrf

            <div class="container">
                <h1>会員登録</h1>

                <!-- Name -->
                <div class="form-group">
                    <x-label for="firstname" :value="__('苗字')" />

                    <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
                </div>    

                <div class="form-group">
                    <x-label for="lastname" :value="__('名前')" />

                    <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />
                </div>

                <div class="mr-4">
                    <x-label for="birthday " :value="__('誕生日')" />

                    <x-input id="birthday " class="block mt-1 w-full" type="date" name="birthday " :value="old('birthday ')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mr-4">
                    <x-label for="email" :value="__('メールアドレス')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="mr-4">
                    <x-label for="password" :value="__('パスワード')" />

                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mr-4">
                    <x-label for="password_confirmation" :value="__('確認用パスワード')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mr-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('user.login') }}">
                        {{ __('登録済みの方はこちら') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('登録') }}
                    </x-button>
                </div>
            </div>
            
            
            

        </form>
    </x-auth-card>
</x-guest-layout>


@endsection
