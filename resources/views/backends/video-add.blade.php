@extends('layouts.backend')

@section('title', 'Gallery Video Polda')

@section('content')
    <section>
        <div class="flex justify-center items-center min-h-[100vh] min-w-[100vh] bg-pink-500">
            <div class="card card-compact w-96 bg-base-100 shadow-xl p-4">
                <div class="card-body">
                    <form method="post" action="{{ route('galleryvideo.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="file" name="video" id="video" value="{{ old('video') }}" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                            <label for="video" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white-600 peer-focus:dark:text-white-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">video</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="title" id="title" value="{{ old('title') }}" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                            <label for="title" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white-600 peer-focus:dark:text-white-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Text</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <textarea class="textarea w-full" name="description" placeholder="Description" required></textarea>
                        </div>
                        <div class="card-actions justify-end">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection