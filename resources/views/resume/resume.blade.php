@extends('layouts.app')

@section('title', 'Мои резюме')

@section('content')
    <div class="container m-auto w-1/2">
        <form action="" method="post">
            @csrf
            <input type="text">
        </form>
    </div>
@endsection
