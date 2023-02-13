@extends('layouts.frontend')

@section('title')
Polda Jawa Tengah | Home
@endsection
@section('content')
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-[750px] md:min-h-[70vh]">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("image/heroimage.jpg");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="flex flex-wrap justify-center pr-12">
                            <h1 class="text-white font-semibold text-5xl uppercase">
                                {{ $home->herotext }}
                            </h1>
                            <p class="mt-4 text-lg text-gray-300 uppercase">
                                {{ $home->moto }}
                            </p>
                            @if (Session::has('success'))
                            <div id="toast-success" class="flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                                <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Pemberitahuan: Pengajuan SKCK</span>
                                </div>
                                <div class="ml-3 text-sm font-normal">{!! \Session::get('success') !!}</div>
                                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="pb-20 bg-gray-300 -mt-24">
            <div class="container mx-auto px-4">

                <!-- Card Mulai Disini -->
                <div class="flex flex-wrap text-black">

                    <!-- Card Left Borobudur -->
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg hover:border-2 border-red-500">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white text-center inline-flex items-center justify-center w-full h-12 rounded-md">
                                    <img class="rounded-md" src="{{ asset('images/' . $home->leftcardimage) }}">
                                </div>
                                <h6 class="text-xl font-semibold pt-5">{{ $home->leftcardtitle }}</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    {{ $home->leftcardtext }}
                                </p>
                            </div>
                        </div>        
                    </div>

                    <!-- Card Center Polda Jawa Tengah -->
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg hover:border-2 border-red-500">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white text-center inline-flex items-center justify-center w-full h-12 rounded-md bg-transparent">
                                    <img class="rounded-md" src="{{ asset('images/' . $home->centercardimage) }}">
                                </div>
                                <h6 class="text-xl font-semibold pt-5">{{ $home->centercardtitle }}</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    {{ $home->centercardtext }}
                                </p>
                            </div>
                        </div>        
                    </div>

                    <!-- Card Right Peta Jawa Tengah -->
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg hover:border-2 border-red-500">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white text-center inline-flex items-center justify-center w-full h-12 rounded-md">
                                    <img class="rounded-md" src="{{ asset('images/' . $home->rightcardimage) }}">
                                </div>
                                <h6 class="text-xl font-semibold pt-5">{{ $home->rightcardtitle }}</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    {{ $home->rightcardtext }}
                                </p>
                            </div>
                        </div>        
                    </div>
                </div>
                <!-- Card Berakhir Disini -->

                <div class="text-black">
                    <!-- Subdomain Start Disini -->
                    <div class="flex justify-center pt-6 w-full lg:pb-20">
                        <img class="items-center" src="{{ asset('image/garis.png') }}">
                        <h1 class="absolute uppercase pt-4 text-2xl font-bold w-full text-center invisible lg:visible">subdomain</h1>
                    </div>

                    <div class="lg:flex flex-wrap items-center justify-center rounded-lg lg:bg-transparent lg:shadow-none hidden mb-6 pb-6" id="subdomain-collapse">
                        <div class="flex flex-wrap justify-center">
                            <div class="flex flex-col justify-center text-center contrast-75 hover:contrast-100 pt-4">
                                <img class="h-full w-auto pl-2 pr-2" src="image/logopolda.svg">
                                <p class="pt-4 uppercase font-semibold">polres demak</p>
                            </div>
                            <div class="flex flex-col justify-center text-center contrast-75 hover:contrast-100 pt-4">
                                <img class="h-full w-auto pl-2 pr-2" src="image/logopolda.svg">
                                <p class="pt-4 uppercase font-semibold">dit polairud</p>
                            </div>
                            <div class="flex flex-col justify-center text-center contrast-75 hover:contrast-100 pt-4">
                                <img class="h-full w-auto pl-2 pr-2" src="image/logopolda.svg">
                                <p class="pt-4 uppercase font-semibold">dit reskrimsus</p>
                            </div>
                            <div class="flex flex-col justify-center text-center contrast-75 hover:contrast-100 pt-4">
                                <img class="h-full w-auto pl-2 pr-2" src="image/logopolda.svg">
                                <p class="pt-4 uppercase font-semibold">polres pati</p>
                            </div>
                            <div class="flex flex-col justify-center text-center contrast-75 hover:contrast-100 pt-4">
                                <img class="h-full w-auto pl-2 pr-2" src="image/logopolda.svg">
                                <p class="pt-4 uppercase font-semibold">polres batang</p>
                            </div>
                            <div class="flex flex-col justify-center text-center contrast-75 hover:contrast-100 pt-4">
                                <img class="h-full w-auto pl-2 pr-2" src="image/logopolda.svg">
                                <p class="pt-4 uppercase font-semibold">polres jepara</p>
                            </div>
                            <div class="flex flex-col justify-center text-center contrast-75 hover:contrast-100 pt-4">
                                <img class="h-full w-auto pl-2 pr-2" src="image/logopolda.svg">
                                <p class="pt-4 uppercase font-semibold">polres semarang</p>
                            </div>
                            <div class="flex flex-col justify-center text-center contrast-75 hover:contrast-100 pt-4">
                                <img class="h-full w-auto pl-2 pr-2" src="image/logopolda.svg">
                                <p class="pt-4 uppercase font-semibold">polres kendal</p>
                            </div>
                        </div>
                    </div>
                    <!-- Subdomain Berakhir Disini -->
                </div>
            </div>
        </section>
    </main>
@endsection