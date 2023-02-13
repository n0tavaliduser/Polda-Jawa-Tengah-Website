@extends('layouts.backend')

@section('title', 'User Manager Polda')
    
@section('content')
    <section>
        <main>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <div class="navbar bg-gray-200">
                    <button class="btn glass text-black"><a href="#add-data">Tambah Data</a></button>

                    <div class="modal" id="add-data">
                        <div class="modal-box">
                            <h3 class="font-bold text-lg mb-2">Tambah User Baru</h3>
                            <form method="post" action="{{ route('webuser.store') }}">
                                @csrf
                                <input type="Nama" name="name" placeholder="Nama" class="input input-ghost w-full max-w-xs my-1" />
                                <select name="role" class="select w-full max-w-xs">
                                    <option disabled selected>Select Role</option>
                                    <option value="multimediamanager">Multimedia</option>
                                    <option value="skckmanager">SKCK Manager</option>
                                    <option value="sdm">SDM</option>
                                </select>
                                <div class="modal-action">
                                    <button type="submit" class="btn btn-primary">Tambah User</button> 
                                    <a href="#" class="btn">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>

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
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Waktu Terdaftar</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                            <tr>
                                <th>{{ $user->name }}</th>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td class="flex gap-2 justify-center">
                                    <a href="#modal-{{ $user->id }}" class="btn" onclick="isBanned{{ $user->id }}('{{ $user->role }}')">Update</a>
                                    <button class="btn btn-error"><a href="#" data-modal-toggle="confirm-delete">Delete</a></button>
                                    <div id="confirm-delete" class="absolute h-screen w-full left-0 z-50 hidden top-0">
                                        <div class="alert shadow-lg w-fit">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                <span>Delete image?</span>
                                            </div>
                                            <div class="flex-none">
                                                <button class="btn btn-sm btn-ghost" data-modal-toggle="confirm-delete">Cancel</button>
                                                <form method="post" action="{{ route('galleryphoto.destroy', $user->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-primary">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal" id="modal-{{ $user->id }}">
                                        <div class="modal-box">
                                            <div class="flex justify-between items-center py-2 -translate-y-4">
                                                <h3 class="-mb-2 text-2xl font-bold">User Detail</h3>
                                                <div class="w-full flex justify-end"><a href="#"><i class="fa-solid fa-x btn"></i></a></div>
                                            </div>
                                            <img class="pb-5" src="{{ asset('images/' . $user->gambar) }}" alt="">
                                            <form method="post" action="{{ route('webuser.update', $user->id) }}">
                                                @csrf
                                                @method('put')
                                                <div class="relative z-0 mb-6 w-full group">
                                                    <input type="text" name="name" id="name" value="{{ $user->name }}" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                                                    <label for="name" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                                                </div>
                                                <select name="role" class="select w-full max-w-xs">
                                                    <option disabled selected>Select Role</option>
                                                    <option value="multimediamanager" {{ $user->role == 'multimediamanager' ? 'selected' : '' }}>Multimedia</option>
                                                    <option value="skckmanager" {{ $user->role == 'skckmanager' ? 'selected' : '' }}>SKCK Manager</option>
                                                    <option value="sdm" {{ $user->role == 'sdm' ? 'selected' : '' }}>SDM</option>
                                                    <option value="masyarakat" {{ $user->role == 'masyarakat' ? 'selected' : '' }}>Masyarakat</option>
                                                </select>
                                                <div class="relative z-0 mb-6 w-full group">
                                                    @if ($user->role == 'banned')
                                                        <label for="suspend" class="label">Unsuspend user?</label>
                                                        @else
                                                        <label for="suspend" class="label">Suspend user?</label>
                                                    @endif
                                                    <input id="isBanned{{ $user->id }}" name="suspend" type="checkbox" class="checkbox"/>
                                                </div>
                                                <div class="relative z-0 mb-6 w-full group">
                                                    @if ($user->role == 'masyarakat')
                                                        <label for="email" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIK</label>
                                                        @else
                                                        <label for="email" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                                                    @endif
                                                    <input type="text" name="email" id="email" value="{{ $user->email }}" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                                                </div>
                                                <div class="flex w-full justify-end">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <script>
                                function isBanned{{ $user->id }}(data) {
                                    console.log(data);
                                    if (data == 'banned') {
                                        document.getElementById('isBanned{{ $user->id }}').checked = true;
                                    }
                                }
                            </script>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- pagination --}}
            <div class="m-2">
                {!! $users->links() !!}
            </div>
        </main>
    </section>
@endsection