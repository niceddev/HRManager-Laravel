<div class="relative inline-block text-left">
    <div id="menu-button" type="button" class="relative font-bold float-right text-2xl px-10 py-3 rounded-xl bg-yellow-300 ml-6">
        <span>Профиль</span>
        <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <ul class="font-medium text-base text-right py-4 px-2 pr-6" role="none">
                <li class="my-2"><a href="{{ route('user.resume.index') }}" role="menuitem" tabindex="-1" id="menu-item-0">Мои резюме</a></li>
                <li class="my-2"><a href="{{ route('home') }}" role="menuitem" tabindex="-1" id="menu-item-1">Служба поддержки</a></li>
                <li class="my-2 mt-2 ">
                    <form method="GET" action="{{ route('logout') }}" role="none">
                        <button class="font-bold" type="submit" role="menuitem" tabindex="-1" id="menu-item-2">
                            Выйти
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
