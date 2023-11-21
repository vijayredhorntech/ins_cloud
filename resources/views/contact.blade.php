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
                        Contact
                    </h1>
                    <p class="text-gray-100 font-normal lg:w-[600px] text-[17px]  text-center">
                        If you have an idea, we would love to hear about it.
                    </p>
                    <a href="{{route('registration')}}" class="w-max px-4 py-2 mt-4 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                        GET 7 DAYS FREE TRIAL
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="w-full py-12 bg-gray-100">
        <div class="w-full flex flex-col gap-4 items-center justify-center py-4 text-center">
            <h1 class="text-black font-semibold lg:text-[35px] md:text-[35px] text-[30x]">Have Questions? Contact Our Team</h1>
            <div class="h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                </div>
            </div>
            <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-center lg:w-[600px] md:w-[600px] sm:w-full">
                Reliable Support Around the Clock: We're Here to Serve You, Anytime, Anywhere - Your Needs Are Our Priority.
            </p>
        </div>
        <div class="lg:w-[70%] md:w-[90%] w-full p-4 h-full mx-auto">
            <div class="  w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6 ">

                <div class="w-full ">
                    <div class="w-full flex flex-col gap-8">
                          <div class="flex gap-4">
                                  <div class=" h-16 w-16 p-2 outline-dashed rounded-full outline-[1px] outline-[#ee0979] flex justify-center items-center">
                                        <div class="h-12 w-12 rounded-full bg-gradient-to-r from-[#ee0979] to-[#ff6a00] text-white flex justify-center items-center">
                                             <i class="fa fa-location text-16"></i>
                                        </div>
                                  </div>
                              <div class="flex flex-col">
                                  <span class="text-black font-semibold text-[20px]">Address:</span>
                                  <span class="text-gray-500 font-normal text-[15px]">16192 Coastal Highway Lewes, DE 19958, United States</span>

                              </div>
                          </div>
                          <div class="flex gap-4">
                                  <div class=" h-16 w-16 p-2 outline-dashed rounded-full outline-[1px] outline-[#ee0979] flex justify-center items-center">
                                        <div class="h-12 w-12 rounded-full bg-gradient-to-r from-[#ee0979] to-[#ff6a00] text-white flex justify-center items-center">
                                             <i class="fa fa-envelope text-16"></i>
                                        </div>
                                  </div>
                              <div class="flex flex-col">
                                  <span class="text-black font-semibold text-[20px]">Email:</span>
                                  <a href="mailto:info@winscloudmatrix.com" class="text-gray-500 font-normal text-[15px] mt-1 hover:text-[#ee0979]">info@winscloudmatrix.com</a>
                                  <a href="mailto:sales@winscloudmatrix.com" class="text-gray-500 font-normal text-[15px] hover:text-[#ee0979]">sales@winscloudmatrix.com</a>

                              </div>
                          </div>
                          <div class="flex gap-4">
                                  <div class=" h-16 w-16 p-2 outline-dashed rounded-full outline-[1px] outline-[#ee0979] flex justify-center items-center">
                                        <div class="h-12 w-12 rounded-full bg-gradient-to-r from-[#ee0979] to-[#ff6a00] text-white flex justify-center items-center">
                                             <i class="fa fa-phone text-16"></i>
                                        </div>
                                  </div>
                              <div class="flex flex-col">
                                  <span class="text-black font-semibold text-[20px]">Email:</span>
                                  <a href="tel:+1 714-882-1244" class="text-gray-500 font-normal text-[15px] mt-1 hover:text-[#ee0979]">+1 714-882-1244</a>

                              </div>
                          </div>
                    </div>

                </div>


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
