@extends('admin/html.PCbase')


@section('title','パスワード再設定')


@section('contents')



<div class="forgot-password">
<x-guest-layout>
    <x-auth-card>
        

        <div class="mb-4 text-sm text-gray-600">
        <h1>パスワード再設定</h1>
            {{ __('パスワードを忘れた場合は、こちらにメールアドレスを入力してください。') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('admin.password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="forgot">
                <x-label for="email" :value="__('メールアドレス')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="forgot-button">
                    {{ __('パスワードを変更する') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

</div>

@endsection
