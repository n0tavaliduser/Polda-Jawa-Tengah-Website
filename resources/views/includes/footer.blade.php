<!-- GMaps Polda Jawa Tengah -->
<div class="mapouter">
    <div class="gmap_canvas">
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.107971500526!2d110.41373558342455!3d-6.996564041461353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b6769041ae9%3A0xc903b0320fc8986d!2sCentral%20Java%20Police!5e0!3m2!1sen!2sid!4v1672157516686!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.107971500526!2d110.41373558342455!3d-6.996564041461353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b6769041ae9%3A0xc903b0320fc8986d!2sCentral%20Java%20Police!5e0!3m2!1sen!2sid!4v1672157516686!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        {{-- <a href="https://mcpenation.com/">MCPE Nation</a> --}}
    </div>
    <style>.mapouter{position:relative;text-align:right;width:100%;height:600px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:600px;}.gmap_iframe {height:600px!important;}</style>
</div>

<footer class="relative bg-slate-500 pt-8 pb-6">
    <div class="bottom-auto fixed-bottom top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-slate-500 fill-current" points="2560 0 2560 100 0 100"></polygon>
    </svg>
    </div>
    <div class="container mx-auto px-4">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-6/12 px-4">
        <h4 class="text-3xl font-semibold text-white pb-4">Let's keep in touch!</h4>
        <h5 class="text-lg mt-0 mb-2 text-white">
            <p class="font-bold">Polda Jawa Tengah</p> is on any of these platforms.
        </h5>
        <div class="mt-6 mb-5">

            <!-- Tombol Facebook Footer -->
            <button class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                <i class="flex fab fa-facebook-square">
                    <a href="https://web.facebook.com/humaspoldajtg/?_rdc=1&_rdr" class="text-transparent bg-transparent absolute -translate-x-7 -translate-y-3 rounded-full w-10 h-10">aaa</a>
                </i>
            </button>

            <!-- Tombol Twitter Footer -->
            <button class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                <i class="flex fab fa-twitter">
                    <a href="https://twitter.com/poldajateng_" class="text-transparent bg-transparent absolute -translate-x-7 -translate-y-3 rounded-full w-10 h-10">aaa</a>
                </i>
            </button>
            
            <!-- Tombol Instagram Footer -->
            <button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                <i class="flex fab fa-instagram">
                    <a href="https://www.instagram.com/humas_poldajateng/?next=%2F" class="text-transparent bg-transparent absolute -translate-x-7 -translate-y-3 rounded-full w-10 h-10">aaa</a>
                </i>
            </button>
        </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
        <div class="flex flex-wrap items-top mb-6">
            <div class="w-full lg:w-4/12 px-4 ml-auto">
            <span
                class="block uppercase text-white text-sm font-semibold mb-2 pb-4"
                >Resource</span
            >
            <ul class="list-unstyled">
                <li>
                <a
                    class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="{{ route('frontend-photo') }}"
                    >Gallery | Photos</a
                >
                </li>
                <li>
                <a
                    class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="{{ route('frontend-video') }}"
                    >Gallery | Videos</a
                >
                </li>
                <li>
                <a
                    class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="{{ route('frontend-news') }}"
                    >News</a
                >
                </li>
                <li>
                <a
                    class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="{{ route('frontend-contact') }}"
                    >Contact</a
                >
                </li>
                <li>
                <a
                    class="text-white hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="#"
                    >FAQ</a
                >
                </li>
            </ul>
            </div>
            <div class="w-full lg:w-4/12 px-4">
            <span
                class="block uppercase text-white text-sm font-semibold mb-2 pb-4"
                >Contact Us</span
            >
            <ul class="list-unstyled">
                <li>
                <a
                    class="text-white font-semibold block pb-2 text-sm"
                    >{{ $home->mail }}</a
                >
                </li>
                <li>
                <a
                    class="text-white font-semibold block pb-2 text-sm"
                    >{{ $home->address }}</a
                >
                </li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    <hr class="my-6 border-gray-400" />
    <div
        class="flex flex-wrap items-center md:justify-between justify-center"
    >
        <div class="w-full md:w-4/12 px-4 mx-auto text-center">
        <div class="text-sm text-gray-600 font-semibold py-1">
            <a class="hover:text-gray-900" href="https://www.navudev.com/">
                Stevano Titondea Prayoga Putra
            </a>
            |
            <a
                href="https://dinus.ac.id/majors/a11/teknik-informatika-s1"
                class="text-gray-600 hover:text-gray-900"
                >Teknik Informatika - UDINUS</a
            >.
        </div>
        </div>
    </div>
    </div>
</footer>