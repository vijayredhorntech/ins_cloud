@extends('Layouts.layout')

@push('styles')
    {{--    swiffy slider script and style here--}}
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    {{--    swiffy slider script and style ends here--}}
    <style>
        .featureBoxes
        {
            width: 0px;
            transition: all 0.5s ease-in-out;
        }
        .featureBoxesDiv:hover .featureBoxes
        {
            width: 100%;
            transition: all 0.5s ease-in-out;
        }
        .movingDiv
        {
            left: 0%;
            animation: move 3s infinite alternate-reverse;
        }
        .rotatingImg
        {
            animation: rotate 3s infinite linear;

        }
        @keyframes move
        {
            0%
            {
                left: 0%;
            }

            100%
            {
                left: 100%;
            }
        }   @keyframes rotate
            {
                0%
                {
                    transform: rotate(0deg);
                }


                100%
                {
                    transform: rotate(360deg);
                }
            }


    </style>
@endpush

@section('content')

    <div class="relative">
        <div class="w-full h-[500px]">
            <img src="{{asset('assets/images/quickbooks-hosting/banner1.jpg')}}" class="w-full h-full object-cover">
        </div>

        <div class="absolute top-0 left-0 flex items-center w-full h-full z-10 bg-black/75">
            <div class="w-full">
                <div class="w-full lg:px-[250px] md:px-[150px] px-[20px] flex flex-col items-center gap-2">
                    <h1 class="text-white lg:text-[40px] md:text-[35px] sm:text-[35px] text-[25px] font-bold lg:text-left md:text-left text-center">
                        Unlock Our Trial: Discover, Experience, and Transform Your Journey!
                    </h1>
                    <p class="text-gray-100 font-normal lg:w-[600px] text-[17px]  text-center">
                        Upload your Important Data on the server
                    </p>
                    <a href="{{route('registration')}}" class="w-max px-4 py-2 mt-4 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                        GET 7 DAYS FREE TRIAL
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full py-2 bg-gray-100 ">
        <div class="lg:w-[70%] md:w-[90%] w-full  h-full mx-auto">

            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2 ">
                <div class="w-full h-max p-4 relative">
                    {{--                <img class="rotatingImg lg:h-[650px] md:h-[500px] h-[400px] w-auto object-cover absolute -top-3 lg:left-[20%] md:left-[20%] left-[10%]" src="{{asset('assets/images/home/circle.png')}}" alt="">--}}
                    {{--                <img class=" w-auto h-full object-cover " src="{{asset('assets/images/quickbooks-hosting/qb-hosting.jpg')}}" alt="">--}}


                    <div class="absolute top-0 left-0 py-12 px-2 w-full h-full z-20">
                        <img class=" w-full h-full object-cover" src="{{asset('assets/images/success-story1.jpg')}}" alt="">
                    </div>
                    <img class="rotatingImg w-auto lg:h-[600px] md:h-[600px] h-[500px] mx-auto" src="{{asset('assets/images/home/circle.png')}}" alt="">
                </div>
                <div class="w-full h-full flex flex-col items-center py-12">
                    <div>
                        <img src="{{asset('assets/images/black-logo.png')}}" alt="">
                    </div>
                    <div class="w-full flex justify-center py-2">
                         <span class="text-black font-semibold text-[25px]">Create your free trail account now</span>
                    </div>
                    <div class="w-full flex py-2">
                        <span class="text-gray-500 font-normal text-[15px]">Already Signed Up?<a href="{{route('login')}}"> Log In</a> </span>
                    </div>

                    <div class="w-full flex flex-col gap-2">
                        <div class="grid  grid-cols-1 gap-6">
                            <input type="text" placeholder="Name" class="p-3 w-full">
                            <input type="email" placeholder="Email" class="p-3 w-full">
                            <input type="number" placeholder="Phone" class="p-3 w-full">
                            <input type="text" placeholder="text" class="p-3 w-full">
                            <textarea type="text" placeholder="text" class="p-3 w-full " rows="4"></textarea>
                            <a href="" class=" w-full px-4 py-4  rounded-md text-white font-semibold flex justify-center  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                               SIGN UP
                            </a>
                            <span  class=" w-full px-4 py-2  rounded-md text-black font-semibold flex justify-center items-center gap-4   transition ease-in duration-2000">
                              OR
                            </span>

                            <a href="" class=" w-full px-4 py-2  rounded-md text-black font-semibold flex justify-center items-center gap-4  bg-gray-200  transition ease-in duration-2000">
                              <i class="fa fa-google"></i>  SIGN IN WITH GOOGLE
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
