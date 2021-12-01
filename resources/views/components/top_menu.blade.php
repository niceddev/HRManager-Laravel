    <div class="container m-auto px-36">
        <div class="flex justify-between">
            <div class="pt-14">
                <a href="/">
                    <img class="h-64" src="{{ asset('img/logo.png') }}" alt="hrmanagerlogo">
                </a>
            </div>
{{--        TODO: if session set, show Profile(Logout) button    --}}
            <div class="pt-14">
                <a href="{{ route('login.user.create') }}" class="float-right text-2xl px-10 py-3 rounded-2xl font-bold bg-yellow-300 ml-6">
                    Вход
                </a>
                <a href="{{ route('login.company.create') }}" class="float-right text-2xl text-yellow-300 px-8 py-2 rounded-2xl border-4 border-yellow-300 font-medium">
                    Работодателям
                </a>
            </div>
        </div>
    </div>
