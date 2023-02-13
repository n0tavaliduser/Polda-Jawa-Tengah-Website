@extends('layouts.backend')

@section('title')
Polda Jawa Tengah | Admin Landing Page
@endsection

@section('content')
    <section>
        <main>
            <div class="flex justify-center">
                <div class="h-screen w-full text-center pt-20 bg-gray-50">
                    <h1 class="text-4xl uppercase">Pengajuan skck</h1>
                    
                    <div class="overflow-x-auto flex justify-start pt-10">
                        <table class="w-fit text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        1. Nama Lengkap
                                    </th>
                                    <th colspan="2" class="py-4 px-6 w-fit font-medium text-gray-900">
                                        : <span class="font-normal"> {{ $skck->fullname }}</span>
                                    </th>
                                    <td class="py-4 px-6">
                                    </td>
                                    <td class="py-4 px-6">
                                    </td>
                                    <td rowspan="4" colspan="2" class="py-4 px-6">
                                        Photo
                                    </td>
                                </tr>
                                <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        2. a. Jenis Identitas
                                    </th>
                                    <th colspan="2" class="py-4 px-6 font-medium text-gray-900">
                                        : <span class="font-normal"> {{ $skck->identitas }}</span>
                                    </th>
                                </tr>
                                <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-transparent">2. </span>b. Nomor Identitas
                                    </th>
                                    <th colspan="2" class="py-4 px-6 font-medium text-gray-900">
                                        : <span class="font-normal"> {{ $skck->nomoridentitas }}</span>
                                    </th>
                                </tr>
                                <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        3. Agama
                                    </th>
                                    <th colspan="2" class="py-4 px-6 font-medium text-gray-900">
                                        : <span class="font-normal"> {{ $skck->agama }}</span>
                                    </th>
                                </tr>
                                <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        4. a. Tanggal Lahir
                                    </th>
                                    <th colspan="3" class="py-4 px-6 font-medium text-gray-900">
                                        : <span class="font-normal"> {{ date('d-m-Y', strtotime($skck->tanggallahir)) }}</span>
                                    </th>
                                </tr>
                                <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-transparent">4. </span>b. Tempat Lahir
                                    </th>
                                    <th colspan="3" class="py-4 px-6 font-medium text-gray-900">
                                        : <span class="font-normal"> {{ $skck->tempatlahir }}</span>
                                    </th>
                                </tr>
                                <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        5. Alamat
                                    </th>
                                    <th class="py-4 px-6 font-medium text-gray-900">
                                        : <span class="font-normal"> {{ $skck->alamatktp }} RT {{ $skck->rt }} RW {{ $skck->rw }}, {{ $skck->desa }}, {{ $skck->kecamatan }}, {{ $skck->kabupaten }}, {{ $skck->provinsi }}</span>
                                    </th>
                                    <th class="py-4 px-6 font-medium text-gray-900">
                                        6. Domisili
                                    </th>
                                    <td class="py-4 px-6">
                                        : <span class="font-normal"> {{ $skck->alamatsekarang }} RT {{ $skck->rtsekarang }} RW {{ $skck->rwsekarang }}, {{ $skck->desasekarang }}, {{ $skck->kecamatansekarang }}, {{ $skck->kabupatensekarang }}, {{ $skck->provinsisekarang }}</span>
                                    </td>
                                </tr>
                                <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th colspan="4" scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        7. Ciri
                                    </th>
                                </tr>
                                <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="py-4 px-6">
                                        <p class="font-bold text-gray-900">a. Rambut</p>
                                        <span class="text-black"> {{ $skck->rambut }}</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="font-bold text-gray-900">c. kulit</p>
                                        <span class="text-black"> {{ $skck->kulit }}</span>
                                    </td>
                                    <td colspan="2" class="py-4 px-6">
                                        <p class="font-bold text-gray-900">d. Tanda Istimewa</p>
                                        <span class="text-black"> {{ $skck->tandaistimewa }}</span>
                                    </td>
                                </tr>
                                <tr class="bg-transparent border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="py-4 px-6">
                                        <p class="font-bold text-gray-900">b. Muka</p>
                                        <span class="text-black"> {{ $skck->bentukwajah }}</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="font-bold text-gray-900">d. Tinggi Badan</p>
                                        <span class="text-black"> {{ $skck->tinggi }} cm</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-start p-3 text-black">
                        Pengajuan ini diajukan untuk keperluan : <span class="font-bold">{{ $skck->keperluan }}</span>
                        | Status Terkahir : 
                        <span class="
                        @php
                            if ($skck->status == 'Ditolak') {
                                echo 'text-red-500';
                            } else if ($skck->status == 'Data Tidak Lengkap' || $skck->status == 'Data Tidak Tepat') {
                                echo 'text-orange-400';
                            } else if ($skck->status == 'Menunggu Pembayaran') {
                                echo 'text-green-400';
                            } else {
                                echo 'text-black';
                            }
                        @endphp
                        ">
                            {{ $skck->status }}
                        </span>
                    </p>
                    <form method="POST" action="{{ route('skckmanager.update', $skck->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex p-3">
                            <select name="status" id="countries" class="bg-gray-50 w-96 border border-gray-300 text-gray-900 mr-2 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Status Baru</option>
                                <option value="Ditolak">Tolak</option>
                                <option value="Data Tidak Lengkap">Data Tidak Lengkap</option>
                                <option value="Data Tidak Tepat">Data Tidak Tepat</option>
                                <option value="Menunggu Pembayaran">Lengkapi Pembayaran</option>
                            </select>
                            
                            <button type="submit" class="text-white mr-2 bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                            <button class="text-white bg-red-800 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="{{ route('skckmanager.index') }}">Back</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </section>
@endsection