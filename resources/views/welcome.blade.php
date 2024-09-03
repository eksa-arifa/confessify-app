@extends('layouts.base')

@section('body')
    <x-navbar/>

    <div class="w-screen h-screen flex items-center justify-center flex-col gap-1">
        <img src="{{url(asset('icon.ico'))}}" alt="icon" width="100">
        <h1 class="text-5xl bg-gradient-to-r from-indigo-600 to-blue-400 text-transparent bg-clip-text h-fit py-2">Wellcome to Confessify</h1>
        <h2 class="text-3xl bg-gradient-to-r from-indigo-600 to-blue-400 text-transparent bg-clip-text h-fit py-2">Where Secrets Find Their Voice</h2>
        <div class="flex">
            @guest
            <a href="/login" class="mt-2 bg-indigo-600 py-2 px-8 text-white hover:bg-indigo-800 cursor-pointer">Get started</a>
            @endguest
            @auth
            <a href="/dashboard" class="mt-2 bg-indigo-600 py-2 px-8 text-white hover:bg-indigo-800 cursor-pointer">Go to dashboard</a>
            @endauth
        </div>
    </div>
@endsection
