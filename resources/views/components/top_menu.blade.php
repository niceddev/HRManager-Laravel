    <div class="container m-auto px-36">
        <div class="flex justify-between">
            <div class="pt-14">
                <a href="/">
                    <img class="h-64" src="{{ asset('img/logo.png') }}" alt="hrmanagerlogo">
                </a>
            </div>
            <div class="pt-14 text-2xl font-bold  z-20">
                @if(Auth::check())
                    @include('components.account_dropdown_btn')
                @else
                    @if(!str_contains(Route::currentRouteName(),'company'))
                        <a href="{{ route('login.user.create') }}" class="float-right px-10 py-3 rounded-2xl bg-yellow-300 ml-6">
                            Вход
                        </a>
                        <a href="{{ route('login.company.create') }}" class="float-right text-yellow-300 px-8 py-2 rounded-2xl border-4 border-yellow-300">
                            Работодателям
                        </a>
                    @else
                        <a href="{{ route('login.user.create') }}" class="float-right text-yellow-300 px-8 py-2 rounded-2xl border-4 border-yellow-300 ml-6">
                            Вход
                        </a>
                        <a href="{{ route('login.company.create') }}" class="float-right px-10 py-3 rounded-2xl bg-yellow-300">
                            Работодателям
                        </a>
                    @endif
                @endif
            </div>
        </div>
    </div>
