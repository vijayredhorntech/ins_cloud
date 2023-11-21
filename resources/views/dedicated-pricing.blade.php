@extends('Layouts.layout')

@push('styles')
    <style>
        .featureBoxes {
            width: 0px;
            transition: all 0.5s ease-in-out;
        }

        .featureBoxesDiv:hover .featureBoxes {
            width: 100%;
            transition: all 0.5s ease-in-out;
        }

        .movingDiv {
            left: 0%;
            animation: move 3s infinite alternate-reverse;
        }

        .rotatingImg {
            animation: rotate 3s infinite linear;

        }

        @keyframes move {
            0% {
                left: 0%;
            }

            100% {
                left: 100%;
            }
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }


            100% {
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
                        Transparent Pricing
                    </h1>
                    <p class="text-gray-100 font-normal lg:w-[600px] text-[17px]  text-center">
                        The Borderless account pricing depends on your country, but typically includes low fees for international transactions and currency conversion.
                    </p>
                    <a href="{{route('registration')}}"
                       class="w-max px-4 py-2 mt-4 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                        GET 7 DAYS FREE TRIAL
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="w-full py-6 bg-gray-100">
        <div class="lg:w-[70%] md:w-[90%] w-full p-4 h-full mx-auto">
            <div class="flex gap-2 py-6 border-b-[1px] border-gray-300">
                <a href="{{route('pricing')}}"
                   class="w-max px-4 py-2 mt-4 rounded-md text-white font-semibold  bg-black  transition ease-in duration-2000">
                         SHARED HOSTING PLANS
                </a>
                <a href="{{route('dedicated-pricing')}}"
                   class="w-max px-4 py-2 mt-4 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                       DESICATED HOSTING PLANS
                </a>

            </div>


            <div class="w-full ">
                <div>
                    <button class="w-full p-4 mt-4 rounded-md text-white font-semibold  bg-black transition ease-in duration-2000 text-[40px]">
                        Dedicated Hosting Plans
                    </button>
                </div>


                <div class="w-full grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-2 gap-4 mt-6">
                    <div class="w-full group shadow-lg shadow-gray-200">
                        <div class="w-full py-8 flex flex-col items-center bg-[#878787] group-hover:bg-[#ff4933]">
                            <h1 class="text-white text-[25px] font-semibold">Basic</h1>
                            <h1 class="text-white text-[14px] font-normal">Get your business up and running</h1>
                        </div>


                        <div class="w-full py-6 flex items-center  gap-2 justify-center border-b-[1px] border-gray-300">
                            <span class="text-gray-500 text-[18px] font-normal">$</span>
                            <span class="text-black text-[40px] font-semibold">29</span>
                            <span class="text-gray-500 text-[18px] font-normal">/ monthly</span>
                        </div>


                        <div class="w-full py-6  border-b-[1px] border-gray-300">
                            <ul class="flex flex-col">
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">6GB Disk Space</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">For Number of User[1-5]</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>

                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Free Set-Up</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Free Anit-Virus</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">MS-Excel</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">MS-Word</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Dual Monitor</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Data Migration</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Printing Solution</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Daily Data Backup</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                            </ul>
                        </div>

                        <div class="w-full py-4 flex items-center  gap-2 justify-center ">
                            <a href="{{route('registration')}}"
                               class="w-max px-4 px-2 py-2 mt-4 rounded-full text-white font-semibold  bg-[#878787] group-hover:bg-[#ff4933]">
                                Choose This Plan
                            </a>
                        </div>
                    </div>
                    <div class="w-full group shadow-lg shadow-gray-200">
                        <div class="w-full py-8 flex flex-col items-center bg-[#ff4933]">
                            <h1 class="text-white text-[25px] font-semibold">Standard</h1>
                            <h1 class="text-white text-[14px] font-normal">Get your business up and running</h1>
                        </div>


                        <div class="w-full py-6 flex items-center  gap-2 justify-center border-b-[1px] border-gray-300">
                            <span class="text-gray-500 text-[18px] font-normal">$</span>
                            <span class="text-black text-[40px] font-semibold">27</span>
                            <span class="text-gray-500 text-[18px] font-normal">/ monthly</span>
                        </div>


                        <div class="w-full py-6  border-b-[1px] border-gray-300">
                            <ul class="flex flex-col">
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">6GB Disk Space</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">For Number of User[1-5]</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>

                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Free Set-Up</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Free Anit-Virus</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">MS-Excel</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">MS-Word</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Dual Monitor</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Data Migration</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Printing Solution</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Daily Data Backup</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                            </ul>
                        </div>

                        <div class="w-full py-4 flex items-center  gap-2 justify-center ">
                            <a href="{{route('registration')}}"
                               class="w-max px-4 px-2 py-2 mt-4 rounded-full text-white font-semibold bg-[#ff4933]">
                                Choose This Plan
                            </a>
                        </div>
                    </div>
                    <div class="w-full group shadow-lg shadow-gray-200">
                        <div class="w-full py-8 flex flex-col items-center bg-[#878787] group-hover:bg-[#ff4933]">
                            <h1 class="text-white text-[25px] font-semibold">Enterprise</h1>
                            <h1 class="text-white text-[14px] font-normal">Get your business up and running</h1>
                        </div>


                        <div class="w-full py-6 flex items-center  gap-2 justify-center border-b-[1px] border-gray-300">
                            <span class="text-gray-500 text-[18px] font-normal">$</span>
                            <span class="text-black text-[40px] font-semibold">25</span>
                            <span class="text-gray-500 text-[18px] font-normal">/ monthly</span>
                        </div>


                        <div class="w-full py-6  border-b-[1px] border-gray-300">
                            <ul class="flex flex-col">
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">6GB Disk Space</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">For Number of User[1-5]</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>

                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Free Set-Up</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Free Anit-Virus</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">MS-Excel</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">MS-Word</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Dual Monitor</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Data Migration</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Printing Solution</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Daily Data Backup</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                            </ul>
                        </div>

                        <div class="w-full py-4 flex items-center  gap-2 justify-center ">
                            <a href="{{route('registration')}}"
                               class="w-max px-4 px-2 py-2 mt-4 rounded-full text-white font-semibold  bg-[#878787] group-hover:bg-[#ff4933]">
                                Choose This Plan
                            </a>
                        </div>
                    </div>
                    <div class="w-full group shadow-lg shadow-gray-200">
                        <div class="w-full py-8 flex flex-col items-center bg-[#878787] group-hover:bg-[#ff4933]">
                            <h1 class="text-white text-[25px] font-semibold">Corporate</h1>
                            <h1 class="text-white text-[14px] font-normal">Get your business up and running</h1>
                        </div>


                        <div class="w-full py-6 flex items-center  gap-2 justify-center border-b-[1px] border-gray-300">
                            <span class="text-gray-500 text-[18px] font-normal">$</span>
                            <span class="text-black text-[40px] font-semibold">23</span>
                            <span class="text-gray-500 text-[18px] font-normal">/ monthly</span>
                        </div>


                        <div class="w-full py-6  border-b-[1px] border-gray-300">
                            <ul class="flex flex-col">
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">6GB Disk Space</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">For Number of User[1-5]</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>

                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Free Set-Up</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Free Anit-Virus</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">MS-Excel</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">MS-Word</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Dual Monitor</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Data Migration</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Printing Solution</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                                <li class="py-2 flex justify-between px-4 items-center">
                                    <span class="font-[500] text-gray-500">Daily Data Backup</span>
                                    <i class="fa fa-check text-[#ff4933]"></i>
                                </li>
                            </ul>
                        </div>

                        <div class="w-full py-4 flex items-center  gap-2 justify-center ">
                            <a href="{{route('registration')}}"
                               class="w-max px-4 px-2 py-2 mt-4 rounded-full text-white font-semibold  bg-[#878787] group-hover:bg-[#ff4933]">
                                Choose This Plan
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>


@endsection
