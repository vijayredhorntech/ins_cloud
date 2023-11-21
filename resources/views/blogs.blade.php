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
            <img src="{{asset('assets/images/aboutUs/page-title-bg2.jpg')}}" class="w-full h-full object-cover">
        </div>

        <div class="absolute top-0 left-0 flex items-center w-full h-full z-10 bg-black/75">
            <div class="w-full">
                <div class="w-full lg:px-[250px] md:px-[150px] px-[20px] flex flex-col items-center gap-2">
                    <h1 class="text-white lg:text-[40px] md:text-[35px] sm:text-[35px] text-[25px] font-bold lg:text-left md:text-left text-center">
                        Blog
                    </h1>
                    <p class="text-gray-100 font-normal lg:w-[600px] text-[17px]  text-center">
                        Our latest news
                    </p>
                    <a href="{{route('registration')}}" class="w-max px-4 py-2 mt-4 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                        GET 7 DAYS FREE TRIAL
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full ">
        <div class="w-full flex lg:flex-row md:flex-row flex-col relative gap-2 justify-evenly items-center bg-gradient-to-r from-[#ee0979] to-[#ff6a00] px-2 py-12">
            <div class="h-max w-max flex flex-col items-start ">
                <h1 class="text-white font-semibold lg:text-[40px] md:text-[40px] text-[20px]">Apply for an account in minutes</h1>
                <p class="text-gray-100 text-[16px] font-[400] mt-2 leading-8 text-start lg:w-[600px] md:w-[600px] sm:w-full">
                    Get your Demo account today!
                </p>
            </div>
            <a href="{{route('registration')}}" class="w-max h-max px-4 py-2 rounded-md text-white font-semibold  bg-gradient-to-r from-[#23bdb8] to-[#43e794]  transition ease-in duration-2000">
                7 DAY FREE TRIAL
            </a>
            <img src="" alt="">

        </div>
    </div>
    </div>
@endsection
