@extends('layouts.backend')

@section('title', 'Gallery news Polda')
    
@section('content')
    <section>
        <main>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <div class="navbar bg-gray-200">
                    <button class="btn glass text-black"><a href="{{ route('newsmanager.create') }}">Tambah Data</a></button>

                    
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
                                <th>Title</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $key => $gallery)
                            <tr>
                                <td><img class="max-h-20" src="{{ asset('images/' . $gallery->image) }}" alt=""></td>
                                <th>{{ $gallery->title }}</th>
                                <td class="flex gap-2 justify-center">
                                    <button class="btn btn-info"><a href="{{ route('newsmanager.edit', $gallery->id) }}">Edit</a></button>
                                    <button class="btn btn-error"><a href="#" data-modal-toggle="confirm-delete{{ $gallery->id }}">Delete</a></button>
                                </td>
                                <div id="confirm-delete{{ $gallery->id }}" class="absolute h-screen w-fit z-50 hidden top-0 min-h-[100%] min-w-[100%]">
                                    <div class="alert shadow-lg w-fit">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            <span>Delete image?</span>
                                        </div>
                                        <div class="flex-none">
                                            <button class="btn btn-sm btn-ghost" data-modal-toggle="confirm-delete{{ $gallery->id }}">Cancel</button>
                                            <form method="post" action="{{ route('newsmanager.destroy', $gallery->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-primary">Confirm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- pagination --}}
            <div class="m-2">
                {!! $news->links() !!}
            </div>
        </main>
    </section>
@endsection