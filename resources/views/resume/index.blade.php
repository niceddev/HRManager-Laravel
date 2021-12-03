@extends('layouts.app')

@section('title') Мой профиль @endsection

@section('content')
    <div class="flex items-center justify-center mb-32">
        <div class="bg-white max-w-5xl w-full shadow-md -mt-12">
            <div class="bg-white shadow overflow-hidden">

                <div class="flex px-4 py-5 sm:px-6">
                    <div id="user-photo" class="flex-shrink rounded sm:w-full md:w-48 md:h-48 py-16 text-center opacity-50 md:border-solid md:border-2 md:border-gray-400">
                        <svg class="mx-auto feather feather-image" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                        <div class="py-4">
                            Ваше фото
                        </div>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-3xl font-medium">
                            {{ $currentUserData->email }}
                        </h2>
                        <p class="mt-1 max-w-2xl text-sm">
                            Мужчина, 22 года, родился 21 января 1999
                        </p>
                    </div>
                </div>

                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Специальность:
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $currentUserData->email }}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Город:
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $currentUserData->city_id }}
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Номер телефона:
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $currentUserData->phone_number }}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                E-mail почта:
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $currentUserData->email }}
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Навыки:
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 flex flex-wrap">
                                @foreach($currentUserSkills as $skillName)
                                    <div class="bg-gray-200 rounded-md py-2 px-2 mx-2 my-1">
                                        {{ $skillName->name }}
                                    </div>
                                @endforeach
                            </dd>
                        </div>

                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Резюме:
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                        <div class="w-0 flex-1 flex items-center">
                                            <!-- Heroicon name: solid/paper-clip -->
                                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="ml-2 flex-1 w-0 truncate">
                  resume_back_end_developer.pdf
                </span>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                Download
                                            </a>
                                        </div>
                                    </li>
                                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                        <div class="w-0 flex-1 flex items-center">
                                            <!-- Heroicon name: solid/paper-clip -->
                                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="ml-2 flex-1 w-0 truncate">
                  coverletter_back_end_developer.pdf
                </span>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                Download
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </dd>
                        </div>
                    </dl>
                </div>

            </div>
        </div>
    </div>
@endsection

