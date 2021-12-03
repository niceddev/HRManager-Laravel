@extends('components.canvas')

@section('title','Вход в личный кабинет')

@section('canvas-form')
    <div class="w-full font-medium text-center">
        @include('components.company.auth_tab')
    </div>
    <div class="px-8 p-14 -mt-16">
        <h2 class="text-center text-4xl font-bold">
            Вход в личный кабинет <span class="text-yellow-300">компании</span>
        </h2>
        <form class="mt-8 space-y-6" action="{{ route('login.company.store') }}" method="POST">
            @csrf
            <div>
                @error('email'){{ $message }}@enderror
                <input id="email" name="email" type="email" value="{{ old('email') }}"
                       class="block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900"
                       placeholder="Введите ваш email"></br>
                @error('password'){{ $message }}@enderror
                <input id="password" name="password" type="password"
                       class="block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900"
                       placeholder="и ваш пароль"></br>
            </div>
            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4">
                    <label for="remember-me" class="ml-2 text-gray-900">
                        Запомнить меня
                    </label>
                </div>
                <div>
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
@endsection
