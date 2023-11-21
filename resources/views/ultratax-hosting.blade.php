@extends('Layouts.layout')

@push('styles')
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
                        Ultratax Hosting
                    </h1>
                    <p class="text-gray-100 font-normal lg:w-[600px] text-[17px]  text-center">
                        Simplify your financial management with Sage hosting: Access from anywhere, anytime, ensuring seamless finances and peace of mind
                    </p>
                    <a href="{{route('registration')}}" class="w-max px-4 py-2 mt-4 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                        GET 7 DAYS FREE TRIAL
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full py-2 ">
        <div class="lg:w-[70%] md:w-[90%] w-full h-full mx-auto">
            <div class="w-full flex flex-col items-center gap-4 justify-center py-4 text-center">
                <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">
                    Ultra Tax Hosting - A Completes Solution for Every Taxation
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
                        <img class=" w-full h-full " src="{{asset('assets/images/services/ultra-tax.jpg')}}" alt="">
                    </div>
                    <img class="rotatingImg w-auto lg:h-[600px] md:h-[600px] h-[500px] mx-auto" src="{{asset('assets/images/home/circle.png')}}" alt="">
                </div>
                <div class="w-full h-full flex">
                    <div class=" text-justify p-4">
                        <div class=" lg:block md:block hidden h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                            <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                            </div>
                        </div>

                        <p class="text-gray-500 text-[16px] font-[400] mt-8 leading-8">
                            UltraTax CS software provides an extensive range of utilities for federal, state and local tax calibration that covers a diverse number of organization, trusts, big and small enterprise. Besides working as a straightforward tax preparation tool, UltraTaxhosting software offers remarkable error detection, and rectification thus helps the tax fillers with unmatched accuracy in their return filling process. The features of UltraTax hosting softwaredo not end here as users have umpteen functionalities that reduce the possibility of IRS rejection and save precious time in cross-checking every entry. Hosting your UltraTax CS software with WinsCloudMatrix cloud computing platform add extra benefits to it. We have helped a vast number of accounting professional with our fast and efficient UltraTax hosting services. With our systems, your whole team can collaborate on centralized servers, which improve tax estimation and allow filling quick return. Our team of UltraTax hosting software expertsare always there to help with any technical query or for any support via various means.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full py-12 bg-gray-100">
        <div class="w-full flex flex-col gap-4 items-center justify-center py-4 text-center">
            <h1 class="text-black font-semibold lg:text-[35px] md:text-[35px] text-[30x]">Unique Benefits of WinsCloud Ultra Tax Hosting</h1>
            <div class="h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                </div>
            </div>
            <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-center lg:w-[600px] md:w-[600px] sm:w-full">
                Ultratax hosting: Simplify finances, access anywhere, anytime, for peace of mind
            </p>
        </div>
        <div class="lg:w-[70%] md:w-[90%] w-full p-4 h-full mx-auto">
            <div class="  w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 ">

                <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                    <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                        <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#fadae7] ">
                            <i class="fa fa-check text-[#ee0979] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                        </div>

                        <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                            Expert Support
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            With trained professional Lacerte cloud hosting we are 24 x 7 available at your services.
                        </p>

                    </div>







                    <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                    </div>
                </div>
                <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                    <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                        <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#fddcef] ">
                            <i class="fa fa-check text-[#f78acb] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                        </div>

                        <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                            Multiple User Access
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            We assure that your clients and employees can collaborate on the same platform with as many numbers of user access.
                        </p>

                    </div>







                    <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                    </div>
                </div>
                <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                    <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                        <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#cdf1d8] ">
                            <i class="fa fa-check text-[#44ce6f] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                        </div>

                        <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                            Cross-Device Functionality
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            The software is compatible with multiple devices including laptop, smartphones, etc. so the user can access it by any device.
                        </p>

                    </div>







                    <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                    </div>
                </div>

                <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                    <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                        <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#edc3fc] ">
                            <i class="fa fa-check text-[#c679e3] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                        </div>

                        <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                            99.99% uptime
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            With regularly available servers, you can work on your finances without any service breakdown.
                        </p>

                    </div>







                    <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                    </div>
                </div>
                <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                    <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                        <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#f9d2c4] ">
                            <i class="fa fa-check text-[#eb6b3d] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                        </div>

                        <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                            Secure Data Backup
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            We ensure you about secured data backup within 30 days in case of any loss, of data corruption
                        </p>

                    </div>







                    <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                    </div>
                </div>
                <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                    <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                        <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#fadada] ">
                            <i class="fa fa-check text-[#ee0979] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                        </div>

                        <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                            Backup & Recovery
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            We have automated data backup and recovery option to prevent any accidental data loss and for deleted files.
                        </p>

                    </div>







                    <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                    </div>
                </div>

            </div>
        </div>




    </div>


    <div class="w-full py-2">
        <div class="w-full flex flex-col gap-4 items-center justify-center py-4 text-center">
            <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">Our trusted partner</h1>
            <div class="h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                </div>
            </div>
            <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-center lg:w-[600px] md:w-[600px] sm:w-full">
                More than just a provider, they are our trusted partner in achieving our goals and surpassing our expectations.
            </p>
        </div>
        <div class="lg:w-[70%] md:w-[90%] w-full p-4 h-full mx-auto">
            <div class="  w-full grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2  gap-6 ">
                <div class="w-full h-[100px] p-4 bg-gray-100 overflow-hidden rounded-md group ">
                    <img class="w-full h-full  rounded-md group-hover:scale-110" src="{{asset('assets/images/home/partner1.png')}}" alt="">
                </div>
                <div class="w-full h-[100px] p-4 bg-gray-100 overflow-hidden rounded-md group ">
                    <img class="w-full h-full  rounded-md group-hover:scale-110" src="{{asset('assets/images/home/partner2.png')}}" alt="">
                </div>
                <div class="w-full h-[100px] p-4 bg-gray-100 overflow-hidden rounded-md group ">
                    <img class="w-full h-full  rounded-md group-hover:scale-110" src="{{asset('assets/images/home/partner3.png')}}" alt="">
                </div>
                <div class="w-full h-[100px] p-4 bg-gray-100 overflow-hidden rounded-md group ">
                    <img class="w-full h-full  rounded-md group-hover:scale-110" src="{{asset('assets/images/home/partner4.png')}}" alt="">
                </div>
                <div class="w-full h-[100px] p-4 bg-gray-100 overflow-hidden rounded-md group ">
                    <img class="w-full h-full  rounded-md group-hover:scale-110" src="{{asset('assets/images/home/partner5.png')}}" alt="">
                </div>
                <div class="w-full h-[100px] p-4 bg-gray-100 overflow-hidden rounded-md group ">
                    <img class="w-full h-full  rounded-md group-hover:scale-110" src="{{asset('assets/images/home/partner6.png')}}" alt="">
                </div>
                <div class="w-full h-[100px] p-4 bg-gray-100 overflow-hidden rounded-md group ">
                    <img class="w-full h-full  rounded-md group-hover:scale-110" src="{{asset('assets/images/home/partner7.png')}}" alt="">
                </div>
                <div class="w-full h-[100px] p-4 bg-gray-100 overflow-hidden rounded-md group ">
                    <img class="w-full h-full  rounded-md group-hover:scale-110" src="{{asset('assets/images/home/partner8.png')}}" alt="">
                </div>
                <div class="w-full h-[100px] p-4 bg-gray-100 overflow-hidden rounded-md group ">
                    <img class="w-full h-full  rounded-md group-hover:scale-110" src="{{asset('assets/images/home/partner9.png')}}" alt="">
                </div>
                <div class="w-full h-[100px] p-4 bg-gray-100 overflow-hidden rounded-md group ">
                    <img class="w-full h-full  rounded-md group-hover:scale-110" src="{{asset('assets/images/home/partner7.png')}}" alt="">
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
