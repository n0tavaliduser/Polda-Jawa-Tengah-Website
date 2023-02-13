@extends('layouts.frontend')

@section('title', 'Polda Jawa Tengah | Galeri Foto')

@section('content')
    <section>
        <main>
            {{-- navigation background --}}
            <div class="h-20 w-screen bg-gray-800"></div>

            {{-- Official Header Hero --}}
            <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 25vh;">
                <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("image/camera.jpg");'>
                    <span id="blackOverlay" class="w-full h-full absolute opacity-90 bg-black"></span>
                </div>
                <div class="container relative mx-auto">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                            <div class="pr-12">
                                <h1 class=" font-semibold text-4xl uppercase mt-12 text-white">
                                    Polda Jawa Tengah | Gallery Photo
                                </h1>
                                <p class="mt-4 text-lg text-gray-300">
                                    MELAYANI MASYARAKAT DENGAN TULUS DAN IKHLAS
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Official Navigation --}}
            <div class="bg-gray-600">
                <div class="h-4/6 bg-gray-600">
                    <!-- Search input Start Here -->
                    <div class="flex w-full h-20 pl-14 items-center bg-gray-600">
                        <form method="GET" class="-mt-2">   
                            <label for="search" class="mb-2 text-sm font-medium text-white sr-only dark:">Search</label>
                            <div class="relative w-96">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input type="search" id="photosearch" name="photosearch" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-transparent focus:border-0" placeholder="Search">
                                <button type="submit" class=" absolute right-2.5 bottom-2.5 text-white bg-gray-700 hover:bg-gray-800 focus:ring-0 focus:outline-none focus:ring-transparent font-medium rounded-lg text-sm px-4 py-2">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- grid card --}}
            <div class="flex justify-center h-full bg-gray-200 -mt-2 pt-2">
                {{-- Card Official Profil --}}
                <div class="grid grid-cols-3 sm:grid-cold-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8 gap-3  items-stretch w-full h-fit p-5 m-2">
                    @foreach ($photo as $item)
                        <div class="card w-full glass">
                            <figure><img class="max-h-fit" src="{{ asset('images/' . $item->gambar) }}" alt="car!"/></figure>
                            <div class="card-body">
                                <h2 class="card-title text-black">{{ $item->title }}</h2>
                                {{-- <p>How to park your car at your garage?</p> --}}
                                <div class="flex w-full h-full justify-center items-end">
                                    <label for="my-modal-{{ $item->id }}" class="btn">Show Image</label>
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" id="my-modal-{{ $item->id }}" class="modal-toggle" />

                        <label for="my-modal-{{ $item->id }}" class="modal cursor-pointer">
                            <label class="modal-box relative" for="">
                                <h3 class="text-lg font-bold"><img src="{{ asset('images/' . $item->gambar) }}" alt=""></h3>
                                <p class="py-4 ">{{ $item->description }}</p>
                            </label>
                        </label>
                    @endforeach
                </div>
            </div>
            {{-- pagination --}}
            <div class="p-2 px-16 bg-gray-300">
                {!! $photo->links() !!}
            </div>
        </main>
    </section>
@endsection