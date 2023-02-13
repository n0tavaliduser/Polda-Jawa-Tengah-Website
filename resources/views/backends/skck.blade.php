@extends('layouts.backend')

@section('title', 'Gallery Photo Polda')
    
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
                                <input type="text" name="nikSearch" placeholder="Search" class="input input-bordered" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jenis / Nomor Identitas</th>
                                <th>Keperluan</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skck as $key => $data)
                            <tr>
                                <td>{{ $data->fullname }}</td>
                                <th>{{ $data->identitas }} <span> {{ $data->nomoridentitas }}</span></th>
                                <td>{{ $data->keperluan }}</td>
                                <td class="flex gap-2 justify-center">
                                    <button class="btn btn-info"><a href="{{ route('skckmanager.edit', $data->id) }}">View</a></button>
                                    <button class="btn btn-error"><a href="#" data-modal-toggle="confirm-delete">Delete</a></button>
                                    <div id="confirm-delete" class="absolute h-screen w-full left-0 z-50 hidden top-0">
                                        <div class="alert shadow-lg w-fit">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                <span>Delete SKCK request?</span>
                                            </div>
                                            <div class="flex-none">
                                                <button class="btn btn-sm btn-ghost" data-modal-toggle="confirm-delete">Cancel</button>
                                                <form method="post" action="{{ route('skckmanager.destroy', $data->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-primary">Confirm</button>
                                                </form>
                                            </div>
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
                {!! $skck->links() !!}
            </div>
        </main>
    </section>
@endsection