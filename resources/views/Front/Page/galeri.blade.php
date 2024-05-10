<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeri UMT</title>

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


    @vite('resources/css/app.css')
</head>

<body>
    <header class=" bg-65894b  absolute top-0 left-0 w-full flex items-center z-10">
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
                    <p class=" bg-e2f0d9 text-537938 font-bold px-2 py-2  mr-14 font-Poppins" style="border-radius: 10px; font-size:16px;">
                        {{ Auth::user()->name }}<a href="" onclick="confirmLogout(event)" title="Logout"
                            class=" bg-e2f0d9 text-537938 px-3 py-2 mr-6 lg:mr-0" style="border-radius: 10px;"><i
                                class="fa-solid fa-right-from-bracket" style="color: black;"></i></a></p>


                @endguest
            </div>


        </div>
    </header>

    {{-- <div class=" pt-24 lg:flex bg-slate-50">

        <div class="">
            <section class=" ">
                <p class="  lg:mr-36 mr-10 pt-6 lg:pl-24 pl-4 font-Rasa text-2xl" style="font-weight: 600;">Gallery</p>

                <div class=" pt-2 pl-4 pb-3 lg:pb-0">
                    
                </div>

            </section>
        </div>

        <div class="">
            <div class=" bg-white">
                <img class="" width="100%" height="70%" src={{ asset('img/galeri.png') }} alt="Logo UMT">

                <div class=" p-4 pl-6">
                    <p class=" font-Rasa font-bold text-black text-2xl">Amazing Europe <span class=" text-xl">“Winter
                            Series”</span></p>
                    <p class=" font-Poppins font-bold">6 Negara <span>(Italia, Swiss, Jerman, Belanda, Belgia,
                            Perancis)</span></p>
                </div>

            </div>

            <div class=" grid lg:grid-cols-4 grid-cols-2 rounded-lg pt-2 px-2">

                @foreach ($galeri as $row)
                    <div class=" p-2">
                        <a href="" class=""><img
                                class=" rounded-lg w-full h-full object-cover hover:opacity-50 transition-opacity duration-300"
                                width="100%" height="50%" src={{ asset('storage/' . $row->img) }}
                                alt="Logo UMT"></a>

                    </div>
                @endforeach



            </div>
        </div>





    </div> --}}

    
<div>

    {{-- carousel --}}
    <div id="default-carousel" class="relative mt-28 w-full p-10 pt-16" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative  overflow-hidden  pb-4 rounded-2xl" style="height: 30rem;">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/BG1.jpeg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/bgtailor.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/foto5.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/front1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute pb-10 z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-14 mt-10 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-14 mt-10 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    {{-- end carousel --}}

    <p class=" text-center font-Rasa font-bold text-3xl pt-4">Amazing Europa <span style="color: #515151">"Winter Series"</span></p>
    <p class=" text-center font-Poppins font-bold">6 NEGARA <span class=" font-medium">(Italia, Swiss, Jerman, Belanda, Belgia, Perancis)</span></p>

    <div class=" grid lg:grid-cols-4 grid-cols-2 rounded-lg pt-2 px-2">

        @foreach ($galeri as $row)
            <div class=" p-8">
                <a href="{{ asset('storage/' . $row->img) }}" data-fancybox="gallery" class=""><img
                        class=" rounded-lg w-full h-full object-cover hover:opacity-50 transition-opacity duration-300"
                        width="100%" height="50%" src={{ asset('storage/' . $row->img) }}
                        alt="Logo UMT"></a>

            </div>
            {{-- src={{ asset('storage/' . $row->img) }} --}}
        @endforeach



    </div>
</div>



    <div class=" text-end fixed lg:bottom-10 bottom-6 lg:right-10 right-6 z-50">
        <a href="" class=" rounded-full shadow-md flex" style="background-color: rgb(35, 243, 16);"><i
                class="fa-brands fa-whatsapp fa-2x "
                style="background-color: rgb(35, 243, 16); padding: 6px 14px; border-radius: 25px; "></i><span
                class="pr-3 mt-3 font-Poppins font-semibold">WhatsApp UMT</span></a>
    </div>




    {{-- footer logo --}}
    <section class=" bg-537938">
        <img class=" mx-auto p-2 w-20" src={{ asset('img/logo.png') }} alt="Logo UMT">
    </section>
    {{-- end footer logo --}}









    @vite('resources/js/app.js')

     {{-- flowbite --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

     <script>
        $(document).ready(function() {
            $("[data-fancybox]").fancybox({
                // Opsi tambahan jika diperlukan
            });
        });
    </script>
</body>

</html>
