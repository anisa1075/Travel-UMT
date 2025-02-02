<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hubungi Kami</title>

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

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
                    <p class=" bg-e2f0d9 text-537938 font-bold px-2 py-2 mr-14 font-Poppins" style="border-radius: 10px; font-size:16px;">
                        {{ Auth::user()->name }}<a href="" onclick="confirmLogout(event)" title="Logout"
                            class=" bg-e2f0d9 text-537938 px-3 py-2 mr-6 lg:mr-0" style="border-radius: 10px;"><i
                                class="fa-solid fa-right-from-bracket" style="color: black;"></i></a></p>


                @endguest
            </div>


        </div>
    </header>

    
    <section class=" pt-36 pb-20 container mx-auto bg-395723" id="contact">
        <h1 class=" font-Poppins text-center justify-center text-white font-bold text-2xl"
            style="letter-spacing: 3px;">HUBUNGI KAMI</h1>

        <div class=" grid lg:grid-cols-2 grid-cols-1 mt-16 lg:px-14">
            <div>
                <div class=" flex mx-auto ml-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" items-center w-36" width="100" height="50"
                        viewBox="0 0 50 50" fill="none">
                        <g clip-path="url(#clip0_575_55)">
                            <path
                                d="M48.4176 45.255L45.0001 35H41.2501L43.3326 45H6.66759L8.75009 35H5.00009L1.58009 45.255C0.712587 47.865 2.25009 50 5.00009 50H45.0001C47.7501 50 49.2876 47.865 48.4176 45.255ZM37.5001 12.5C37.5001 9.18479 36.1831 6.00537 33.8389 3.66117C31.4947 1.31696 28.3153 0 25.0001 0C21.6849 0 18.5055 1.31696 16.1613 3.66117C13.817 6.00537 12.5001 9.18479 12.5001 12.5C12.5001 24.4375 25.0001 37.5 25.0001 37.5C25.0001 37.5 37.5001 24.4375 37.5001 12.5ZM18.2501 12.65C18.2501 11.7637 18.4247 10.8861 18.764 10.0673C19.1032 9.24846 19.6004 8.50451 20.2273 7.87791C20.8541 7.25132 21.5982 6.75435 22.4172 6.41541C23.2361 6.07646 24.1138 5.90217 25.0001 5.9025C26.79 5.9025 28.5065 6.61353 29.7722 7.87916C31.0378 9.1448 31.7488 10.8614 31.7488 12.6513C31.7488 14.4411 31.0378 16.1577 29.7722 17.4233C28.5065 18.689 26.79 19.4 25.0001 19.4C23.2099 19.4 21.493 18.6888 20.2271 17.423C18.9612 16.1571 18.2501 14.4402 18.2501 12.65Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_575_55">
                                <rect width="50" height="50" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <p class=" font-Poppins text-white font-bold px-7 text-base" style="letter-spacing: 2px;">Ruko
                        Cibubur
                        Indah Blok F3 Lt 3, Jl. Raya Lap. Tembak – Cibubur
                        RT.2/RW.11, Cibubur, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13720
                        INDONESIA.</p>
                </div>


                <div class=" flex mx-auto ml-10 mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M33.4419 3.7229L35.4544 4.26665C37.9155 4.93265 40.1591 6.23227 41.9612 8.03589C43.7634 9.83952 45.0612 12.0841 45.7252 14.5458L46.2669 16.5562L42.246 17.6417L41.7023 15.6312C41.2278 13.8728 40.3006 12.2696 39.0131 10.9814C37.7256 9.69318 36.1229 8.76505 34.3648 8.28957L32.3544 7.74373L33.4419 3.7229ZM2.08355 4.16665H19.9585L23.0565 18.1041L19.1815 21.9792C21.4588 25.5259 24.4738 28.5401 28.021 30.8167L31.896 26.9437L45.8335 30.0417V47.9166H43.7502C35.7302 47.9291 27.8786 45.6163 21.146 41.2583C16.182 38.0456 11.9546 33.8182 8.74188 28.8542C4.38396 22.1215 2.07118 14.2699 2.08355 6.24998V4.16665ZM6.30646 8.33332C6.65695 14.8332 8.70328 21.1281 12.2419 26.5917C15.1343 31.0602 18.94 34.8659 23.4085 37.7583C28.872 41.2971 35.1669 43.3434 41.6669 43.6937V33.3833L33.2231 31.5083L28.694 36.0396L27.3127 35.2542C22.0684 32.2736 17.7266 27.9318 14.746 22.6875L13.9606 21.3062L18.4919 16.7771L16.6169 8.33332H6.30646ZM31.5377 10.7604L33.5502 11.3042C34.7808 11.6371 35.9026 12.287 36.8036 13.1888C37.7047 14.0906 38.3536 15.2129 38.6856 16.4437L39.2273 18.4542L35.2065 19.5396L34.6627 17.5292C34.5202 17.0016 34.2419 16.5207 33.8555 16.1343C33.4691 15.7479 32.9882 15.4695 32.4606 15.3271L30.4502 14.7833L31.5377 10.7604Z"
                            fill="white" />
                    </svg>

                    <p class=" font-Poppins text-white font-bold px-7 text-base" style="letter-spacing: 2px;">(021)
                        22821628 (Office) <br>
                        +62 877-8629-4612(Admin)</p>

                </div>



            </div>

            <div class=" lg:w-44">
                <iframe class="lg:w-30 h-20 p-6 lg:p-0 lg:pl-16 pl-12"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3274498717565!2d106.87854107364049!3d-6.351635762137065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed57ac777673%3A0x1f8a1c3d5b2d2f13!2sRUKO%20CIBUBUR%20INDAH%20BLOK%20F%2F4!5e0!3m2!1sid!2sid!4v1706068161045!5m2!1sid!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="mx-auto ml-10 mt-4">


                <p class=" text-white font-bold px-7 text-base font-Inter" style="letter-spacing: 2px;">Media Sosial
                </p>

                <div class=" flex ml-8">

                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class=" m-2" width="40"
                            height="45" viewBox="0 0 45 45" fill="none">
                            <g clip-path="url(#clip0_575_63)">
                                <path
                                    d="M0.961321 22.2308C0.960267 26.0117 1.95585 29.7034 3.84895 32.9574L0.780273 44.0752L12.2464 41.0919C15.4178 42.8051 18.9711 43.7027 22.5819 43.703H22.5914C34.5116 43.703 44.2149 34.078 44.22 22.2477C44.2223 16.5151 41.9745 11.1245 37.8905 7.06894C33.8073 3.0137 28.3767 0.779228 22.5906 0.776611C10.669 0.776611 0.966419 10.401 0.961497 22.2308"
                                    fill="url(#paint0_linear_575_63)" />
                                <path
                                    d="M0.189055 22.2237C0.187825 26.1406 1.21909 29.9644 3.17968 33.3349L0.000976562 44.8512L11.8782 41.7611C15.1508 43.5316 18.8354 44.4651 22.5847 44.4665H22.5943C34.9422 44.4665 44.994 34.4953 44.9993 22.2415C45.0014 16.3029 42.6727 10.7185 38.4429 6.51768C34.2125 2.31733 28.5877 0.00244186 22.5943 0C10.2444 0 0.193977 9.96977 0.189055 22.2237ZM7.26223 32.7544L6.81875 32.0559C4.95448 29.1145 3.97049 25.7154 3.9719 22.2251C3.97594 12.0399 12.3295 3.75349 22.6014 3.75349C27.5758 3.75558 32.2507 5.67977 35.7669 9.17093C39.2829 12.6624 41.2177 17.3037 41.2164 22.2401C41.2119 32.4253 32.8582 40.7128 22.5943 40.7128H22.587C19.245 40.7111 15.9673 39.8205 13.1088 38.1375L12.4286 37.7372L5.38038 39.5709L7.26223 32.7542V32.7544Z"
                                    fill="url(#paint1_linear_575_63)" />
                                <path
                                    d="M16.9942 12.9327C16.5748 12.0078 16.1334 11.9891 15.7346 11.9729C15.408 11.9589 15.0347 11.96 14.6617 11.96C14.2883 11.96 13.6817 12.0993 13.169 12.6549C12.6557 13.2109 11.2095 14.5546 11.2095 17.2876C11.2095 20.0207 13.2156 22.662 13.4952 23.0329C13.7753 23.4032 17.3681 29.1911 23.0583 31.4178C27.7873 33.2682 28.7497 32.9002 29.776 32.8074C30.8025 32.7149 33.0883 31.464 33.5546 30.1668C34.0213 28.8699 34.0213 27.7581 33.8814 27.5258C33.7415 27.2943 33.3681 27.1553 32.8083 26.8777C32.2483 26.5998 29.496 25.2559 28.9829 25.0705C28.4697 24.8853 28.0965 24.7928 27.7231 25.349C27.3498 25.9044 26.2777 27.1553 25.951 27.5258C25.6246 27.8971 25.2978 27.9434 24.7381 27.6655C24.1779 27.3868 22.375 26.8009 20.236 24.9086C18.5718 23.4362 17.4482 21.6179 17.1217 21.0617C16.7951 20.5063 17.0867 20.2053 17.3674 19.9285C17.6189 19.6796 17.9274 19.2798 18.2076 18.9556C18.4867 18.6311 18.5799 18.3997 18.7665 18.0292C18.9534 17.6584 18.8599 17.334 18.7201 17.0561C18.5799 16.7783 17.492 14.031 16.9942 12.9327Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_575_63" x1="2172.77" y1="4330.63"
                                    x2="2172.77" y2="0.776611" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1FAF38" />
                                    <stop offset="1" stop-color="#60D669" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_575_63" x1="2249.92" y1="4485.12"
                                    x2="2249.92" y2="0" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F9F9F9" />
                                    <stop offset="1" stop-color="white" />
                                </linearGradient>
                                <clipPath id="clip0_575_63">
                                    <rect width="45" height="45" fill="white" />
                                </clipPath>
                            </defs>
                        </svg></a>


                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class=" m-2" width="40"
                            height="45" viewBox="0 0 45 45" fill="none">
                            <g clip-path="url(#clip0_575_67)">
                                <path
                                    d="M34.4531 0H10.5469C4.722 0 0 4.722 0 10.5469V34.4531C0 40.278 4.722 45 10.5469 45H34.4531C40.278 45 45 40.278 45 34.4531V10.5469C45 4.722 40.278 0 34.4531 0Z"
                                    fill="url(#paint0_radial_575_67)" />
                                <path
                                    d="M34.4531 0H10.5469C4.722 0 0 4.722 0 10.5469V34.4531C0 40.278 4.722 45 10.5469 45H34.4531C40.278 45 45 40.278 45 34.4531V10.5469C45 4.722 40.278 0 34.4531 0Z"
                                    fill="url(#paint1_radial_575_67)" />
                                <path
                                    d="M22.5016 4.92188C17.7277 4.92188 17.1285 4.94279 15.2536 5.02805C13.3822 5.11383 12.1048 5.41002 10.9872 5.84473C9.83092 6.29367 8.85023 6.89432 7.87324 7.87166C6.89537 8.84883 6.29473 9.82951 5.84438 10.9853C5.40844 12.1032 5.11189 13.3812 5.0277 15.2517C4.94385 17.1267 4.92188 17.7261 4.92188 22.5002C4.92188 27.2742 4.94297 27.8715 5.02805 29.7464C5.11418 31.6178 5.41037 32.8952 5.84473 34.0128C6.29402 35.1691 6.89467 36.1498 7.87201 37.1268C8.84883 38.1046 9.82951 38.7067 10.9849 39.1556C12.1034 39.5903 13.381 39.8865 15.252 39.9723C17.1271 40.0576 17.7258 40.0785 22.4995 40.0785C27.2739 40.0785 27.8712 40.0576 29.7461 39.9723C31.6174 39.8865 32.8962 39.5903 34.0147 39.1556C35.1705 38.7067 36.1498 38.1046 37.1264 37.1268C38.1043 36.1498 38.7047 35.1691 39.1553 34.0133C39.5873 32.8952 39.8841 31.6174 39.972 29.7468C40.0562 27.8719 40.0781 27.2742 40.0781 22.5002C40.0781 17.7261 40.0562 17.1271 39.972 15.252C39.8841 13.3806 39.5873 12.1034 39.1553 10.9858C38.7047 9.82951 38.1043 8.84883 37.1264 7.87166C36.1487 6.89396 35.1708 6.29332 34.0137 5.8449C32.8931 5.41002 31.615 5.11365 29.7436 5.02805C27.8685 4.94279 27.2716 4.92188 22.4961 4.92188H22.5016ZM20.9246 8.08963C21.3928 8.08893 21.915 8.08963 22.5016 8.08963C27.1951 8.08963 27.7513 8.1065 29.6047 8.1907C31.3186 8.2691 32.2488 8.55545 32.8685 8.79609C33.6888 9.11461 34.2737 9.49553 34.8885 10.1109C35.5038 10.7262 35.8845 11.3121 36.2039 12.1324C36.4446 12.7512 36.7313 13.6814 36.8093 15.3953C36.8935 17.2484 36.9118 17.8049 36.9118 22.4961C36.9118 27.1874 36.8935 27.7441 36.8093 29.597C36.7309 31.3109 36.4446 32.2411 36.2039 32.86C35.8854 33.6804 35.5038 34.2645 34.8885 34.8794C34.2733 35.4946 33.6892 35.8754 32.8685 36.1941C32.2495 36.4358 31.3186 36.7214 29.6047 36.7998C27.7516 36.884 27.1951 36.9023 22.5016 36.9023C17.8079 36.9023 17.2515 36.884 15.3986 36.7998C13.6847 36.7207 12.7545 36.4344 12.1344 36.1937C11.3142 35.875 10.7281 35.4943 10.1129 34.879C9.49764 34.2638 9.11689 33.6793 8.7975 32.8586C8.55686 32.2397 8.27016 31.3095 8.19211 29.5956C8.10791 27.7425 8.09104 27.186 8.09104 22.4917C8.09104 17.7977 8.10791 17.244 8.19211 15.3909C8.27051 13.677 8.55686 12.7468 8.7975 12.1271C9.11619 11.3068 9.49764 10.7209 10.113 10.1057C10.7283 9.49043 11.3142 9.10951 12.1345 8.79029C12.7542 8.54859 13.6847 8.26295 15.3986 8.1842C17.0202 8.1109 17.6486 8.08893 20.9246 8.08523V8.08963ZM31.8848 11.0083C30.7202 11.0083 29.7754 11.9522 29.7754 13.117C29.7754 14.2815 30.7202 15.2263 31.8848 15.2263C33.0493 15.2263 33.9942 14.2815 33.9942 13.117C33.9942 11.9524 33.0493 11.0076 31.8848 11.0076V11.0083ZM22.5016 13.4729C17.5164 13.4729 13.4745 17.5148 13.4745 22.5002C13.4745 27.4855 17.5164 31.5255 22.5016 31.5255C27.4869 31.5255 31.5274 27.4855 31.5274 22.5002C31.5274 17.515 27.4866 13.4729 22.5012 13.4729H22.5016ZM22.5016 16.6407C25.7375 16.6407 28.3611 19.2639 28.3611 22.5002C28.3611 25.7361 25.7375 28.3597 22.5016 28.3597C19.2654 28.3597 16.6423 25.7361 16.6423 22.5002C16.6423 19.2639 19.2654 16.6407 22.5016 16.6407Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <radialGradient id="paint0_radial_575_67" cx="0" cy="0" r="1"
                                    gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(11.9531 48.4659) rotate(-90) scale(44.5983 41.48)">
                                    <stop stop-color="#FFDD55" />
                                    <stop offset="0.1" stop-color="#FFDD55" />
                                    <stop offset="0.5" stop-color="#FF543E" />
                                    <stop offset="1" stop-color="#C837AB" />
                                </radialGradient>
                                <radialGradient id="paint1_radial_575_67" cx="0" cy="0" r="1"
                                    gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(-7.53768 3.24158) rotate(78.681) scale(19.9357 82.1756)">
                                    <stop stop-color="#3771C8" />
                                    <stop offset="0.128" stop-color="#3771C8" />
                                    <stop offset="1" stop-color="#6600FF" stop-opacity="0" />
                                </radialGradient>
                                <clipPath id="clip0_575_67">
                                    <rect width="45" height="45" fill="white" />
                                </clipPath>
                            </defs>
                        </svg></a>


                </div>

            </div>
        </div>
    </section>


    <div class=" text-end fixed lg:bottom-10 bottom-6 lg:right-10 right-6 z-50">
        <a href="" class=" rounded-full shadow-md flex" style="background-color: rgb(35, 243, 16);"><i
                class="fa-brands fa-whatsapp fa-2x "
                style="background-color: rgb(35, 243, 16); padding: 6px 14px; border-radius: 25px; "></i><span
                class="pr-3 mt-3 font-Poppins font-semibold">WhatsApp UMT</span></a>
    </div>




    {{-- footer logo --}}
    <section class="">
        <img class=" mx-auto p-2 w-20" src={{ asset('img/logo.png') }} alt="Logo UMT">
    </section>
    {{-- end footer logo --}}









    @vite('resources/js/app.js')
     {{-- flowbite --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
