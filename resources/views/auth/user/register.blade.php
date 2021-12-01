@extends('layouts.app')

@section('title','Регистрация аккаунта')

@section('content')
    <div class="min-h-full flex items-center justify-center sm:px-6 lg:px-8">
        <div class="bg-white max-w-lg px-14 p-14 -mt-16 w-full shadow-md">
            @include('auth.user.auth_tab')
            <h2 class="text-center text-4xl font-bold">
                Регистрация
            </h2>
            <form class="mt-8 space-y-6" action="#" method="POST">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-yellow-300 focus:border-yellow-300 focus:z-10 sm:text-sm" placeholder="Введите ваш email">
                    <input id="password" name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-yellow-300 focus:border-yellow-300 focus:z-10 sm:text-sm" placeholder="Придумайте пароль"><br/>
                    <input id="repeat-password" name="repeat-password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-yellow-300 focus:border-yellow-300 focus:z-10 sm:text-sm" placeholder="Повторите пароль и запомните">
                </div>
                <div>
                    <button type="submit" class="w-full justify-center py-2 px-4 text-lg font-bold rounded-md bg-yellow-300 hover:bg-yellow-400">
                        Регистрация
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
