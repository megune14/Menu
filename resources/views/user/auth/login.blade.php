@extends('user/html.MOBILEbase')

@section('title','ログイン')

@section('contents')

<x-guest-layout>
    <x-auth-card>
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('user.login') }}">
            @csrf
        

            <div class="loginform">
                <h1>ログイン</h1>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="メールアドレス"/>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('')" />

                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" placeholder="パスワード"/>
                </div>

                <!-- Remember Me -->
                <div class="block mt-2">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('ログイン状態を保持する') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-2">
                    @if (Route::has('user.password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('user.password.request') }}">
                            {{ __('パスワードを忘れた方はこちら') }}
                        </a>
                    @endif

                    <a class="RTA" href="/register">新規登録</a>

                    <x-button class="ml-4">
                        {{ __('ログイン') }}
                    </x-button>
                </div>
            </div>    

        </form>
    </x-auth-card>
</x-guest-layout>

@endsection


