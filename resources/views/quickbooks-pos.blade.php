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
                        Quickbook POS Hosting
                    </h1>
                    <p class="text-gray-100 font-normal lg:w-[600px] text-[17px]  text-center">
                        Simplify your financial management with QuickBooks hosting: Access from anywhere, anytime, ensuring seamless finances and peace of mind
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
                    QuickBooks Point of Sale (POS) is a powerful software solution
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
                        <img class=" w-full h-full object-cover" src="{{asset('assets/images/quickbooks-hosting/qb-point-of-sale.jpg')}}" alt="">
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
                            QuickBooks Point of Sale (POS) is a powerful software solution designed to help retail and sales stores streamline their operations and keep various departments organized. With its robust features and user-friendly interface, QuickBooks POS has become a go-to choice for businesses looking to efficiently manage their point of sale activities. And when combined with Ace Cloud Hosting, QuickBooks POS takes its potential to the next level by leveraging the benefits of remote server technology.
                        </p>
                        <p class="text-gray-500 text-[16px] font-[400] mt-8 leading-8">
                            QuickBooks hosting with Winscloud is a great way to ensure that your QuickBooks data is always available and backed up. Winscloud is a leading provider of QuickBooks cloud hosting services and has a robust infrastructure. In addition, our excellent support team is always available to help you with any questions or issues you may have.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full py-12 bg-gray-100">
        <div class="w-full flex flex-col gap-4 items-center justify-center py-4 text-center">
            <h1 class="text-black font-semibold lg:text-[35px] md:text-[35px] text-[30x]">Features of Winscloud Quickbooks POS Hosting</h1>
            <div class="h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                </div>
            </div>
            <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-center lg:w-[600px] md:w-[600px] sm:w-full">
                QuickBooks POS hosting: Simplify finances, access anywhere, anytime, for peace of mind
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
                            Efficient Sales Processing
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            QuickBooks POS streamlines the sales process, making it easy for cashiers to process transactions quickly and accurately. This efficiency can lead to shorter customer wait times and improved customer satisfaction.
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
                            Inventory Management
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            Automatic inventory tracking helps businesses keep track of product quantities in real-time. This reduces the risk of overstocking or understocking items and ensures that popular products are always available.
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
                            Customer Relationship Management (CRM)
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            QuickBooks POS allows businesses to create and manage customer profiles. This helps in building customer loyalty by offering personalized discounts, promotions, and rewards based on purchase history.
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
                            Improved Accuracy
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            Barcode scanning and automatic inventory updates minimize human error, reducing the likelihood of data entry mistakes.
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
                            Integration with QuickBooks
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            QuickBooks POS seamlessly integrates with QuickBooks Desktop, allowing for simplified financial reporting. This integration ensures that your sales and financial data are in sync, simplifying tax preparation and accounting tasks.
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
                            Multi-Store Management
                        </h1>
                        <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                            For businesses with multiple store locations, QuickBooks POS offers centralized control and the ability to share inventory and customer data across stores. This makes it easier to manage and transfer products between locations.
                        </p>

                    </div>







                    <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                    </div>
                </div>

            </div>
        </div>




    </div>


    <div class="w-full py-2 ">
        <div class="lg:w-[70%] md:w-[90%] w-full h-full mx-auto">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2 ">
                <div class="w-full h-full flex justify-end">
                    <div class=" text-justify p-4">
                        <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">
                            Multi User Access for Quickbook POS Hosting
                        </h1>
                        <div class=" lg:block md:block hidden h-[5px] mt-4 w-[100px] bg-[#cdf1d8] rounded-md relative">
                            <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                            </div>
                        </div>

                        <p class="text-gray-500 text-[16px] font-[400] mt-8 leading-8">
                            QuickBooks POS offers a range of features that make it an ideal solution for retail and sales stores. One of its key strengths is its ability to manage inventory effectively. With QuickBooks POS, businesses can easily track and update inventory levels, set up reorder points, and generate reports to analyze stock movement. This helps store owners and managers keep track of their products, avoid stockouts, and make informed purchasing decisions. In addition to inventory management, QuickBooks POS enables businesses to handle sales transactions seamlessly.
                        </p>
                    </div>
                </div>
                <div class="w-full h-max p-4 relative">
                    {{--                <img class="rotatingImg lg:h-[650px] md:h-[500px] h-[400px] w-auto object-cover absolute -top-3 lg:left-[20%] md:left-[20%] left-[10%]" src="{{asset('assets/images/home/circle.png')}}" alt="">--}}
                    {{--                <img class=" w-auto h-full object-cover " src="{{asset('assets/images/quickbooks-hosting/qb-hosting.jpg')}}" alt="">--}}


                    <div class="absolute top-0 left-0 py-12 px-2 w-full h-full z-20">
                        <img class=" w-full h-full object-cover" src="{{asset('assets/images/quickbooks-hosting/qb-point-of-sale-2.jpg')}}" alt="">
                    </div>
                    <img class="rotatingImg w-auto lg:h-[600px] md:h-[600px] h-[500px] mx-auto" src="{{asset('assets/images/home/circle.png')}}" alt="">
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
