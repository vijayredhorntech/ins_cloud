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
                        Sage 500 Hosting
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
                    Introduction to Sage 500 Hosting by Wincloud
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
                        <img class=" w-full h-full object-cover" src="{{asset('assets/images/sage-hosting/sage-500.jpg')}}" alt="">
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
                            Sage 500 is an online system that provides scalable solutions during run-time deployment. It is developed for big organizations that primarily work on distribution and manufacture but work best for medium and small enterprises too. Some of itextended features are improved automation, integration customization, scalability and updated reporting tools make it perfect for widespread big businesses. With per-user-per month price, it also acts as a cost-effective solution for the companies.
                        </p>
                        <p class="text-gray-500 text-[16px] font-[400] mt-8 leading-8">
                            WinsCloud cloud hosted for Sage 500 adds more features to it. With 99.99% uptime of servers, we ensure uninterrupted data transmission. We understand the value of your confidential data thus keep our servers protected with the latest firewall, 256-but encryption, end-to-end encryption,and SSL. Besides this our data warehouses are monitored by constant video surveillance and assured security even during a natural disaster.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full py-2 ">
        <div class="lg:w-[70%] md:w-[90%] w-full h-full mx-auto">
            <div class="w-full flex flex-col items-center gap-4 justify-center py-4 text-center">
                <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">
                    UNIQUE FEATURES OF SAGE 500 ERP HOSTING
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
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">
As the system is designed to cater to big enterprises it comes with advanced reporting and analytics. With extensive data, you can publish the reports on the cloud and monitor the KPI. Some of its remarkable features include real-time insights and drill down operation
                                    </span>
                                </div>
                                <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                </div>
                            </div>
                            <div class="w-full flex gap-2 group bg-white rounded-md p-3 relative featureBoxesDiv shadow-lg shadow-gray-200">
                                <div class="flex gap-2 w-full z-20 ">
                                    <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">
Scalability To cope with your changing business needs, the software is responsive to various screen sizes and forms without changing the backend code. This feature makes it easier to for a diverse range of users to access the application. Besides this the Visual Studio.Net business application develop empowers you with sophisticated customization tools
                                    </span>
                                </div>
                                <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                </div>
                            </div>
                            <div class="w-full flex gap-2 group bg-white rounded-md p-3 relative featureBoxesDiv shadow-lg shadow-gray-200">
                                <div class="flex gap-2 w-full z-20 ">
                                    <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">
General Accounting Sage 500 allow you to use the most sophisticated accounting tools.
                                    </span>
                                </div>
                                <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                </div>
                            </div>
                            <div class="w-full flex gap-2 group bg-white rounded-md p-3 relative featureBoxesDiv shadow-lg shadow-gray-200">
                                <div class="flex gap-2 w-full z-20 ">
                                    <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">
Inventory & Services The system lets youautomate the warehouse and supply chain process. It empowers you with the efficient management of your distribution cycle which beginswith purchase and end with sales. Such enhanced features provide you with the in-depth data to forecast and maximize the benefits
                                    </span>
                                </div>
                                <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                </div>
                            </div>
                            <div class="w-full flex gap-2 group bg-white rounded-md p-3 relative featureBoxesDiv shadow-lg shadow-gray-200">
                                <div class="flex gap-2 w-full z-20 ">
                                    <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">
Employees & Payroll The platform allows you to automate the HR activities. You can easily track the attendance and calculate the payroll.
                                    </span>
                                </div>
                                <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                </div>
                            </div>
                            <div class="w-full flex gap-2 group bg-white rounded-md p-3 relative featureBoxesDiv shadow-lg shadow-gray-200">
                                <div class="flex gap-2 w-full z-20 ">
                                    <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                    <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">
Productivity Being highly scalable, Sage 500 can meet the industry-specific requirements of your organization. Moreover, you can find out those areas where you can save your time and investment to improve productivity.
                                    </span>
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
                        <img class=" w-full h-full" src="{{asset('assets/images/sage-hosting/sage-500.png')}}" alt="">
                    </div>
                    <img class="rotatingImg w-auto lg:h-[600px] md:h-[600px] h-[500px] mx-auto" src="{{asset('assets/images/home/circle.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full py-12 bg-gray-100">
        <div class="w-full flex flex-col gap-4 items-center justify-center py-4 text-center">
            <h1 class="text-black font-semibold lg:text-[35px] md:text-[35px] text-[30x]">Benefits of WinsCloud Sage 500 hosting</h1>
            <div class="h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                </div>
            </div>
            <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-center lg:w-[600px] md:w-[600px] sm:w-full">
                Sage hosting: Simplify finances, access anywhere, anytime, for peace of mind
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
                            Guaranteed 99.99 % uptime
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            We distributed our data in 3 centers to ensure the availability of information even in the most crucial situation of natural disasters.
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
                            Coordinated Applications
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            Manage your resources as per your convince and synchronize with your accounts.
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
                            365 Day support
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            Our Technical experts are always there for you to help via email or phone. We also have live chat even on holidays.
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
                            Centralization of Workplace
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            With our cross-platform systems, your employees can access the data from any device through the internet.
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
                            Remote Access
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            With Sage 500 hosting, you can access your Sage 500 software and data from anywhere with an internet connection. This is especially valuable for businesses with remote or distributed teams.
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
                            Data Security
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            Hosting providers typically offer robust security measures, including data encryption, firewalls, and regular backups, to ensure the safety and integrity of your Sage 500 data.
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
