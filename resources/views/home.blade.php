@extends('layouts.app')
@section('title', 'HRManager')

@section('content')
    <div class="container m-auto px-28 flex">
        <div class="w-1/2 h-auto z-20">
            <div class="text-2xl mt-20">
                <div class="flex">
                    <button type="button" class="font-medium bg-yellow-300 px-6 py-4">Найти специалиста</button>
                    <p class="px-7 py-4">или</p>
                    <button type="button" class="font-medium text-gray-300 border-gray-300 border-2 px-6 py-4">Найти работу</button>
                </div>
                <div>
                    <p class="text-4.5xl font-bold py-5">Зарегистрируйтесь чтобы</p>
{{--                    <a href="{{ route('register.company.create') }}" class="bg-yellow-300 font-medium py-4 px-10 shadow-md">Получить доступ к базе специалистов</a>--}}
                    <a href="#" class="bg-yellow-300 font-medium py-4 px-10 shadow-md">Получить доступ к базе специалистов</a>
                </div>
{{--                <div>--}}
{{--                    <p class="text-4.5xl font-bold py-5">Работа найдется для каждого!</p>--}}
{{--                    <div class="flex h-16">--}}
{{--                        <input type="text" name="price" id="price" class="w-116 p-5 text-base shadow-md" placeholder="Профессия, должность или компания">--}}
{{--                        <a href="#" class="bg-yellow-300 font-medium py-4 px-10 shadow-md">Поиск</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="w-1/2 absolute right-0 bottom-0 z-10">
            @switch($randPerson)
                @case(1)
                <img class="h-790px" src="img/cooker.png" alt="person">
                @break
                @case(2)
                <img class="h-790px" src="img/dentist.png" alt="person">
                @break
                @case(3)
                <img class="h-790px" src="img/plumber.png" alt="person">
                @break
                @case(4)
                <img class="h-790px" src="img/programmer.png" alt="person">
                @break
            @endswitch
        </div>
    </div>
@endsection
