@extends('components.canvas')

@section('title','Регистрация аккаунта')

@section('canvas-form')
    <div class="w-full font-medium text-center">
        @include('components.user.auth_tab')
    </div>
    <div class="px-8 p-14 -mt-16">
        <h2 class="text-center text-4xl font-bold">
            Регистрация <span class="text-yellow-300">соискателя</span>
        </h2>
        <form class="mt-8 space-y-6" action="{{ route('register.user.store') }}" method="POST">
            @csrf
            <div>
                @error('email')<p class="text-red-600 text-sm font-medium">*{{ $message }}</p>@enderror
                <input id="email" name="email" type="email" value="{{ old('email') }}"
                       class="block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900"
                       placeholder="Введите ваш email"></br>
                @error('password')<p class="text-red-600 text-sm font-medium">*{{ $message }}</p>@enderror
                <input id="password" name="password" type="password"
                       class="block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900"
                       placeholder="Придумайте пароль"></br>
                <br/>
                @error('password_confirmation')<p class="text-red-600 text-sm font-medium">*{{ $message }}</p>@enderror
                <input id="password_confirmation" name="password_confirmation" type="password"
                       class="block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900"
                       placeholder="Повторите пароль и запомните"></br>
            </div>
            <div>
                <button type="submit" class="w-full justify-center py-2 px-4 text-lg font-bold rounded-md bg-yellow-300 hover:bg-yellow-400">
                    Зарегистрироваться
                </button>
            </div>
        </form>
    </div>
@endsection
