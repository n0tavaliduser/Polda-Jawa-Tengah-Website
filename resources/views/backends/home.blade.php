@extends('layouts.backend')

@section('title', 'Home Config Polda')

@section('contentTitle', 'Home Config Polda')

@section('content')
    <div class="flex">
        <iframe src="{{ route('frontend-home', $home->id) }}" class="hidden lg:block h-screen min-w-[50%]" frameborder="0">

        </iframe>
    
        <div class="m-20">
            <p class="mb-10 uppercase font-bold">Landing Page Editor | Polda Jawa Tengah</p>
            <form method="post" action="{{ route('home.update', $home->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="herotext" id="herotext" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->herotext ?? old('herotext') }}" placeholder=" " required />
                    <label for="herotext" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hero Text</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="moto" id="moto" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->moto ?? old('moto') }}" placeholder=" " required />
                    <label for="moto" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Moto</label>
                </div>

                <div class="relative z-0 mb-6 w-full group">
                    <input type="file" name="heroimage" id="heroimage" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->heroimage ?? old('heroimage') }}" placeholder=" " />
                    <label for="heroimage" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hero Image</label>
                </div>
                <div class="grid md:grid-cols-3 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="file" name="leftcardimage" id="leftcardimage" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->leftcardimage ?? old('leftcardimage') }}" placeholder=" " />
                        <label for="leftcardimage" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Left Card Image</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="file" name="centercardimage" id="centercardimage" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->centercardimage ?? old('centercardimage') }}" placeholder=" " />
                        <label for="centercardimage" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Center Card Image</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="file" name="rightcardimage" id="rightcardimage" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->rightcardimage ?? old('rightcardimage') }}" placeholder=" " />
                        <label for="rightcardimage" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Right Card Image</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="leftcardtitle" id="leftcardtitle" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->leftcardtitle ?? old('leftcardtitle') }}" placeholder=" " required />
                        <label for="leftcardtitle" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Left Card Title</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="centercardtitle" id="centercardtitle" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->centercardtitle ?? old('centercardtitle') }}" placeholder=" " required />
                        <label for="centercardtitle" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Center Card Title</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="rightcardtitle" id="rightcardtitle" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->rightcardtitle ?? old('rightcardtitle') }}" placeholder=" " required />
                        <label for="rightcardtitle" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Right Card Title</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="textarea" name="leftcardtext" id="leftcardtext" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->leftcardtext ?? old('leftcardtext') }}" placeholder=" " required />
                        <label for="leftcardtext" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Left Card Text</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="textarea" name="centercardtext" id="centercardtext" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->centercardtext ?? old('centercardtext') }}" placeholder=" " required />
                        <label for="centercardtext" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Center Card Text</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="textarea" name="rightcardtext" id="rightcardtext" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->rightcardtext ?? old('rightcardtext') }}" placeholder=" " required />
                        <label for="rightcardtext" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Right Card Text</label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="mail" name="mail" id="mail" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->mail ?? old('mail') }}" placeholder=" " required />
                        <label for="mail" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mail</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="address" id="address" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white-600 peer" value="{{ $home->address ?? old('address') }}" placeholder=" " required />
                        <label for="address" class="peer-focus:font-medium absolute text-sm text-black dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black-600 peer-focus:dark:text-black-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                    </div>
                </div>
                <button type="submit" class="text-white bg-gray-800 hover:bg-white-800 focus:ring-4 focus:outline-none focus:ring-white-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-white-600 dark:hover:bg-white-700 dark:focus:ring-white-800">Submit</button>
            </form>
        </div>
    </div>
@endsection