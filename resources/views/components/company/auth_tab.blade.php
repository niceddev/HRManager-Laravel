<ul class="flex mb-8 text-xl">
    @if(Route::currentRouteName() == 'login.company.create')
        <a href="{{ route('login.company.create') }}" class="flex-1 py-4 bg-yellow-300">
            Вход
        </a>
        <a href="{{ route('register.company.create') }}" class="flex-1 py-4">
            Регистрация
        </a>
    @else
        <a href="{{ route('login.company.create') }}" class="flex-1 py-4">
            Вход
        </a>
        <a href="{{ route('register.company.create') }}" class="flex-1 py-4 bg-yellow-300">
            Регистрация
        </a>
    @endif
</ul>
