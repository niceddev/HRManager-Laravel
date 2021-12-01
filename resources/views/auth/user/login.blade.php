@extends('layouts.app')

@section('title','Вход в личный кабинет')

@section('content')
    <div class="min-h-full flex items-center justify-center sm:px-6 lg:px-8">
        <div class="bg-white max-w-lg px-8 p-14 -mt-16 w-full shadow-md">
            @include('auth.user.auth_tab')
            <h2 class="text-center text-4xl font-bold">
                Вход в личный кабинет
            </h2>
            <form class="mt-8 space-y-6" action="{{ route('login.user.store') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    @error('email'){{ $message }}@enderror
                    <input id="email" name="email" type="email"
                           class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-yellow-300 focus:border-yellow-300 focus:z-10 sm:text-sm"
                           placeholder="Введите ваш email">
                    @error('password'){{ $message }}@enderror
                    <input id="password" name="password" type="password"
                           class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-yellow-300 focus:border-yellow-300 focus:z-10 sm:text-sm"
                           placeholder="и ваш пароль">
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-yellow-400 focus:ring-yellow-300 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                            Запомнить меня
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-yellow-300 hover:text-yellow-400">
                            Забыли ваш пароль?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full justify-center py-2 px-4 text-lg font-bold rounded-md bg-yellow-300 hover:bg-yellow-400">
                        Вход
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
