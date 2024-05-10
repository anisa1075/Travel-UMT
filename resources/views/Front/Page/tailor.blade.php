<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailor Made</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body>

    <header class=" bg-65894b absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">

            <div class="flex items-center justify-between relative p-5">
                <div class="a lg:ml-36 object-cover">
                    <img src={{ asset('img/logo.png') }} alt="Logo UMT">
                </div>

                <div class="flex items-center">
                    <button id="hamburger" name="burger" type="button"
                        class="block absolute right-4 lg:hidden to-white p-2">
                        <span
                            class="hamburger-line transition duration-300 ease-in-out origin-top-left text-white"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out text-white"></span>
                        <span
                            class="hamburger-line transition duration-300 ease-in-out origin-bottom-left text-white"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute bg-white  shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none mr-">
                        <ul id="menu"
                            class="  block  lg:flex  rounded-full lg:bg-e2f0d9 uppercase font-Poppins text-537938 font-semibold text-base py-1">
                            <li class="group">
                                <a href="{{ route('front.index') }}"
                                    class="text-base text-dark py-1 mx-5 px-2 flex group-hover:text-primary rounded-full hover:bg-537938 transition duration-300 ease-in-out hover:text-white">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="{{ route('front.view.destinasi') }}"
                                    class="text-base text-dark py-1 mx-5 px-2 flex group-hover:text-primary rounded-full hover:bg-537938 transition duration-300 ease-in-out hover:text-white">Destinasi</a>
                            </li>
                            @guest
                            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                            data-dropdown-trigger="hover"
                            class="hover:text-white uppercase text-base font-Poppins font-semibold bg-e2f0d9 hover:bg-537938 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">Galeri <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownHover"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg w-44 ">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownHoverButton">
                                @foreach ($kategori as $row)
                                    
                                
                                <li>
                                    <a href="{{ route('login') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $row->kategori }}</a>
                                </li>

                                @endforeach
                            </ul>
                        </div>
                        {{-- end dropdown galeri --}}
                                <li class="group">
                                    <a href="{{ route('login') }}"
                                        class="text-base text-dark py-1 mx-5 px-2 flex group-hover:text-primary rounded-full hover:bg-537938 transition duration-300 ease-in-out hover:text-white">Product</a>
                                </li>
                            @else

                                <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                                    data-dropdown-trigger="hover"
                                    class="hover:text-white uppercase text-base font-Poppins font-semibold bg-e2f0d9 hover:bg-537938 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">Galeri <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                <!-- Dropdown menu -->
                                <div id="dropdownHover"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg w-44 ">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownHoverButton">
                                        @foreach ($kategori as $row)
                                            
                                        
                                        <li>
                                            <a href="{{ route('front.kategori.galeri', $row->slug) }}"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $row->kategori }}</a>
                                        </li>

                                        @endforeach
                                    </ul>
                                </div>
                                {{-- end dropdown galeri --}}

                                <li class="group">
                                    <a href="{{ route('front.tailor.made') }}"
                                        class="text-base text-dark py-1 mx-5 px-2 flex group-hover:text-primary rounded-full hover:bg-537938 transition duration-300 ease-in-out hover:text-white">Product</a>
                                </li>
                            @endguest

                            <li class="group">
                                <a href="{{ route('front.hubungi.kami') }}"
                                    class="text-base text-dark py-1 mx-5 px-2 flex group-hover:text-primary rounded-full hover:bg-537938 transition duration-300 ease-in-out hover:text-white">Hubungi
                                    Kami</a>
                            </li>

                            

                        </ul>

                        

                        



                    </nav>

                    

                   

                </div>
                
                @guest
                <a href="{{ route('login') }}"
                class=" text-white bg-537938 rounded-full font-Poppins font-bold px-5 py-2 text-base hover:bg-395723 938 mr-14" style="display: flex; align-items: center;">
                <img src="{{ asset('img/phone.png') }}" class=" mr-1" alt="">Contact Us</a>
                
                @else
                @endguest
                


                @guest
                @else
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <p class=" bg-e2f0d9 text-537938 font-bold px-2 py-2 mr-14 font-Poppins" style="border-radius: 10px; font-size:16px;">
                        {{ Auth::user()->name }}<a href="" onclick="confirmLogout(event)" title="Logout"
                            class=" bg-e2f0d9 text-537938 px-3 py-2 mr-6 lg:mr-0" style="border-radius: 10px;"><i
                                class="fa-solid fa-right-from-bracket" style="color: black;"></i></a></p>


                @endguest
            </div>


        </div>
    </header>

    <div class=" pt-24 lg:flex bg-slate-50">

        <div class="">
            <section class="">
                <p class="  lg:mr-36 mr-10 pt-12 lg:pl-24 pl-4 font-Rasa text-2xl" style="font-weight: 600;">PRODUCT</p>

                <div class=" pt-2 pl-4 pb-3 lg:pb-0">


                    <a href="{{ route('front.tailor.made') }}">
                        <p class="lg:mx-10 mr-28 font-Poppins font-semibold m-1 hover:bg-537938 hover:text-white duration-300 rounded-lg px-2"
                            style="letter-spacing: 1px;">>
                            Tailor Made
                        </p>
                    </a>
                    <a href="{{ route('front.ready') }}">
                        <p class="lg:mx-10 mr-28 font-Poppins font-semibold m-1 hover:bg-537938 hover:text-white duration-300 rounded-lg px-2"
                            style="letter-spacing: 1px;">>
                            Ready Package
                        </p>
                    </a>
                    <a href="{{ route('front.open.trip') }}">
                        <p class="lg:mx-10 mr-28 font-Poppins font-semibold m-1 hover:bg-537938 hover:text-white duration-300 rounded-lg px-2"
                            style="letter-spacing: 1px;">>
                            Open Trip
                        </p>
                    </a>

                </div>

            </section>
        </div>

        <div class="">

            <div class=" bg-white">

                <div class=" relative">
                    <img class=" w-full" width="100%" height="100%" src={{ asset('img/bgtailor.png') }} alt="Logo UMT">
                    <h1 class="absolute top-0 left-0  text-white text-4xl font-bold p-10 font-Rasa"
                        style="letter-spacing: 1px;">TAILOR MADE</h1>
                </div>


                <div class=" p-4 pl-6 text-center justify-center pt-10">
                    <p class=" font-Rasa font-bold text-black text-2xl">"Jelajahi Dunia Sesuai Keinginanmu!"</p>
                    <p class=" font-Poppins pt-4 p-3">Jika Anda mencari rencana perjalanan yang unik dan fleksibel, tur
                        yang dibuat khusus memberi Anda kebebasan untuk melakukan, pergi, melihat, dan mengalami apa pun
                        yang Anda inginkan tanpa perlu repot mengaturnya sendiri. United Muslim Tour memberi Anda
                        kesempatan untuk menciptakan perjalanan paling berkesan yang Anda butuhkan.</p>

                    <p class=" font-Rasa font-semibold text-black text-2xl py-6">Mengapa Anda akan menyukai Tour
                        Tailor-Made?</p>
                    <p class=" font-Poppins p-3">Merancang rencana perjalanan ideal Anda adalah perpaduan yang
                        harmonis antara ide dan keinginan Anda dan dengan keahlian kami, kami membuatnya sangat mudah.
                        Pakar perjalanan kami yang disesuaikan dengan kebutuhan Anda akan membantu Anda memaksimalkan
                        waktu dan anggaran Anda. Anda yang merancang rencana perjalanan, kami yang membuat rencana
                        perjalanannya. Terdengar bagus bukan?
                    </p>
                </div>

                <div
                    class=" grid lg:grid-cols-3 grid-cols-1 rounded-lg pt-8 px-2 pb-8 justify-center items-center gap-24 mx-12">



                    <div class=" relative  text-center justify-center items-center">
                        <div>
                            <img class="  rounded-lg h-full mx-auto object-cover hover:opacity-50 transition-opacity duration-300"
                                width="70%" height="50%" src={{ asset('img/tailor1.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Rencana perjalanan yang sepenuhnya
                                disesuaikan atau siap pakai</h1>

                            <p class=" pt-2">Mendesain perjalanan Anda sendiri sesuai keinginan Anda.</p>
                        </div>

                    </div>

                    <div class="  relative  text-center justify-center items-center">
                        <div>
                            <img class=" mx-auto rounded-lg h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img/tailor2.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Spesialis Destinasi</h1>

                            <p class=" pt-2">Akses pengetahuan tujuan Anda ahli dari pakar perjalanan kami, dengan
                                dukungan hingga akhir perjalanan Anda.</p>
                        </div>

                    </div>

                    <div class="  relative  text-center justify-center items-center">
                        <div>
                            <img class=" mx-auto rounded-lg h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img/tailor3.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Pemesanan & Keberangkatan Fleksibel</h1>

                            <p class=" pt-2">Anda dapat memilih kapan dan di mana Anda ingin memulai perjalanan.</p>
                        </div>

                    </div>

                    <div class="  relative  text-center justify-center items-center">
                        <div>
                            <img class=" mx-auto rounded-lg h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img/tailor4.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Pilihan Inklusi</h1>

                            <p class=" pt-2">Pilih Maskapai, Hotel, Restoran, Menu makanan, dan Tempat Wisata sesukamu!
                            </p>
                        </div>

                    </div>

                    <div class=" relative  text-center justify-center items-center">
                        <div>
                            <img class=" mx-auto rounded-lg h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img/tailor5.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Perjalanan Sesuai Syariat</h1>

                            <p class=" pt-2">Tidak perlu takut kesulitan mencari makanan halal, Lingkungan yang aman,
                                dan tempat sholat yang baik.</p>
                        </div>

                    </div>


                </div>

                {{-- cara kerja --}}
                <div class=" p-4 pl-6 text-center justify-center pt-10">
                    <p class=" font-Rasa font-bold text-black text-2xl">Bagaimana Cara Kerjanya ?</p>
                    <p class=" font-Poppins pt-4 p-3">Keunggulan utama dari travel tailor-made adalah fleksibilitas dan
                        personalisasi yang tinggi, memungkinkan pelanggan untuk mengatur perjalanan mereka sesuai dengan
                        selera dan keinginan mereka.

                        Cara kerja travel tailor-made dimulai dengan konsultasi antara pelanggan dan agen perjalanan.
                        Selama pertemuan ini, pelanggan dapat menyampaikan preferensi mereka, seperti destinasi yang
                        diinginkan, aktivitas yang diinginkan, tingkat akomodasi, dan anggaran yang tersedia.
                        Berdasarkan informasi ini, agen perjalanan akan merancang rencana perjalanan yang disesuaikan
                        sepenuhnya dengan keinginan pelanggan.

                        Proses ini melibatkan pemilihan destinasi, pengaturan transportasi, akomodasi, dan aktivitas
                        wisata sesuai dengan preferensi pelanggan. Selama proses perencanaan, pelanggan memiliki kontrol
                        penuh untuk mengajukan perubahan atau penyesuaian sesuai keinginan mereka.</p>

                    <p class=" font-Rasa font-semibold text-black text-2xl py-6">Temukan jenis perjalanan Tailor-Mande
                        Anda</p>
                    <p class=" font-Poppins p-3">Tailor-Made adalah untuk siapa saja yang ingin membawa tingkat
                        kebiasaan apa pun ke petualangan mereka selama empat tahun atau lebih – tetapi cari tahu lebih
                        lanjut tentang jenis perjalanan populer kami di bawah ini.
                    </p>
                </div>
                {{-- end cara kerja --}}

                <div
                    class=" grid lg:grid-cols-3 grid-cols-1 rounded-lg pt-8 px-2 pb-14 justify-center items-center gap-24 mx-12">



                    <div class=" relative  text-center justify-center items-center">
                        <div>
                            <img class=" mx-auto h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img/mande1.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Teman & Keluarga</h1>

                            <p class=" pt-2">Baik Anda merayakan acara khusus bersama keluarga atau memulai
                                petualangan khusus untuk sekelompok teman, kami dapat membantu merencanakan perjalanan
                                Anda berikutnya.</p>
                        </div>

                    </div>

                    <div class="  relative  text-center justify-center items-center">
                        <div>
                            <img class=" mx-auto h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img/mande2.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Kelompok Pendidikan & Sekolah</h1>

                            <p class=" pt-2">Baik Anda merayakan acara khusus bersama keluarga atau memulai
                                petualangan khusus untuk sekelompok teman, kami dapat membantu merencanakan perjalanan
                                Anda berikutnya.</p>
                        </div>

                    </div>

                    <div class="  relative  text-center justify-center items-center">
                        <div>
                            <img class=" mx-auto h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="80%" height="50%" src={{ asset('img/mande3.png') }} alt="Logo UMT">

                        </div>

                        <div>
                            <h1 class=" font-Rasa font-semibold text-lg pt-2">Bekerja</h1>

                            <p class=" pt-2">Baik Anda merayakan acara khusus bersama keluarga atau memulai
                                petualangan khusus untuk sekelompok teman, kami dapat membantu merencanakan perjalanan
                                Anda berikutnya.</p>
                        </div>

                    </div>


                </div>








            </div>



        </div>



        <div class="text-end fixed lg:bottom-10 bottom-6 lg:right-10 right-6 z-50 hover:text-white">
            <a href="" class=" rounded-full shadow-md flex hover:bg-395723"
                style="background-color: rgb(35, 243, 16);"><i class="fa-brands fa-whatsapp fa-2x "
                    style="background-color: rgb(35, 243, 16); padding: 6px 14px; border-radius: 25px; "></i><span
                    class="pr-3 mt-3 font-Poppins font-semibold">WhatsApp UMT</span></a>
        </div>

    </div>



    {{-- footer logo --}}

    <section class=" bg-537938">
        <img class=" mx-auto p-2 w-20" src={{ asset('img/logo.png') }} alt="Logo UMT">

    </section>


    {{-- end footer logo --}}

    @vite('resources/js/app.js')
     {{-- flowbite --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


</body>

</html>
