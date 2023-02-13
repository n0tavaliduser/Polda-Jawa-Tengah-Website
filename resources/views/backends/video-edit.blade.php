@extends('layouts.backend')

@section('title', 'Gallery Photo Polda')

@section('content')
    <section>
        <div class="flex justify-center items-center min-h-[100vh] min-w-[100vh] bg-pink-500">
            <div class="card card-compact w-96 bg-base-100 shadow-xl p-2">
                <video src="{{ asset('/videos/' . $data->video) }}" class="rounded-2xl mb-2" controls></video>
                <div class="card-body">
                    <form method="post" action="{{ route('galleryphoto.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="title" id="title" value="{{ $data->title }}" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                            <label for="title" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white-600 peer-focus:dark:text-white-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="title" id="title" value="{{ $data->description }}" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                            <label for="title" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white-600 peer-focus:dark:text-white-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                        </div>
                        <div class="card-actions justify-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection