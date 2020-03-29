@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col mg:flex-row lg:flex-row">
            <img src="/img/asamblea.jpg" alt="asamblea" class="w-64 md:w-90" style="width: 100rem">
            <div class="md:ml-20">
                <h2 class="text-4xl font-semibold">Asamblea(2020)</h2>
                <div class="mt-2">
                        <div class="flex items-center text-gray-400">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400">Action, thriller</div>
                    </div>
                    <p class="text-gray-100 mt-1">
                        The First Battle of Dernancourt was fought on 28 March 1918 near Dernancourt in 
                        northern France during World War I. Two Australian divisions had been sent south 
                        from Belgium to help stem the tide of the German Spring Offensive towards Amiens 
                        and, with the British 35th Division, they held a line west and north of the Ancre 
                        river and the area between the Ancre and Somme. The German 2nd Army concentrated 
                        its assault between Albert and Dernancourt, attacking off the line of march after 
                        a short artillery preparation.
                    </p>
                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Feature</h4>
                        <div class="flex mt-4">
                            <div>
                                <div>STALYN ALEJANDRO</div>
                                <div class="text-sm text-gray-400">
                                    Screeplay, director, story
                                </div>
                            </div>
                            <div class="ml-8">
                                <div>EDISON DAVID</div>
                                <div class="text-sm text-gray-400">
                                    Screeplay, director, story
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5
                        py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        Play
                        </button>
                    </div>
            </div>
        </div>
    </div>
@endsection