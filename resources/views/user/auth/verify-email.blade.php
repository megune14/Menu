@extends('user/html.MOBILEbase')

@section('title','メールのなんか(アドレスあるか調査？)')

@section('contents')











<div class="verify-email">
<x-guest-layout>
    <x-auth-card>


        <div class="mb-4 text-sm text-gray-600">
            {{ __('ご登録ありがとうございます!
                お送りしたリンクをクリックし、メールアドレスの確認をしてください。もし、メールが届かなかった場合は、再度メールをお送りします。') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('登録時に入力されたメールアドレスに、新しい認証リンクが送信されました。') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('認証メールの再送信') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('user.logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('ログアウト') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
</div>


@endsection
