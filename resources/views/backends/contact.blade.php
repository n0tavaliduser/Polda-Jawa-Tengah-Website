@extends('layouts.backend')

@section('title', 'Gallery contact Polda')
    
@section('content')
    <section>
        <main>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <div class="navbar bg-gray-200">
                    <div class="flex-1">

                    </div>
                    <div class="flex-none gap-2">
                        <div class="form-control">
                            <form method="get" action="">
                                <input type="text" name="nameSearch" placeholder="Search" class="input input-bordered" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>No. Telp</th>
                                <th>Email</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contact as $key => $message)
                            <tr>
                                <th>{{ $message->name }}</th>
                                <th>{{ $message->notelp }}</th>
                                <td>{{ $message->email }}</td>
                                <td class="flex gap-2 justify-center">
                                    <button class="btn btn-info"><a href="#" data-modal-toggle="view-message-{{ $message->id }}">view</a></button>
                                    <button class="btn btn-error"><a href="#" data-modal-toggle="confirm-delete-{{ $message->id }}">Delete</a></button>
                                    <div id="confirm-delete-{{ $message->id }}" class="absolute h-screen w-full left-0 z-50 hidden top-0">
                                        <div class="alert shadow-lg w-fit">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                <span>Delete message from <span class="font-bold">{{ $message->name }}</span>?</span>
                                            </div>
                                            <div class="flex-none">
                                                <button class="btn btn-sm btn-ghost" data-modal-toggle="confirm-delete-{{ $message->id }}">Cancel</button>
                                                <form method="post" action="{{ route('contactmanager.destroy', $message->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-primary">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <div id="view-message-{{ $message->id }}" class="hidden z-50 absolute flex justify-center items-center min-h-[100%] w-full">
                                    <div class="card card-compact bg-base-100 shadow-xl">
                                        <div class="card w-96 glass">
                                            <figure><img src="{{ asset('images/logopolda.svg') }}" class="m-3" alt="car!"/></figure>
                                            <div class="card-body">
                                                <h2 class="card-title">{{ $message->name }}</h2>
                                                <p>{{ $message->message }}</p>
                                                <div class="badge badge-outline"><a href="https://api.whatsapp.com/send?phone={{ $message->notelp }}">{{ $message->notelp }}</a></div> 
                                                <div class="badge badge-outline"><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></div>
                                                <div class="card-actions justify-end">
                                                    <button class="btn btn-primary" data-modal-toggle="view-message-{{ $message->id }}">Okay</button>
                                                </div>
                                            </div>
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
                {!! $contact->links() !!}
            </div>
        </main>
    </section>
@endsection