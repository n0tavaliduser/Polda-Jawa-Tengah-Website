@extends('layouts.frontend')

@section('title')
Polda Jawa Tengah | Home
@endsection
@section('content')
<main>
    <div class="h-20 w-full bg-gray-800"></div>

    <section>
        <div class="grid grid-cols-3 xl:grid-cols-2 gap-2">
            <div class="m-10 col-span-2 xl:col-span-1 mb-10">
                <p class="text-4xl">
                    Registrasi
                </p>
                <p class="mt-2 mb-3">
                    Lengkapi Formulir dibawah ini
                </p>
                <form action="{{ route('skckmanager.store') }}" method="POST">
                    @csrf
                    {{-- Keperluan dan Kewenangan --}}
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <select name="keperluan" id="keperluan" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
                                <option selected>- Keperluan -</option>
                                <option value="POLRES - PERSYARATAN TES PENGAWAS SEKOLAH">POLRES - PERSYARATAN TES PENGAWAS SEKOLAH</option>
                                <option value="POLRES - PERSYARATAN PENGAWAS SEKOLAH">POLRES - PERSYARATAN PENGAWAS SEKOLAH</option>
                                <option value="POLSEK - PPGDJ">POLSEK - PPGDJ</option>
                                <option value="POLSEK - ADOPSI ANAK">POLSEK - ADOPSI ANAK</option>
                                <option value="POLSEK - MELAMAR PEKERJAAN">POLSEK - MELAMAR PEKERJAAN</option>
                            </select>
                            {{-- <label for="keperluan" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Keperluan</label> --}}
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="tingkatkewenangan" id="tingkatkewenangan" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="Tingkat Kewenangan" placeholder="" required/>
                            <label for="tingkatkewenangan" class="peer-focus:font-medium absolute text-sm dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tingkat Kewenangan</label>
                        </div>
                    </div>
                    {{-- Jenis Identitas dan Nomor Identitas --}}
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <select name="identitas" id="identitas" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                                <option selected>- Jenis Identitas -</option>
                                <option value="E-KTP">E-KTP</option>
                                <option value="Passport">Passport</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            {{-- <label for="floating_phone" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jenis Identitas</label> --}}
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="nomoridentitas" id="nomoridentitas" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ auth()->user()->email }}" placeholder=" " required/>
                            <label for="nomoridentitas" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Identitas</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="nopassport" id="nopassport" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="nopassport" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Pasport</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="nomorkitas" id="nomorkitas" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="nomorkitas" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Kitas</label>
                        </div>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="fullname" id="fullname" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="fullname" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Lengkap</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="notelp" id="notelp" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="notelp" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor HP</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="pekerjaan" id="pekerjaan" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="pekerjaan" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pekerjaan</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="tanggallahir" id="tanggallahir" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="tanggallahir" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Lahir</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="tempatlahir" id="tempatlahir" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="tempatlahir" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tempat Lahir</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <select type="text" name="jeniskelamin" id="jeniskelamin" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                                <option selected>- Jenis Kelamin -</option>
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <label for="jeniskelamin" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jenis Kelamin</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <select type="text" name="statusperkawinan" id="statusperkawinan" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                                <option selected>- Status Perkawinan -</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                            </select>
                            <label for="statusperkawinan" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Status Perkawinan</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <select type="text" name="agama" id="agama" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                                <option selected>- Agama -</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                            <label for="agama" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Agama</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <select type="text" name="warganegara" id="warganegara" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                                <option selected>- Warga Negara -</option>
                                <option value="WNA">WNA</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                            <label for="warganegara" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Warga Negara</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 mb-6 w-full">
                            <input type="text" name="beratbadan" id="beratbadan" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="beratbadan" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Berat Badan</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <select type="text" name="bentukwajah" id="bentukwajah" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                                <option selected>- Bentuk Muka -</option>
                                <option value="Oval">Wajah Oval</option>
                                <option value="Bulat">Wajah Bulat</option>
                                <option value="Persegi">Wajah Persegi</option>
                            </select>
                            <label for="bentukwajah" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bentuk Muka</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <select type="text" name="kulit" id="kulit" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                                <option selected>- Kulit -</option>
                                <option value="Kuning Langsat">Kuning Langsat</option>
                                <option value="Kulit Hitam">Kulit Hitam</option>
                                <option value="Sawo Matang">Sawo Matang</option>
                                <option value="Putih Porcelain">Putih Porcelain</option>
                            </select>
                            <label for="kulit" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kulit</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 mb-6 w-full">
                            <input type="text" name="tinggi" id="tinggi" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="tinggi" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tinggi</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <select type="text" name="rambut" id="rambut" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                                <option selected>- Rambut -</option>
                                <option value="Lurus">Rambut Lurus</option>
                                <option value="Bergelombang">Rambut Bergelombang</option>
                                <option value="Keriting">Rambut Keriting</option>
                            </select>
                            <label for="rambut" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Rambut</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="tandaistimewa" id="tandaistimewa" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required/>
                            <label for="tandaistimewa" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanda Istimewa</label>
                        </div>
                    </div>
                    {{-- Alamat KTP --}}
                    <div class="grid md:grid-cols-4 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group col-span-2">
                            <input type="text" name="alamatktp" id="alamatktp" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="alamatktp" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat KTP</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="rt" id="rt" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="rt" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">RT</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="rw" id="rw" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="rw" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">RW</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="provinsi" id="provinsi" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="provinsi" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Provinsi</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="kabupaten" id="kabupaten" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="kabupaten" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kabupaten</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="kecamatan" id="kecamatan" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="kecamatan" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kecamatan</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="desa" id="desa" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="desa" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Desa</label>
                        </div>
                    </div>
                    <div class="relative z-0 mb-6 w-full group col-span-2">
                        <input type="hidden" name="domisili" id="domisili" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="Ya"/>
                        <label for="domisili" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat Sekarang</label>
                    </div>
                    {{-- Alamat Sekarang / Domisili --}}
                    <div class="grid md:grid-cols-4 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group col-span-2">
                            <input type="text" name="alamatsekarang" id="alamatsekarang" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="alamatsekarang" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat Sekarang</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="rtsekarang" id="rtsekarang" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="rtsekarang" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">RT</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="rwsekarang" id="rwsekarang" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="rwsekarang" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">RW</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="provinsisekarang" id="provinsisekarang" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="provinsisekarang" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Provinsi</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="kabupatensekarang" id="kabupatensekarang" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="kabupatensekarang" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kabupaten</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="kecamatansekarang" id="kecamatansekarang" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="kecamatansekarang" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kecamatan</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="desasekarang" id="desasekarang" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="desasekarang" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Desa</label>
                        </div>
                    </div>
                    
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="hidden" name="status" id="status" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="Pengajuan"/>
                        {{-- <label for="status" class="peer-focus:font-medium absolute text-sm  dark: duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Desa</label> --}}
                    </div>
                    <button type="submit" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Submit</button>
                </form>
  
            </div>
            {{-- <div class="h-screen w-full bg-cyan-400"> --}}
            <div class="h-screen w-full">
                {{-- <div class="flex items-center justify-center w-full bg-black p-2"> --}}
                <div class="flex items-center justify-center w-full p-2">
                    {{-- <div class="flex items-center justify-center h-20 w-fit bg-pink-500 m-5"> --}}
                    <div class="flex items-center justify-center h-20 w-fit m-5">
                        <p class="font-bold text-sm lg:text-xl text-center">Informasi Keperluan Pembuatan SKCK dan Tingkat Kewenangan Kesatuan Wilayah</p>
                    </div>
                </div>
                <div class="h-full w-full p-3">
                {{-- <div class="h-full w-full p-3"> --}}
                    <div class="h-fit w-full">
                    {{-- <div class="h-full w-full"> --}}
                        {{-- Heading --}}
                        <p class="font-semibold">Warna Negara Indonesia</p>
                        {{-- Subreq --}}
                        <p class="text-sm">- Fotokopi KTP dengan menunjukan KTP asli.</p>
                        <p class="text-sm">- Fotokopi akte lahir (surat kenal lahir, ijasah, surat nikah, kartu keluarga).</p>
                        <p class="text-sm">- Fotokopi Paspor.</p>
                        <p class="text-sm">- Dokumen Sidik Jari dan rumus sidik jari.</p>
                        <p class="text-sm">- Fotokopi kartu indentitas lain bagi yang belum memenuhi syarat untuk mendapatkan KTP.</p>
                        <p class="text-sm">- Pas foto berwarna ukuran 4 x 6 sebanyak 6 (enam) lembar dengan latar belakang merah, foto berpakaian sopan dan berkerah, Foto tidak menggunakan aksesoris wajah, tampak muka, dan bagi pemohon yang mengenakan jilbab, pas foto harus tampak muka secara utuh.</p>
                        <br>
                        {{-- Heading --}}
                        <p class="font-semibold">Warna Negara Asing</p>
                        {{-- Subreq --}}
                        <p class="text-sm">- Surat permohonan dari sponsor, perusahaan, atau lembaga yang memperkejakan, menggunakan, atau yang bertanggung jawab pada WNA.</p>
                        <p class="text-sm">- Fotokopi KTP dan Surat Nikah Apabila Sponsor dari Suami/Istri warga Negara Indonesia (WNI).</p>
                        <p class="text-sm">- Fotokopi Paspor.</p>
                        <p class="text-sm">- Fotokopi kartu ijin Tinggal Terbatas (KITAS) atau kartu ijin tinggal tetap (KITAP).</p>
                        <p class="text-sm">- Fotokopi IMTA dari KEMANAKER RI.</p>
                        <p class="text-sm">- Fotokopi Surat Tanda Melapor (STM) dari kepolisian.</p>
                        <p class="text-sm">- Dokumen Sidik Jari dan rumus sidik jari.</p>
                        <p class="text-sm">- Pas foto berwarna ukuran 4 x 6 sebanyak 6 (enam) lembar dengan latar belakang merah, foto berpakaian sopan dan berkerah, Foto tidak menggunakan aksesoris wajah, tampak muka, dan bagi pemohon yang mengenakan jilbab, pas foto harus tampak muka secara utuh.</p>
                    </div>
                    
                    <div class="overflow-x-auto mt-3 relative">
                        <table class="w-full text-sm text-left  dark:">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        Nama
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Keperluan
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Waktu Pengajuan
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black">
                                @foreach ($skck as $dataskck)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium  whitespace-nowrap dark:text-white">
                                        {{ $dataskck->fullname }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $dataskck->keperluan }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $dataskck->created_at }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $dataskck->status }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- pagination --}}
                        <div class="m-2">
                            {!! $skck->appends(request()->query())->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection