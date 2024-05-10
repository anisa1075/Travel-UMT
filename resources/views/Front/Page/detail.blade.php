<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Itinerary</title>

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body>

    <div class=" justify-center text-center bg-white">
        <h1 class=" font-Poppins text-3xl py-8" style="font-weight: 900;"><strong>DETAIL</strong></h1>
        <p class=" font-Poppins font-bold">Berikut file itinerary terlengkap yang bisa di download:</p>

        
            
        
        <a href="{{ route('download', $itinerary->link) }}">
            <p class=" font-Poppins font-semibold text-white bg-395723 lg:mx-96 m-4 p-3 rounded-xl hover:bg-537938 " title="Download File Itinerary Pdf">
                Download File Itenary</p>
        </a>

        <p class=" font-Poppins font-bold pt-6">{{ $itinerary->negara }}</p>
        <p class=" font-Poppins font-bold p-2">Keberangkatan : {{ $itinerary->tgl_berangkat }}</p>


    </div>

    <div>
        <div class=" font-Poppins p-10">
            <h1 class=" font-bold">ITINERARY</h1>
            <p class=" font-normal mt-2">{!! $itinerary->itinerary !!}</p>
        </div>

        

        <section class=" px-6">
            <div class=" flex lg:p-3 my-1 justify-between" style="">
                <a href="{{ route('front.open.trip') }}"><p class=" font-Poppins text-white bg-537938 hover:bg-395723 rounded-xl px-4 py-3"><i class="fa-solid fa-arrow-left"></i> Kembali</p></a>
                
                <div class=" font-Poppins text-white bg-395723 hover:bg-537938 rounded-xl px-10 py-2 flex gap-4">
                    <a href=""><i class="fa-brands fa-whatsapp fa-2x"></i> </a>
                    <a href=""><p class=" my-1">Booking</p></a>
                </div>
               

               
            </div>
    
        </section>
    </div>
   

    

    @vite('resources/js/app.js')
     {{-- flowbite --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
