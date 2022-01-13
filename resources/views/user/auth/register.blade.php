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
                    <x-label for="name" :value="__('名前')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
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
                        {{ __('登録済ですか?') }}
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
