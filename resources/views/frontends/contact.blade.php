@extends('layouts.frontend')

@section('title')
Polda Jawa Tengah | Home
@endsection
@section('content')
<main>
    <div class="h-20 w-full bg-gray-800"></div>

    <section>
        <div class="flex w-full bg-black min-h-[60vh]">
            <!-- get in touch picture -->
            <div class="w-3/12 h-full bg-white hidden lg:block">
                <img class="w-full h-full" src="{{ asset('image/contact.png') }}">
            </div>

            <div class="flex flex-wrap p-10 w-full min-h-fit bg-white">
                <div class="flex h-10 w-full justify-center">
                    <p class="font-medium text-2xl">GET IN TOUCH</p>
                </div>
                @if($errors->any())
                    <script>
                        alert('{{ $errors->first() }}')
                    </script>
                @endif

                <div class="h-3/4 w-full -mt-14">
                    <form method="POST" action="{{ route('contactmanager.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                        </div>
                        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                            <span class="font-medium">Catatan!</span> Gunakan Format +628xxx
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="tel" name="notelp" id="notelp" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="notelp" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No Telp</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <textarea rows="4" cols="50" name="message" id="message" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required></textarea>
                            <label for="message" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pesan</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6Lf9oEskAAAAAIYzr092m4phDexGkeazJM-AeIQ3"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6Lf9oEskAAAAAIYzr092m4phDexGkeazJM-AeIQ3', {action: 'login'}).then(function(token) {
       ...
    });
});
</script>
@endsection