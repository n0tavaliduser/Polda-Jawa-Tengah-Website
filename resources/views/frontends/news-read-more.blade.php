@extends('layouts.frontend')

@section('title')
Polda Jawa Tengah | Official
@endsection
@section('content')
    {{-- Header Overlay --}}
    <div class="min-w-screen h-20 bg-black">
    
    </div>
    
    {{-- News --}}
    <div class="grid grid-cols-3 p-5">
        <div class="col-span-2 h-full p-2 bg-gray-100 text-black">
            <p class="text-3xl font-bold text-justify my-2">{{ $news->title }}</p>
            <p>Author : {{ $news->author }}</p>
            <p class="mb-2">Post Date : {{ $news->created_at }}</p>
            <div class="grid grid-cols-2 text-black">
                <img src="{{ asset('images/' . $news->image) }}" alt="">
                <div class="p-2 text-justify">
                    @php
                        echo $news->description;
                    @endphp
                </div>
            </div>
        </div>
        <div>
            <form method="get">
                <input type="text" name="titleSearch" placeholder="Type here" class="input w-full max-w-xs mx-5" />
            </form>
            <div class="grid grid-rows-3 gap-2 p-5">
                @foreach ($othernews as $index => $newsside)
                <div class="card w-full bg-base-100 shadow-xl image-full">
                    <figure><img src="{{ asset('images/' . $newsside['image']) }}" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ $newsside['title'] }}</h2>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary"><a href="{{ route('news-read-more', $newsside['slug']) }}">read</a></button>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- pagination --}}
                <div class="m-2">
                    {!! $othernews->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection