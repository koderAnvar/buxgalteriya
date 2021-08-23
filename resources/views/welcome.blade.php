@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
    <a href="/"><img src="img/education.jpg" alt="" ></a>
        <div class="title m-b-md">
          ДОМАШНЯЯ БУХГАЛТЕРИЯ

         <p class="mssg">{{ session('mssg') }}</p>
        <a class="link" href="/bux/create">Добавит</a>
        <a class="link" href="/bux/">Статистика</a>

        </div>
    </div>
</div>
@endsection