@extends('layouts.frontend')

@section('title')
Polda Jawa Tengah | Official
@endsection
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
                                <h1 class="text-white font-semibold text-4xl uppercase mt-12">
                                    Polda Jawa Tengah | Gallery News
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
                            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative w-96">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input type="search" id="titlesearch" name="titlesearch" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-transparent focus:border-0" placeholder="Search">
                                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gray-700 hover:bg-gray-800 focus:ring-0 focus:outline-none focus:ring-transparent font-medium rounded-lg text-sm px-4 py-2">Search</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            {{-- grid card --}}
            <div class="h-full bg-gray-300 -mt-2 p-5">
                {{-- Column --}}
                <div class="grid grid-cols-5 gap-4 w-full h-fit">
                    @foreach ($news as $index => $data)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('images/' . $data->image) }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->title }}</h5>
                            </a>
                            <a href="{{ route('news-read-more', $data->slug) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- pagination --}}
            <div class="p-2 px-16 bg-gray-300">
                {{-- {!! $news->links() !!} --}}
            </div>
        </main>
    </section>
@endsection