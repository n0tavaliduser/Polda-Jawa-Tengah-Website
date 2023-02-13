@extends('layouts.backend')

@section('title', 'Gallery News Polda')

@section('content')
    <section>
        <div class="flex justify-center items-center min-h-[100vh] min-w-[100vh] bg-pink-500">
            <div class="card card-compact min-h-screen min-w-full bg-base-100 shadow-xl">
                <div class="card-body">
                    <form method="post" action="{{ route('newsmanager.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="grid grid-cols-3 p-2">
                            <div class="flex justify-center p-2">
                                <img class="max-h-56" src="{{ asset('images/' . $data->image) }}" alt="">
                            </div>
                            <div class="col-span-2">
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="file" name="gambar" id="gambar" value="{{ $data->gambar }}" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark: dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" "/>
                                    <label for="gambar" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:-600 peer-focus:dark:-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Photo</label>
                                </div>
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="text" name="title" id="title" value="{{ $data->title }}" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark: dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                                    <label for="title" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:-600 peer-focus:dark:-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Text</label>
                                </div>    
                            </div>
                        </div>
                        <div>
                            <textarea name="description" id="description" cols="30" rows="10" class="w-full">
                                {{ $data->description }}
                            </textarea>                                
                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                            <script>
                                CKEDITOR.replace('description');
                            </script>
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