<ul class="flex mb-8 text-xl">
    @if(Route::currentRouteName() == 'login.user.create')
        <a href="{{ route('login.user.create') }}" class="flex-1 py-4 bg-yellow-300">
            Вход
        </a>
        <a href="{{ route('register.user.create') }}" class="flex-1 py-4">
            Регистрация
        </a>
    @else
        <a href="{{ route('login.user.create') }}" class="flex-1 py-4">
            Вход
        </a>
        <a href="{{ route('register.user.create') }}" class="flex-1 py-4 bg-yellow-300">
            Регистрация
        </a>
    @endif
</ul>
