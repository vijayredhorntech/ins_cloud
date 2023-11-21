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
                        FAQ
                    </h1>
                    <p class="text-gray-100 font-normal lg:w-[600px] text-[17px]  text-center">
                        Frequently Asked Questions
                    </p>
                    <a href="{{route('registration')}}" class="w-max px-4 py-2 mt-4 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                        GET 7 DAYS FREE TRIAL
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full py-2 ">
        <div class="lg:w-[70%] md:w-[90%] w-full  h-full mx-auto">

            <div class="w-full flex flex-col items-center gap-4 justify-center py-4 text-center">
                <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">
                    Frequently Asked Questions
                </h1>
                <div class="lg:hidden md:hidden block h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                    <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2 ">
                <div class="w-full h-max p-4 relative">
                    {{--                <img class="rotatingImg lg:h-[650px] md:h-[500px] h-[400px] w-auto object-cover absolute -top-3 lg:left-[20%] md:left-[20%] left-[10%]" src="{{asset('assets/images/home/circle.png')}}" alt="">--}}
                    {{--                <img class=" w-auto h-full object-cover " src="{{asset('assets/images/quickbooks-hosting/qb-hosting.jpg')}}" alt="">--}}


                    <div class="absolute top-0 left-0 py-12 px-2 w-full h-full z-20">
                        <img class=" w-full h-full object-cover" src="{{asset('assets/images/faq/faq.png')}}" alt="">
                    </div>
                    <img class="rotatingImg w-auto lg:h-[600px] md:h-[600px] h-[500px] mx-auto" src="{{asset('assets/images/home/circle.png')}}" alt="">
                </div>
                <div class="w-full h-full flex ">
                    <div class="text-justify p-4 flex flex-col gap-6 w-full">
                        <div class="group w-full shadow-md shadow-gray-300">
                                  <div class="w-full border-b-[1px] border-gray-300 group-hover:bg-[#ee0979] transition ease-in duration-2000 flex items-center gap-2 p-4">
                                      <i class="fa-solid fa-caret-down text-black"></i>
                                      <span class="text-black ">
                                          Which material types can you work with?
                                      </span>
                                  </div>
                               <div class="w-full hidden group-hover:flex flex items-center gap-2 p-4">
                                   <span class="text-gray-400 ">
                                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                      </span>
                               </div>
                           </div>
                        <div class="group w-full shadow-md shadow-gray-300">
                            <div class="w-full border-b-[1px] border-gray-300 group-hover:bg-[#ee0979] transition ease-in duration-2000 flex items-center gap-2 p-4">
                                <i class="fa-solid fa-caret-down text-black"></i>
                                <span class="text-black ">
                                          Which material types can you work with?
                                      </span>
                            </div>
                            <div class="w-full hidden group-hover:flex flex items-center gap-2 p-4">
                                   <span class="text-gray-400 ">
                                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                      </span>
                            </div>
                        </div>

                        <div class="group w-full shadow-md shadow-gray-300">
                            <div class="w-full border-b-[1px] border-gray-300 group-hover:bg-[#ee0979] transition ease-in duration-2000 flex items-center gap-2 p-4">
                                <i class="fa-solid fa-caret-down text-black"></i>
                                <span class="text-black ">
                                          Which material types can you work with?
                                      </span>
                            </div>
                            <div class="w-full hidden group-hover:flex flex items-center gap-2 p-4">
                                   <span class="text-gray-400 ">
                                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                      </span>
                            </div>
                        </div>

                        <div class="group w-full shadow-md shadow-gray-300">
                            <div class="w-full border-b-[1px] border-gray-300 group-hover:bg-[#ee0979] transition ease-in duration-2000 flex items-center gap-2 p-4">
                                <i class="fa-solid fa-caret-down text-black"></i>
                                <span class="text-black ">
                                          Which material types can you work with?
                                      </span>
                            </div>
                            <div class="w-full hidden group-hover:flex flex items-center gap-2 p-4">
                                   <span class="text-gray-400 ">
                                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                      </span>
                            </div>
                        </div>

                        <div class="group w-full shadow-md shadow-gray-300">
                            <div class="w-full border-b-[1px] border-gray-300 group-hover:bg-[#ee0979] transition ease-in duration-2000 flex items-center gap-2 p-4">
                                <i class="fa-solid fa-caret-down text-black"></i>
                                <span class="text-black ">
                                          Which material types can you work with?
                                      </span>
                            </div>
                            <div class="w-full hidden group-hover:flex flex items-center gap-2 p-4">
                                   <span class="text-gray-400 ">
                                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                      </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full py-12 bg-gray-100">
        <div class="w-full flex flex-col gap-4 items-center justify-center py-4 text-center">
            <h1 class="text-black font-semibold lg:text-[35px] md:text-[35px] text-[30x]">Do You Have Any Questions</h1>
            <div class="h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                </div>
            </div>
            <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-center lg:w-[600px] md:w-[600px] sm:w-full">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
        <div class="lg:w-[50%] md:w-[80%] w-full p-4 h-full mx-auto">
            <div class="w-full flex flex-col gap-2">
                <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 gap-6">
                    <input type="text" placeholder="Name" class="p-3 w-full">
                    <input type="email" placeholder="Email" class="p-3 w-full">
                    <input type="number" placeholder="Phone" class="p-3 w-full">
                    <input type="text" placeholder="text" class="p-3 w-full">
                    <textarea type="text" placeholder="text" class="p-3 w-full " rows="4"></textarea>
                </div>
                <div class="w-full mt-2">
                    <a href="" class=" w-max px-4 py-2 mt-4 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                        SEND MESSAGE
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
