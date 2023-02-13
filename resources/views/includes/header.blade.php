<header>
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 fixed-top">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full flex justify-between xl:w-auto xl:static xl:block xl:justify-start">
                <div class="flex relative xl:pb-0">
                    <a href="#">
                        <img src="{{ asset('image/logopolda.svg') }}" class="max-h-14 w-full">
                    </a>
                    <div class="hidden 2xl:block p-2">
                        <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white align-center pl-4" href="/">Polda Jawa Tengah</a>
                    </div>
                </div>
                <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block xl:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="xl:flex flex-grow items-center bg-white xl:bg-transparent xl:shadow-none md:mt-0 rounded-xl bg-opacity-95 hidden" id="collapse-navbar">
            <ul class="flex flex-col xl:flex-row list-none mr-auto pl-[25px]">
                <li class="flex items-center">
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="xl:text-white xl:hover:text-gray-300 text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold">
                            <span class="flex items-center">
                                <i class="fa fa-home text-lg leading-lg mr-2" aria-hidden="true"></i>
                                Home
                                <i class="fa fa-chevron-circle-down text-sm leading-lg ml-2 animate-pulse focus:rotate-180" aria-hidden="true"></i>
                            </span>
                        </button>
                        <div x-show="open" class="absolute left-0 z-50 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 text-black">
                            <div class="px-2 py-2 bg-white rounded-md shadow">
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white" href="#" data-modal-toggle="profilPoldaModal">Profil Polda Jawa Tengah</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white" href="#" data-modal-toggle="visiMisiPoldaModal">Visi dan Misi</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white" href="#" data-modal-toggle="lambangPoldaModal">Lambang Polda</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white" href="#" data-modal-toggle="strukturPoldaModal">Struktur Organisasi</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="xl:text-white xl:hover:text-gray-300 text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold">
                        <span class="flex items-center">
                            <i class="fa fa-camera-retro text-lg leading-lg mr-2" aria-hidden="true"></i>
                            Gallery
                            <i class="fa fa-chevron-circle-down text-sm leading-lg ml-2 animate-pulse focus:rotate-180" aria-hidden="true"></i>
                        </span>
                        </button>
                        <div x-show="open" class="absolute left-0 z-50 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 text-black">
                            <div class="px-2 py-2 bg-white rounded-md shadow">
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white" href="{{ route('frontend-photo') }}"><i class="fa fa-picture-o" aria-hidden="true"></i>Foto</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white" href="{{ route('frontend-video') }}"><i class="fa fa-file-video-o" aria-hidden="true"></i>Video</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center">
                    <a class="xl:text-white xl:hover:text-gray-300 text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold" href="{{ route('frontend-news') }}">
                        <i class="fa fa-book text-lg leading-lg mr-2" aria-hidden="true"></i>
                        News
                    </a>
                </li>
                <li class="flex items-center">
                    <a class="xl:text-white xl:hover:text-gray-300 text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold" href="{{ route('frontend-official') }}">
                        <i class="fa fa-users text-lg leading-lg mr-2" aria-hidden="true"></i>
                        Official
                    </a>
                </li>
                <li class="flex items-center">
                    <a class="xl:text-white xl:hover:text-gray-300 text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold" href="{{ route('frontend-contact') }}">
                        <i class="far fa-file-alt text-lg leading-lg mr-2"></i>
                        Contact
                    </a>
                </li>
                <li class="flex items-center">
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="xl:text-white xl:hover:text-gray-300 text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold">
                            <span class="flex items-center">
                                <i class="fa fa-camera-retro text-lg leading-lg mr-2" aria-hidden="true"></i>
                                Services
                                <i class="fa fa-chevron-circle-down text-sm leading-lg ml-2 animate-pulse" aria-hidden="true"></i>
                            </span>
                        </button>
                        <div x-show="open" class="absolute left-0 z-50 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow w-44">

                                <!-- SIM Service Start -->
                                <div @click.away="open = false" class="relative hover:bg-gray-400 rounded-lg" x-data="{ open: false }">
                                    <button @click="open = !open" class="xl:text-black text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold">
                                        <span class="flex items-center">
                                            <div class="mr-2 w-8">
                                                <i class="fa fa-id-card text-lg leading-lg mr-2" aria-hidden="true"></i>
                                            </div>
                                            Lantas
                                            <i class="fa fa-chevron-circle-down text-sm leading-lg ml-2 animate-pulse" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                    <div x-show="open" class="absolute left-0 z-50 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 text-black">
                                        <div class="px-2 py-2 bg-gray-400 rounded-md shadow">
                                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-600 hover:text-white" href="sim">SIM</a>
                                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-600 hover:text-white" href="stnk">STNK</a>
                                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-600 hover:text-white" href="bpkb">BPKB</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- SIM Service End -->

                                <!-- Intelejen Service Start -->
                                <div @click.away="open = false" class="relative hover:bg-gray-400 rounded-lg" x-data="{ open: false }">
                                    <button @click="open = !open" class="xl:text-black text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold">
                                        <span class="flex items-center">
                                            <div class="mr-2 w-8">
                                                <i class="fa fa-paperclip text-lg leading-lg mr-2" aria-hidden="true"></i>
                                            </div>
                                            Intelejen
                                            <i class="fa fa-chevron-circle-down text-sm leading-lg ml-2 animate-pulse" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                    <div x-show="open" class="absolute left-0 z-50 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                                        <div class="px-2 py-2 bg-gray-400 rounded-md shadow text-black">
                                            @guest
                                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-600 hover:text-white" href="#" data-modal-toggle="loginSkck" onclick="toggleNavbar('collapse-navbar')">SKCK</a>
                                            @else
                                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-600 hover:text-white" href="{{ route('skckmanager.create') }}">SKCK</a>
                                            @endguest
                                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-600 hover:text-white" href="#">Ijin Keramaian</a>
                                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-600 hover:text-white" href="#">Ijin Berburu</a>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Intelejen Service End -->
                                    
                                    <!-- Reserse Service Start -->
                                <div @click.away="open = false" class="relative hover:bg-gray-400 rounded-lg" x-data="{ open: false }">
                                    <button @click="open = !open" class="xl:text-black text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold">
                                        <span class="flex items-center">
                                            <div class="mr-2 w-8">
                                                <i class="fa fa-question-circle text-lg leading-lg mr-2" aria-hidden="true"></i>
                                            </div>
                                            Reserse
                                            <i class="fa fa-chevron-circle-down text-sm leading-lg ml-2 animate-pulse" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                    <div x-show="open" class="absolute left-0 z-50 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 text-black">
                                        <div class="px-2 py-2 bg-gray-400 rounded-md shadow">
                                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-600 hover:text-white">SP2HP<i class="fa fa-window-close text-red-600 ml-3" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Reserse Service End -->
                            </div>
                        </div>
                    </div>
                </li>
                @guest
                @else
                @if (auth()->user()->role == 'masyarakat')
                    
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <li class="flex items-center h-full">
                        <div @click.away="open = false" class="relative bg-red-500 animate-pulse" x-data="{ open: false }">
                            <button @click="open = !open" class="xl:text-white xl:hover:text-gray-300 text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold">
                                <span class="flex items-center">
                                    Logout
                                </span>
                            </button>
                        </div>
                    </li>
                </form>
                @endif
                @endguest
                <li class="flex items-center visible xl:invisible">
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="xl:text-white xl:hover:text-gray-300 text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold">
                        <span class="flex items-center">
                        <i class="fa fa-certificate text-lg leading-lg mr-2"></i>
                            Subdomain
                            <i class="fa fa-chevron-circle-down text-sm leading-lg ml-2 animate-pulse" aria-hidden="true"></i>
                        </span>
                        </button>
                        <div x-show="open" class="absolute left-0 z-50 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow w-56">
                                <a class="flex px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white"><img class="h-full w-auto pl-2 pr-2 max-h-5" src="image/logopolda.svg">Polres Demak</a>
                                <a class="flex px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white"><img class="h-full w-auto pl-2 pr-2 max-h-5" src="image/logopolda.svg">Dit Polairud</a>
                                <a class="flex px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white"><img class="h-full w-auto pl-2 pr-2 max-h-5" src="image/logopolda.svg">Dit Reskrimsus</a>
                                <a class="flex px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white"><img class="h-full w-auto pl-2 pr-2 max-h-5" src="image/logopolda.svg">Polres Pati</a>
                                <a class="flex px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white"><img class="h-full w-auto pl-2 pr-2 max-h-5" src="image/logopolda.svg">Polres Batang</a>
                                <a class="flex px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white"><img class="h-full w-auto pl-2 pr-2 max-h-5" src="image/logopolda.svg">Polres jepara</a>
                                <a class="flex px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white"><img class="h-full w-auto pl-2 pr-2 max-h-5" src="image/logopolda.svg">Polres Semarang</a>
                                <a class="flex px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:bg-gray-500 hover:text-white"><img class="h-full w-auto pl-2 pr-2 max-h-5" src="image/logopolda.svg">Polres Kendal</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="flex flex-col xl:flex-row list-none xl:ml-auto">
                <li class="flex items-center">
                <a class="xl:text-white xl:hover:text-gray-300 text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold" href="https://web.facebook.com/humaspoldajtg/?_rdc=1&_rdr"><i class="xl:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg animate-pulse"></i><span class="xl:hidden inline-block ml-2">Facebook</span></a>
                </li>
                <li class="flex items-center">
                <a class="xl:text-white xl:hover:text-gray-300 text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold" href="https://twitter.com/poldajateng_"><i class="xl:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg animate-pulse"></i><span class="xl:hidden inline-block ml-2">Twitter</span></a>
                </li>
                <li class="flex items-center">
                <a class="xl:text-white xl:hover:text-gray-300 text-gray-800 px-3 py-4 xl:py-2 flex items-center text-xs uppercase font-bold" href="https://www.instagram.com/humas_poldajateng/?next=%2F"><i class="xl:text-gray-300 text-gray-500 fab fa-instagram text-lg leading-lg animate-pulse"></i><span class="xl:hidden inline-block ml-2 ">Instagram</span></a>
                </li>
            </ul>
            </div>
        </div>



    <!-- Modals Pop Up -->

        <!-- Modals Profil Polda Jawa Tengah -->
        <div id="profilPoldaModal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed-top top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-10 w-screen md:pl-20 md:pr-20 h-fit md:h-auto">
                <!-- Modal content -->
                <div class="relative rounded-lg shadow bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-600">
                        <h3 class="text-xl font-semibold text-white">
                            Profil Polda Jawa Tengah
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="profilPoldaModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6 text-justify text-gray-300">
                        <p class="text-base leading-relaxed">
                            {{-- {{ $popup[0]['profile'] }} --}}
                            'Selayang Pandang Polda Jawa-Tengah Sejarah perjuangan kepolisian komando daerah Jawa Tengah dari masa ke masa, sejak proklamasi kemerdekaan Republik Indonesia selalu mengalami pasang surut. Berikut adalah lika-liku kepolisian Jawa Tengah dari masa ke masa: Periode 17 Agustus 1945 - 17 Desember 1949, kepolisian Jawa Tengah berada di bawah naungan Undang-Undang Dasar RI 1945. Periode 27 Desember 1949 - 17 Agustus 1950, kepolisian Jawa Tengah di bawah naungan Undang-Undang Dasar Sementara RI 1949. Periode 17 Agustus 1950 - 5 Juli 1959, kepolisian Jawa Tengah di bawah naungan Undang-Undang Dasar Sementara RI 1950. Periode 5 Juli 1959 - 11 Maret 1966, periode peralihan atau menjelang Orde Baru. Periode 11 Maret 1966 Reformasi, adalah periode pembaharuan dan kemajuan serta regenerasi kepolisian komando daerah kepolisian Jawa Tengah. Kepolisian Daerah Jawa Tengah terdiri dari beberapa Kepolisian Resort (Polres), antara lain: Kepolisian Resort Kudus. Kapolres pertama Kudus adalah Soebarkah. Kepolisian Resort Banyumas. Setelah Yogyakarta menjadi pusat pemerintahan RI pada 4 Januari 1946, Komisaris Polisi R. Soemarto, pria kelahiran Sokaraja Banyumas, menjabat Wakil Kepala Kepolisian RI. Pada saat itu beliau membentuk pasukan Mobile Brigade besar pada 14 November 1946 yang dipusatkan di Karesidenan Banyumas. Kepolisian Resort Blora. Dua pucuk pimpinan di wilayah Karasidenan Pati pada waktu itu diculik dari Pati dan di bawa ke Blora untuk disuruh menandatangani persetujuan gerakan pemberontak Madiun di wilayah pati. Akan tetapi beliau tidak mau menandatanganinya, lebih baik mati dari pada mengorbankan rakyat. Akhirnya mereka di eksekusi mati oleh pemberontak. Kepolisian Resort Banjarnegara. Sejarah Polres Banjarnegara tidak bisa dilepaskan dengan sejarah kepolisian secara umum di Indonesia. Embrio kepolisian di Indonesia sudah terbentuk pada zaman penjajahan belanda. Demikian pula dengan kepolisian daerah Banjarnegara yang sudah terbentuk sejak tahun 1920-an. Lembaga kepolisian pertama yang didirikan pemerintah kolonial di Banjarnegara adalah Commissariat van Politie Bandjarnegara dan R. A. A Soemitro Kolopaking Poerbonegoro adalah Komisaris Polisi pertama bumiputera dari Banjarnegara. Kepolisian Resort Magelang. Kesatuan polisi di Magelang sudah ada sebelum tahun 1945, yang berkedudukan di Jalan Kejoran. Setelah Indonesia merdeka terjadi peralihan kekuasaan dari pemerintah Jepang kepada pemerintah Indonesia dengan diprakarsai oleh Komisaris Polisi tingkat I R sukardjo dan IP.1 Legowo, dibentuklah polisi karesidenan Kedu dan Magelang. Kepolisian Resort Pemalang. Kepolisian Resort Purworejo. Polwitabes Semarang. Kepolisian Resort Klaten. Terbentuknya Polres Klaten tidak dapat dipisahkan dengan terbentunya BKR. Pada tahun 1944 di kabupaten Klaten sudah terbentuk kantor polisi kabupaten Klaten. Kepolisian Resort Salatiga. Antara akhir Abad ke-18 dan menjelang abad ke-19, berdirilah markas kepolisian resort Salatiga. Pada masa penjajahan Jepang wilayah kepolisian Salatiga bernama detasemen polisi yang bermarkas di Desa Pager, kecamatan Tengran, Semarang. Setelah begulirnya waktu, pada 1965 Komando Resort 932 Kores Salatiga diganti menjadi Kepolisian Resort Salatiga. Dengan inspektur pertamanya Polisi Gasira. Kepolisian Resort Brebes. Kepolisian Resort Kebumen. Pada 1943, dibentuklah kepolisian detasemen yang berstatus pasukan tempur yang bermarkas di Jalan Sedayu Gombong yang dipimpin Inspektur Polisi Ali. Kemudian pada 1945, beralih pimpinan ke Inspektur Polisi R. Sudargo. Lalu pada 1947, markas kepolisian detasemen dipindahkan dari Gombong, Kebumen ke Desa Panjatan, Karanganyar, Kebumen dipimpin oleh Inspektur Polisi R Panji Suwoso. Kepolisian Resort Semarang. Kepolisian Resort Tegal. Kepolisian Wilayah Pekalongan. Sebelum Kemerdekaan, kepolisian di Pekalongan seperti wilayah lain merupakan alat kolonial untuk menjalankan kekuasaan terhadap bumi pertiwi sehingga menjadi polisi yang antagonis terhadap kepentingan rakyat.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end
                    p-6 space-x-2 rounded-b border-t border-gray-600">
                        <button data-modal-toggle="profilPoldaModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Okay</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals Visi dan Misi Polda Jawa Tengah -->
        <div id="visiMisiPoldaModal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed-top top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-96 md:h-auto">
                <!-- Modal content -->
                <div class="relative rounded-lg shadow bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-white">
                            Tugas Pokok, Visi dan Misi
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="visiMisiPoldaModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6 text-justify">
                        <div class="text-center">
                            <h2 class="text-white font-bold">TUGAS POKOK</h2>
                        </div>
                        <p class="text-base leading-relaxed text-gray-300">
                            Menyelenggarakan Tugas Pokok Polri dalam Pemeliharaan Keamanan Ketertiban Masyarakat, Penegakkan Hukum dan memberi Perlindungan, Pengayoman, dan Pelayanan Masyarakat serta tugas lain sesuai ketentuan hukum dan peraturan serta kebijakan yang telah ditetapkan
                        </p>
                        
                        <div class="text-center">
                            <h2 class="text-white font-bold">VISI</h2>
                        </div>
                        <p class="text-base leading-relaxed text-gray-300">
                            Menampilkan Polda Jawa Tengah yang Profesional, Bermoral, Modern sebagai Pelindung, Pengayom, dan Pelayan Masyarakat yang terpercaya dalam pemeliharaan Kemanan ketertiban Masyarakat dan Penegakkan Hukum.
                        </p>
                        
                        <div class="text-center">
                            <h2 class="text-white font-bold">MISI</h2>
                        </div>
                        <p class="text-base leading-relaxed">
                            <ol class="list-decimal pl-4">
                            <li class="text-gray-300 pb-3">Meningkatkan Sumber Daya Manusia Kepolisian Daerah Jawa Tengah Untuk Tampil   sebagai sosok Pengayom, Pelindung dan Pelayan Masyarakat.</li>
                            <li class="text-gray-300 pb-3">Melaksanakan Penegakkan Hukum secara Konsisten, Berkesinambungan dan Transparan untuk pemeliharaan Kamtibmas.</li>
                            <li class="text-gray-300 pb-3">Melaksanakan Pelayanan Optimal, yang dapat menimbulkan kepercayaan bagi Masyarakat dalam upaya meningkatkan kesadaran hukum.</li>
                            <li class="text-gray-300 pb-3">Menciptakan kondisi keamanan yang kondusif dengan meningkatkan peran serta masyarakat dan instansi terkait secara aktif.</li>
                            <li class="text-gray-300 pb-3">Mengedepankan dan Menjunjung Tinggi Hak Asasi Manusia dalam setiap melaksanakan tugas.</li>
                            </ol>
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end
                    p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button data-modal-toggle="visiMisiPoldaModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Okay</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modals Lambang Polda Jawa Tengah -->
        <div id="lambangPoldaModal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed-top top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-96 md:h-auto">
                <!-- Modal content -->
                <div class="relative rounded-lg shadow bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-300">
                            Lambang Polda Jawa Tengah
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="lambangPoldaModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6 text-justify text-gray-300">
                    <div class="flex justify-center max-w-20">
                        <img src="image/logopolda.svg">
                    </div>
                    <p class="text-base leading-relaxed text-gray-300">
                        Warna hitam dan kuning adalah warna legendaris Polri.
                        <ol class="list-decimal pl-4">
                        <li class="text-gray-300 pb-3">Warna kuning keemasan adalah perlambang kebesaran jiwa dan keagungan hati nurani segenap prajurit Polri.</li>
                        <li class="text-gray-300">Warna hitam adalah lambang keabadian dan sikap tenang mantap yang bermakna harapan agar Polri selalu tidak goyah dalam situasi dan kondisi apapun.</li>
                        </ol>
                    </p>
                    <p>
                        Gambar Borobudur yang tertulis pada Badge Polda jateng, selain diartikan sebagai keagungan peninggalan sejarah, pun pula dimaksudkan akan hikmat kekuatan pembuatnya terdahul, sehingga dapat terwujud suatu bangunan yang megah dan kuat untuk pula diwarisi semangat juang tabah dan ulet.
                    </p>
                    <p>
                        Arti sebenarnya secara simbolik adalah, bahwa candi yang dibangun untuk memuliakan agama Budha Mahayana dan sekaligus untuk mendewakan Cikal-bakal dinasti Syailendra yang dalam pemerintahaannya dikuasai 10(sepuluh) Orang Raja secara berturut . Oleh sebab itu Candi Borobudur disatu pihak mencerminkan nilai nilai tinggi Agama Budha dan dilain pihak mengandung rasa rendah hati yang disadari penciptanya sedalam-dalamnya.
                    </p>
                    <p>
                        Menurut legenda pada jaman dahulu Pulau jawa terapung ditengah lautan, oleh karena agar dapat dihuni manusia, maka harus dipaku dan ditambatkan pada pusat bumi. Paku tersebut yang dikenal sebagai gunung tidar, dimana kawasan sekitarnya merupakan wilayah yang subur yang dikenal dengan wilayah Kedu, yang mana Candi Borobudur juga berada dilingkungan wilayah ini.
                    </p>
                    <p>
                        Salah satu data sejarah yang menyebutkan, bahwa Candi Borobudur didirikan pada abad ke-18 berada dekat sebuah desa Boro, sedangkan kata-kata budur dari kitab kuno ditambahkan kepadanya sehingga menjadi Borobudur . Hal tersebut diartikan pula, bahwa Budur berarti bangunan suci didesa Boro.
                    </p>
                    <p>
                        Menurut pengertian Agama Buda diartikan, bahwa Boro artinya Agung, dan Budur disamakan dengan Budha yang kemudian arti lengkapnya adalah sang Budha yang agung.
                    </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button data-modal-toggle="lambangPoldaModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Okay</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Strutur Organisasi Polda Jawa Tengah -->
        <div id="strukturPoldaModal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed-top top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-96 md:h-auto">
                <!-- Modal content -->
                <div class="relative rounded-lg shadow bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-300">
                            Struktur Organisasi Polda Jawa Tengah
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="strukturPoldaModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                <!-- Modal body -->
                    <div class="p-6 space-y-6 text-justify text-gray-300">
                    <div class="flex justify-center max-w-20">
                        <img src="">
                    </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button data-modal-toggle="strukturPoldaModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Okay</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals Login SKCK Online Polda Jawa Tengah -->
        <div id="loginSkck" aria-hidden="true" class="hidden w-screen min-h-screen flex items-center z-[1]">
            <div class="card lg:card-side bg-base-100 shadow-xl">
                <figure class="p-5"><img src="{{ asset('image/logopolda.svg') }}" alt="Album"/></figure>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="card-body">
                        <input type="text" name="email" placeholder="NIK" class="input input-bordered w-full max-w-xs" />
                        <input type="password" name="password" placeholder="password" class="input input-bordered w-full max-w-xs" />
                        <div class="card-actions justify-end">
                            <button type="submit" class="btn bg-blue-800 text-white">Login</button>
                            <label class="btn bg-green-800 text-white" data-modal-toggle="registerSkck" onclick="toggleNavbar('loginSkck')">Register</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modals Register SKCK Online Polda Jawa Tengah -->
        <div id="registerSkck" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed-top top-0 right-0 left-0 z-50 w-full z-[1] md:inset-0 h-modal min-h-screen md:h-full">
            <div class="card lg:card-side bg-base-100 shadow-xl">
                <figure class="p-5"><img src="{{ asset('image/logopolda.svg') }}" alt="Album"/></figure>
                <form method="post" action="/register">
                    @csrf
                    <div class="card-body">
                        <input type="hidden" name="role" value="masyarakat">
                        <input type="text" name="name" placeholder="Nama Lengkap" class="input input-bordered w-full max-w-xs">
                        <input type="text" name="email" placeholder="NIK" class="input input-bordered w-full max-w-xs" />
                        <input type="password" name="password" placeholder="Password" class="input input-bordered w-full max-w-xs" />
                        <input type="password" name="password_confirmation" placeholder="Ulang Password" class="input input-bordered w-full max-w-xs" />
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>