@extends('layouts.backend')

@section('title', 'Gallery Photo Polda')
    
@section('content')
    <section>
        <main>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <div class="navbar bg-gray-200">
                    <button class="btn glass text-black"><a href="#add-photo">Tambah Data</a></button>
                    
                    <div class="modal" id="add-photo">
                        <div class="modal-box">
                            <h3 class="font-bold text-lg mb-2">Tambah Official Baru</h3>
                            <form method="post" action="{{ route('officialmanager.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="file" name="image" id="image" value="{{ old('image') }}" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                                    <label for="gambar" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Photo</label>
                                </div>
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                                    <label for="name" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                                </div>
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="text" name="position" id="position" value="{{ old('position') }}" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                                    <label for="position" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Position</label>
                                </div>
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="text" name="unit" id="unit" value="{{ old('unit') }}" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                                    <label for="unit" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Unit</label>
                                </div>
                                <div class="card-actions justify-end">
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="flex-1">

                    </div>
                    <div class="flex-none gap-2">
                        <div class="form-control">
                            <form method="get" action="">
                                <input type="text" name="titleSearch" placeholder="Search" class="input input-bordered" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Unit</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $official)
                            <tr>
                                <td><img class="max-h-20" src="{{ asset('images/' . $official->image) }}" alt=""></td>
                                <th>{{ $official->name }}</th>
                                <td>{{ $official->position }}</td>
                                <td>{{ $official->unit }}</td>
                                <td class="flex gap-2 justify-center">
                                    <a href="#modal-{{ $official->id }}" class="btn">Update</a>
                                    <button class="btn btn-error"><a href="#" data-modal-toggle="confirm-delete-{{ $official->id }}">Delete</a></button>
                                    <div id="confirm-delete-{{ $official->id }}" class="absolute h-screen w-full left-0 z-50 hidden top-0">
                                        <div class="alert shadow-lg w-fit">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                <span>Delete official?</span>
                                            </div>
                                            <div class="flex-none">
                                                <button class="btn btn-sm btn-ghost" data-modal-toggle="confirm-delete-{{ $official->id }}">Cancel</button>
                                                <form method="post" action="{{ route('officialmanager.destroy', $official->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-primary">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal" id="modal-{{ $official->id }}">
                                        <div class="modal-box">
                                            <h3 class="mb-2 text-2xl font-bold">Edit Photo Form</h3>
                                            <img class="pb-5 w-full" src="{{ asset('images/' . $official->image) }}" alt="">
                                            <form method="post" action="{{ route('officialmanager.update', $official->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="relative z-0 mb-6 w-full group">
                                                    <input type="file" name="image" id="image" value="{{ $official->image }}" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" "/>
                                                    <label for="image" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Image</label>
                                                </div>
                                                <div class="relative z-0 mb-6 w-full group">
                                                    <input type="text" name="name" id="name" value="{{ $official->name }}" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                                                    <label for="name" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                                                </div>
                                                <div class="relative z-0 mb-6 w-full group">
                                                    <input type="text" name="position" id="position" value="{{ $official->position }}" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                                                    <label for="position" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Position</label>
                                                </div>
                                                <div class="relative z-0 mb-6 w-full group">
                                                    <input type="text" name="unit" id="unit" value="{{ $official->unit }}" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                                                    <label for="unit" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Unit</label>
                                                </div>
                                                <div class="flex w-full justify-end gap-2">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <a href="#" class="btn btn-error">Cancel</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- pagination --}}
            <div class="m-2">
                {!! $data->links() !!}
            </div>
        </main>
    </section>
@endsection