<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Destinasi</title>

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
                        class=" text-white bg-537938 rounded-full font-Poppins font-bold px-5 py-2 text-base hover:bg-395723 938 mr-14"
                        style="display: flex; align-items: center;">
                        <img src="{{ asset('img/phone.png') }}" class=" mr-1" alt="">Contact Us</a>
                @else
                @endguest



                @guest
                @else
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <p class=" bg-e2f0d9 text-537938 font-bold px-2 py-2 mr-14 font-Poppins"
                        style="border-radius: 10px; font-size:16px;">
                        {{ Auth::user()->name }}<a href="" onclick="confirmLogout(event)" title="Logout"
                            class=" bg-e2f0d9 text-537938 px-3 py-2 mr-6 lg:mr-0" style="border-radius: 10px;"><i
                                class="fa-solid fa-right-from-bracket" style="color: black;"></i></a></p>


                @endguest
            </div>


        </div>
    </header>

    <div class=" pt-24 lg:flex bg-e9ede7">

        <div class="">
            <section class=" ">
                <p class="  lg:mr-36 mr-10 pt-12 lg:pl-16 pl-4 font-Rasa text-2xl" style="font-weight: 600;">Destinasi
                </p>

                {{-- Start Search --}}

                <form action="{{ route('search.destinasi') }}" method="get" class="max-w-md mx-auto px-10">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" name="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search..." required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-537938 hover:bg-395723 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

                {{-- End Search --}}

                <div class=" pt-2 pl-2 pb-3 lg:pb-0">



                    @foreach ($negara as $row)
                        <a href="{{ route('front.desc.destinasi', $row->id) }}">
                            <p class=" lg:pl-11 pl-4 font-Poppins font-semibold m-1 hover:bg-537938 hover:text-white duration-300 rounded-lg p-1"
                                style="letter-spacing: 1px;">>
                                {{ $row->negara }}
                            </p>
                        </a>
                    @endforeach

                </div>

            </section>
        </div>

        <div class="">

            <div class=" bg-white">

                    <div class=" mt-6">
                        <img class=" w-full px-8 py-6" width="100%" height="100%"
                            src={{ asset('storage/' . $desc->foto) }} alt="Logo UMT">

                    </div>


                <div class=" text-end justify-end mr-8">
                    <a href=""><u class=" font-Poppins font-semibold hover:text-65894b">Artikel Lengkap
                            ></u></a>
                </div>

                <div class=" p-8 pl-10 pt-10">

                    <p class=" font-Rasa font-bold text-black text-3xl text-center">"{{ $desc->negara }}"</p>
                    <p class=" font-Poppins pt-4 px-5">{!! $desc->desc !!}</p>


                </div>

            </div>

        </div>





        <div class=" text-end fixed lg:bottom-10 bottom-6 lg:right-10 right-6 z-50 hover:text-white">
            <a href="" class=" rounded-full shadow-md flex hover:bg-395723"
                style="background-color: rgb(35, 243, 16);"><i class="fa-brands fa-whatsapp fa-2x "
                    style="background-color: rgb(35, 243, 16); padding: 6px 14px; border-radius: 25px; "></i><span
                    class="pr-3 mt-3 font-Poppins font-semibold">WhatsApp UMT</span></a>
        </div>
    </div>

    {{-- footer logo --}}

    <section class=" bg-537938 justify-center flex">
        <div class=" flex lg:gap-52 gap-1 lg:p-3 my-1" style="margin-left: 1px; margin-right: 1px;">
            <img class=" lg:w-16 w-14" src={{ asset('img/logo.png') }} alt="Logo UMT">
            <p class=" font-Rasa font-bold text-white text-xs lg:text-lg mt-6 mb-5 lg:mb-0">Ingin Tau Artikel
                Lengkapnya di
                Wikivoyage?</p>
            <a href="" class=" ">
                <p
                    class=" text-395723 bg-white mt-4 font-Poppins font-bold rounded-lg lg:py-2 lg:px-14 px-3 py-1 hover:bg-green-600 hover:text-white duration-300">
                    Klik disini</p>
            </a>
        </div>

    </section>


    {{-- end footer logo --}}

    @vite('resources/js/app.js')
    {{-- flowbite --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
