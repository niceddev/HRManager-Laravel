@extends('components.canvas')

@section('title','Регистрация аккаунта')

@section('canvas-form')
    <div class="w-full font-medium text-center">
        @include('components.company.auth_tab')
    </div>
    <div class="px-8 p-14 -mt-16">
        <h2 class="text-center text-4xl font-bold">
            Регистрация <span class="text-yellow-300">компании</span>
        </h2>
        <form class="mt-8 space-y-6" action="#" method="POST">
            @csrf
            <div>
                <input id="email" name="email" type="email" autocomplete="email" required
                       class="block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900" placeholder="Введите ваш email"></br>
                <input id="password" name="password" type="password" required
                       class="block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900" placeholder="Придумайте пароль"><br/></br>
                <input id="repeat-password" name="repeat-password" type="password" required
                       class="block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900" placeholder="Повторите пароль и запомните"></br>
            </div>
            <div>
                <button type="submit" class="w-full justify-center py-2 px-4 text-lg font-bold rounded-md bg-yellow-300 hover:bg-yellow-400">
                    Регистрация
                </button>
            </div>
        </form>
    </div>
@endsection
