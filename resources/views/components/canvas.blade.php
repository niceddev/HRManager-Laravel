@extends('layouts.app')

@section('content')
    <div class="min-h-full flex items-center justify-center">
        <div class="bg-white max-w-lg w-full shadow-md -mt-12">
            @yield('canvas-form')
        </div>
    </div>
@endsection
