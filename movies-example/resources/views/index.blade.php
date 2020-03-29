@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-6">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/asamblea.jpg" alt="asamblea" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Asamblea</a>
                        <div class="flex items-center text-gray-400">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400">Action, thriller</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/asamblea.jpg" alt="asamblea" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Asamblea</a>
                        <div class="flex items-center text-gray-400">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400">Action, thriller</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/asamblea.jpg" alt="asamblea" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Asamblea</a>
                        <div class="flex items-center text-gray-400">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400">Action, thriller</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/asamblea.jpg" alt="asamblea" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Asamblea</a>
                        <div class="flex items-center text-gray-400">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400">Action, thriller</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection