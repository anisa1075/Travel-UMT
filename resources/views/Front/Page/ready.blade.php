<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ready UMT</title>

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
            <section class=" ">
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
                    <img class=" w-full" width="100%" height="100%" src={{ asset('img/ready.png') }} alt="Logo UMT">
                    <h1 class="absolute top-0 left-0 text-white text-4xl font-bold p-10 font-Rasa"
                        style="letter-spacing: 1px;">READY PACKAGE</h1>
                </div>


                <div class=" p-4 pl-6 text-center justify-center pt-10">
                    <p class=" font-Rasa font-bold text-black text-2xl">"Perjalanan Tambahan Kata Siapa Gak Bisa"</p>
                    <p class=" font-Poppins pt-4 p-3">Paket wisata siap pakai atau ready package adalah opsi perjalanan
                        yang telah dirancang sebelumnya oleh <span class=" font-bold">UNITED MUSLIM TOUR</span> yang
                        bisa dipesan atas nama Travel Lain.
                        Paket ini mencakup berbagai aspek perjalanan, seperti transportasi, akomodasi, makanan, dan
                        aktivitas wisata ditemani dengan Tour guide UMT yang berpengalaman pastinya . Pelanggan tidak
                        perlu repot-repot merencanakan setiap detail perjalanan secara terpisah.</p>

                    <p class=" font-Rasa font-bold text-black text-2xl py-6">Daftar Ready Package</p>
                </div>

                <div class=" grid lg:grid-cols-4 grid-cols-2 rounded-lg pt-2 px-2 pb-8">


                    @foreach ($ready as $row)
                        
                    
                    {{-- <div class=" p-2 relative  text-center justify-center">
                        <div>
                            <a href="" class=""><img
                                    class="  rounded-lg w-full h-full object-cover hover:opacity-50 transition-opacity duration-300" style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)"
                                    width="100%" height="50%" src={{ asset('storage/' . $row->img) }} draggable="false" alt="Logo UMT">

                                <div class="">
                                    <p class="absolute top-0 left-0 z-10 lg:mt-60 mt-36 font-Rasa lg:text-xl rounded-b-lg bg-eaebea lg:px-8 px-17 py-2"
                                        style="font-size: 18px;">
                                        {{ $row->negara }}</p>
                                </div>

                            </a>
                        </div>

                    </div> --}}
                    <div class=" p-2 relative  text-center justify-center">

                        <div class=" bg-eaffd4 rounded-lg pb-4"
                            style="box-shadow: 5px 5px 5px rgba(127, 125, 125, 0.75)">
                            <img class=" p-4 z-20  w-full h-full object-cover" width="100%" height="50%"
                            src={{ asset('storage/' . $row->img) }} draggable="false" alt="Logo UMT">

                            <div class=" px-4">
                                <a href="{{ route('front.detail.itinerary', $row->id) }}">
                                    <p class=" -mt-2 z-10 px-1  bg-395723 rounded-lg text-white font-Poppins text-sm py-2 hover:bg-537938"
                                        style="letter-spacing: 1px; font-weight: 800;">{{ $row->negara }}</p>
                                </a>

                            </div>

                        </div>


                    </div>

                    @endforeach



                </div>


            </div>

        </div>





        <div class=" text-end fixed lg:bottom-10 bottom-6 lg:right-10 right-6 z-50 hover:text-white">
            <a href="" class=" rounded-full shadow-md flex hover:bg-395723" style="background-color: rgb(35, 243, 16);"><i
                    class="fa-brands fa-whatsapp fa-2x "
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
