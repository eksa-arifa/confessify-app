@extends('layouts.base')

@section('body')
<div class="w-screen h-screen" x-data="{active: false}">
    <nav class="w-full px-16 py-6 shadow-md bg-white fixed top-0 left-0">
        <div class="flex justify-between items-center">
            <a href="" class="flex items-center gap-3">
                <img src="/icon.ico" alt="icon" width="50">
                <span class="text-2xl font-bold">Confessify</span>
            </a>
            <div class="relative">
                <div class="flex items-center gap-2 cursor-pointer" @click="()=>active = !active">
                    <span>{{auth()->user()->name}}</span>
                    <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
                </div>
                <div class="absolute top-[150%] right-0 bg-white py-4 w-[150px] border" x-show="active">
                    <a href="" class="w-full block py-1 hover:bg-black hover:text-white px-4">Profile</a>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="w-full text-left block py-1 hover:bg-black hover:text-white px-4" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</div>
@endsection