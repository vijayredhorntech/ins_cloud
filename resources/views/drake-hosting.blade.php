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
                        Drake Hosting
                    </h1>
                    <p class="text-gray-100 font-normal lg:w-[600px] text-[17px]  text-center">
                        Simplify your financial management with Cloud Server hosting: Access from anywhere, anytime, ensuring seamless finances and peace of mind
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
                    Stay Smart With Drake Hosting By Winscloud Matrix LLC
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
                        <img class=" w-full h-full object-cover" src="{{asset('assets/images/services/feature6.jpg')}}" alt="">
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
                            Drake hosting provide the end user with a highly reliable to manage the taxes. The best thing about Drake Hosting platform is infinite e-filling, this feature is available in all the pries models without buying any extra module. The Drake Hosting software also allows the professional to review their previous return and compare them as per the year. Apart from this, some of the best intrinsic features of Drake Hosting software are write-ups, payroll and practice management which makes this cloud-hosted software, a powerful tool for CAs and CPAs and other tax and accounting professional. Winscloud’s cloud hosted Drake Software is the best solution for every accounting professional. With our secure and efficient services, we offer the highest benefits with our Drake Hosting services in the most competitive prices. With multiple data servers, our servers are always updated with the fastest backup of your organization information
                        </p>
                        <p class="text-gray-500 text-[16px] font-[400] mt-8 leading-8">
                            Wins help with cloud hosting solutions for applications by providing a way to manage and deploy applications in a cloud-based environment. Wins also help with cost savings by allowing users to pay only for the resources they use.Public clouds are easily scaled to meet changing needs, and WinClouds' pay-as-you-go pricing models of cloud hosting solutions can help save money. In addition, public clouds can offer several advantages in terms of security and compliance
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-col items-center gap-4 justify-center py-4 text-center"    >
                <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">
                    Incredible Features Drake Hosting Of Winscloud
                </h1>
                <div class="lg:hidden md:hidden block h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                    <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2 ">
                <div class="w-full h-full flex">
                    <div class=" text-justify p-4">
                        <div class=" lg:block md:block hidden h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                            <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-6 mt-6">
                            <div class="w-full flex gap-2 group bg-white rounded-md p-3 relative featureBoxesDiv shadow-lg shadow-gray-200">
                                <div class="flex gap-2 w-full z-20 ">
                                    <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">Calculation Results & Tax Planners</span>
                                </div>
                                <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                </div>
                            </div>
                            <div class="w-full flex gap-2 group bg-white rounded-md p-3 relative featureBoxesDiv shadow-lg shadow-gray-200">
                                <div class="flex gap-2 w-full z-20 ">
                                    <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">Automatic Data Flow & K-1 Tax Information Export</span>
                                </div>
                                <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                </div>
                            </div>
                            <div class="w-full flex gap-2 group bg-white rounded-md p-3 relative featureBoxesDiv shadow-lg shadow-gray-200">
                                <div class="flex gap-2 w-full z-20 ">
                                    <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">Multi-State Returns</span>
                                </div>
                                <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                </div>
                            </div>
                            <div class="w-full flex gap-2 group bg-white rounded-md p-3 relative featureBoxesDiv shadow-lg shadow-gray-200">
                                <div class="flex gap-2 w-full z-20 ">
                                    <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">E-File States with Federal Return or Separately</span>
                                </div>
                                <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                </div>
                            </div>
                            <div class="w-full flex gap-2 group bg-white rounded-md p-3 relative featureBoxesDiv shadow-lg shadow-gray-200">
                                <div class="flex gap-2 w-full z-20 ">
                                    <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">Schedule D (Form 1040) Import & Taxpayer Forms in Spanish</span>
                                </div>
                                <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                </div>
                            </div>
                            <div class="w-full flex gap-2 group bg-white rounded-md p-3 relative featureBoxesDiv shadow-lg shadow-gray-200">
                                <div class="flex gap-2 w-full z-20 ">
                                    <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">Compare Taxes Year to Year & Import W-2s and K-1s Using 2D Barcode Scanner</span>
                                </div>
                                <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                </div>
                            </div>


                        </div>

                    </div>
                </div>

                <div class="w-full h-max p-4 relative">
                    {{--                <img class="rotatingImg lg:h-[650px] md:h-[500px] h-[400px] w-auto object-cover absolute -top-3 lg:left-[20%] md:left-[20%] left-[10%]" src="{{asset('assets/images/home/circle.png')}}" alt="">--}}
                    {{--                <img class=" w-auto h-full object-cover " src="{{asset('assets/images/quickbooks-hosting/qb-hosting.jpg')}}" alt="">--}}


                    <div class="absolute top-0 left-0 py-12 px-2 w-full h-full z-20">
                        <img class=" w-full h-full object-cover" src="{{asset('assets/images/services/Drake_Software.jpg')}}" alt="">
                    </div>
                    <img class="rotatingImg w-auto lg:h-[600px] md:h-[600px] h-[500px] mx-auto" src="{{asset('assets/images/home/circle.png')}}" alt="">
                </div>
            </div>

        </div>
    </div>

    <div class="w-full py-12 bg-gray-100">
        <div class="w-full flex flex-col gap-4 items-center justify-center py-4 text-center">
            <h1 class="text-black font-semibold lg:text-[35px] md:text-[35px] text-[30x]">We are reliable cloud server providers because we are backed up with</h1>
            <div class="h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                </div>
            </div>
            <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-center lg:w-[600px] md:w-[600px] sm:w-full">
                Cloud Server hosting: Simplify finances, access anywhere, anytime, for peace of mind
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
                            Expert Advice
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            Our technical support is 365 days ready to hear your queries regarding Drake Hosting services and you can connect via email, call or live chat.
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
                            Cross-platform access
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            Winscloud’s hosted Drake software is compatible with every device that has an active internet connection.
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
                            Data security
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            Cross-device compatibility The systems are supportive to various devices such as desktops, laptops, smartphones and tablets.Protect from any threds
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
                            Unbreakable Security
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            We implemented most secured 256-bit encryption on our servers that offer unbeatable security to your data.
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
                            Online support 24/7
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            Access our round-the-clock support for QuickBooks Premier Hosting, ensuring assistance whenever you need it, day or night.
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
                            High security
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            Multiple security measures are in place to protect your data and applications on the cloud. These include multiple layers of authentication, strong encryption, and multi-factor authentication (MFA).
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
