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
    <div class="swiffy-slider slider-nav-caretfill">
        <ul class="slider-container">
            <li class="relative">
                <div class="w-full lg:h-screen md:h-[600px] sm:h-[600px] h-[500px]">
                    <img src="{{asset('assets/images/slide1.jpg')}}" class="w-full h-full object-cover">
                </div>

                <div class="absolute top-0 left-0 flex items-center w-full h-full z-10 bg-black/10">
                    <div class="lg:w-[1000px] md:w-[1000px] w-full">
                        <div class="w-full lg:px-[250px] md:px-[150px] px-[20px] flex flex-col lg:items-start md:items-start items-center gap-4">
                            <h1 class="text-white lg:text-[55px] md:text-[45px] sm:text-[35px] text-[25px] font-semibold lg:text-left md:text-left text-center">Get Anywhere & anytime access with Winscloud</h1>
                            <p class="text-white font-normal lg:text-[20px] md:text-[18px] sm:text-[17px] text-[15px] lg:text-left md:text-left text-center">
                                Reliable & fast respond server for all your hosting needs, you will never need to manage your software updated and backup !
                            </p>
                            <a href="{{route('registration')}}" class="w-max px-4 py-2 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                                GET STARTED
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="relative">
                <div class="w-full lg:h-screen md:h-[600px] sm:h-[600px] h-[500px]">
                    <img src="{{asset('assets/images/slide2.jpg')}}" class="w-full h-full object-cover">
                </div>

                <div class="absolute top-0 left-0 flex items-center w-full h-full z-10 bg-black/10">
                    <div class="lg:w-[1000px] md:w-[1000px] w-full">
                        <div class="w-full lg:px-[250px] md:px-[150px] px-[20px] flex flex-col lg:items-start md:items-start items-center gap-4">
                            <h1 class="text-white lg:text-[55px] md:text-[45px] sm:text-[35px] text-[25px] font-semibold lg:text-left md:text-left text-center">Celebrating a decade of powerful server</h1>
                            <p class="text-white font-normal lg:text-[20px] md:text-[18px] sm:text-[17px] text-[15px] lg:text-left md:text-left text-center">
                                Get the financial tools and insights to start, build, and grow your business.
                            </p>
                            <a href="{{route('registration')}}" class="w-max px-4 py-2 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                                GET STARTED
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="relative">
                <div class="w-full lg:h-screen md:h-[600px] sm:h-[560px] h-[450px]">
                    <img src="{{asset('assets/images/slide3.jpg')}}" class="w-full h-full object-cover">
                </div>

                <div class="absolute top-0 left-0 flex items-center w-full h-full z-10 bg-black/10">
                    <div class="lg:w-[1000px] md:w-[1000px] w-full">
                        <div class="w-full lg:px-[250px] md:px-[150px] px-[20px] flex flex-col lg:items-start md:items-start items-center gap-4">
                            <h1 class="text-white lg:text-[55px] md:text-[45px] sm:text-[35px] text-[25px] font-semibold lg:text-left md:text-left text-center">Easy setup and free support (24 * 7)</h1>
                            <p class="text-white font-normal lg:text-[20px] md:text-[18px] sm:text-[17px] text-[15px] lg:text-left md:text-left text-center">
                                Get the financial tools and insights to start, build, and grow your business.
                            </p>
                            <a href="{{route('registration')}}" class="w-max px-4 py-2 rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                                GET STARTED
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <button type="button" class="slider-nav z-20"></button>
        <button type="button" class="slider-nav slider-nav-next z-20"></button>

        <div class="slider-indicators">
            <button class="active"></button>
            <button></button>
            <button></button>
        </div>
    </div>
    <div class="w-full py-16 bg-gray-100">
         <div class="w-full flex flex-col items-center gap-4 justify-center py-4 text-center">
              <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">Best Cloud Hosting Providers - Winscloud Matrix LLC</h1>
             <div class="lg:hidden md:hidden block h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                 <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                 </div>
             </div>
         </div>

          <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2 ">
                <div class="w-full h-full flex justify-end">
                   <div class="lg:w-[70%] text-justify p-4">
                       <div class=" lg:block md:block hidden h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                           <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                           </div>
                       </div>

                       <p class="text-gray-400 text-[16px] font-[400] mt-8 leading-8">
                           Winscloud is one of the leading cloud hosting providers, offering a vast range of hosting solutions to individuals and businesses to operate their almost every tax and accounting application at any instance through the internet. Our servers are highly secured by end-to-end data encryption and to access any confidential data, the users must have their authorized version of tax or accounting application present on it.
                       </p>

                       <p class="text-gray-400 text-[16px] font-[400] mt-8 leading-8">
                           With our cloud application hosting service, Your hosted application has all the similar functionalities as locally installed software. You can save all your secret data and other application-related information on the cloud storage and access them remotely. With our efficient cloud application hosting solution, we are cutting down your expenses on in-house infrastructure. Our IT specialists have all the potent knowledge to secure and maintain your business application.
                       </p>

                       <div class="grid grid-cols-2 gap-6 mt-6">
                              <div class="w-full flex gap-2 group bg-white rounded-md p-3 items-center relative featureBoxesDiv">
                                  <div class="flex gap-2 w-full z-20 items-center">
                                      <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                      <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">Free plan available</span>
                                  </div>
                                  <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                  </div>
                              </div>
                              <div class="w-full flex gap-2 group bg-white rounded-md p-3 items-center relative featureBoxesDiv">
                                  <div class="flex gap-2 w-full z-20 items-center">
                                      <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                      <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">Full data privacy compliance</span>
                                  </div>
                                  <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                  </div>
                              </div>
                              <div class="w-full flex gap-2 group bg-white rounded-md p-3 items-center relative featureBoxesDiv">
                                  <div class="flex gap-2 w-full z-20 items-center">
                                      <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                      <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">100% transparent costs</span>
                                  </div>
                                  <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                  </div>
                              </div>
                              <div class="w-full flex gap-2 group bg-white rounded-md p-3 items-center relative featureBoxesDiv">
                                  <div class="flex gap-2 w-full z-20 items-center">
                                      <i class="fa-solid fa-check text-[#ee0979] group-hover:text-white"></i>
                                      <span class="font-semibold  text-[15px] text-gray-500 group-hover:text-white transition ease-in duration-2000">Commitment-free</span>
                                  </div>
                                  <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">

                                  </div>
                              </div>


                       </div>
                   </div>
                </div>
                <div class="w-full h-full p-4 relative">
{{--                    <img class="rotatingImg lg:h-[650px] md:h-[500px] h-[400px] w-auto object-cover absolute -top-3 lg:left-[20%] md:left-[20%] left-[10%]" src="{{asset('assets/images/home/circle.png')}}" alt="">--}}
                    <img class=" w-full lg:h-full h-full object-cover " src="{{asset('assets/images/home/feature1.png')}}" alt="">
                </div>
          </div>
     </div>
     <div class="w-full py-2 bg-gray-200">
         <div class="w-full flex flex-col gap-4 items-center justify-center py-4 text-center">
             <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">Our Features</h1>
             <div class="h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                 <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                 </div>
             </div>
             <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-center lg:w-[600px] md:w-[600px] sm:w-full">
                 Scalable, secure, and reliable cloud hosting solutions for your business. Experience high performance and 24/7 support.
             </p>
         </div>
          <div class="lg:w-[70%] md:w-[90%] w-full p-4 h-full mx-auto">
              <div class="  w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 ">
                  <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                      <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                              <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#fadae7] ">
                                  <i class="fa fa-clock text-[#ee0979] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                              </div>

                          <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">5 Minutes Response</h1>
                          <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                              Our highly experienced dedicated team is available 24x7 to resolve your concerns within the assured time.
                          </p>

                      </div>







                      <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                      </div>
                  </div>
                  <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                      <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                              <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#fddcef] ">
                                  <i class="fa fa-envelope text-[#f78acb] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                              </div>

                          <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                              Email, Chat, Call Support
                          </h1>
                          <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                              We are reachable for all your needs over the call, email, and live chat to serve you at your convenience.
                          </p>

                      </div>







                      <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                      </div>
                  </div>
                  <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                      <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                              <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#cdf1d8] ">
                                  <i class="fa fa-key text-[#44ce6f] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                              </div>

                          <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                              Multi Level Protections
                          </h1>
                          <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                              Our servers are highly secured with SSL end to end encyption, enterprise level antiviruses, multi authentication.
                          </p>

                      </div>







                      <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                      </div>
                  </div>
                  <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                      <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                              <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#edc3fc] ">
                                  <i class="fa fa-cloud text-[#c679e3] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                              </div>

                          <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                              SSD Cloud Server
                          </h1>
                          <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                              We use latest server technology and SSD NVMe (PCI-E) standard drives to provide you superior performance.
                          </p>

                      </div>







                      <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                      </div>
                  </div>
                  <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                      <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                              <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#f9d2c4] ">
                                  <i class="fa fa-database text-[#eb6b3d] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                              </div>

                          <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                              Powerful Database
                          </h1>
                          <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                              Your data and multi layered backup will be restored in encypted form at most secured data centers in United States.
                          </p>

                      </div>







                      <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                      </div>
                  </div>
                  <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                      <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                              <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#fadada] ">
                                  <i class="fa fa-eye text-[#ee0979] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                              </div>

                          <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                              Live Monitoring
                          </h1>
                          <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                              Our dedicated team is always behind with highly improved server monitoring technology to run your software impeccably.
                          </p>

                      </div>







                      <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                      </div>
                  </div>


              </div>
          </div>




     </div>
     <div class="w-full py-2 bg-white">
         <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2 ">
             <div class="w-full h-full flex justify-end items-center">
                 <div class="lg:w-[70%] text-justify p-4">
                     <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">Easy setup and free maintenance, better cloud hosting solutions</h1>
                     <div class=" lg:block md:block hidden h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative mt-4">
                         <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                         </div>
                     </div>

                     <p class="text-gray-400 text-[16px] font-[400] mt-8 leading-8">
                         Discover the simplicity of setting up and enjoying hassle-free maintenance with our cloud hosting solutions. Save time and resources while benefiting from efficient and cost-effective management. Unlock a seamless hosting experience for your business or personal needs.
                     </p>

                     <a href="{{route('registration')}}" class="mt-4 w-max px-4 py-2  rounded-md text-white font-semibold  bg-gradient-to-r from-[#ee0979] to-[#ff6a00]  transition ease-in duration-2000">
                         GET STARTED
                     </a>
                 </div>
             </div>
             <div class="w-full h-full p-4 relative">
                 {{--                    <img class="rotatingImg lg:h-[650px] md:h-[500px] h-[400px] w-auto object-cover absolute -top-3 lg:left-[20%] md:left-[20%] left-[10%]" src="{{asset('assets/images/home/circle.png')}}" alt="">--}}
                 <img class=" w-full h-full object-cover " src="{{asset('assets/images/home/invoicing-shape1.png')}}" alt="">
             </div>
         </div>
     </div>
     <div class="w-full py-2 bg-white">
         <div class="w-full flex flex-col gap-4 items-center justify-center py-4 text-center">
             <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">We always try to understand customers expectation</h1>
             <div class="h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                 <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                 </div>
             </div>
             <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-center lg:w-[600px] md:w-[600px] sm:w-full">
                 Meeting and exceeding customer expectations is not just our goal; it's our commitment and the heart of our business.
             </p>
         </div>
         <div class="lg:w-[60%] md:w-[90%] w-full p-4 h-full mx-auto">
             <div class="  w-full grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2 gap-6 ">

                 <div class="w-full flex flex-col group bg-white rounded-md p-8 items-center relative featureBoxesDiv">
                           <div class="flex justify-end w-full">
                                 <span class="text-[#ee0979] text-[35px] font-bold">180K</span>
                           </div>
                             <div class="w-full flex ">
                                 <span class="text-[#57647c] text-[17px]">Downloaded</span>
                             </div>
                     </div>
                 <div class="w-full flex flex-col group bg-white rounded-md p-8 items-center relative featureBoxesDiv">
                           <div class="flex justify-end w-full">
                                 <span class="text-[#ee0979] text-[35px] font-bold">20K</span>
                           </div>
                             <div class="w-full flex ">
                                 <span class="text-[#57647c] text-[17px]">Feedback</span>
                             </div>
                     </div>
                 <div class="w-full flex flex-col group bg-white rounded-md p-8 items-center relative featureBoxesDiv">
                           <div class="flex justify-end w-full">
                                 <span class="text-[#ee0979] text-[35px] font-bold">500+</span>
                           </div>
                             <div class="w-full flex ">
                                 <span class="text-[#57647c] text-[17px]">Workers</span>
                             </div>
                     </div>
                 <div class="w-full flex flex-col group bg-white rounded-md p-8 items-center relative featureBoxesDiv">
                           <div class="flex justify-end w-full">
                                 <span class="text-[#ee0979] text-[35px] font-bold">70+</span>
                           </div>
                             <div class="w-full flex ">
                                 <span class="text-[#57647c] text-[17px]">Contributers</span>
                             </div>
                     </div>
                 </div>
             </div>
         </div>
     <div class="w-full py-2 bg-gray-100">
         <div class="w-full flex flex-col gap-4 items-center justify-center py-4 text-center">
             <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">Our Services</h1>
             <div class="h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                 <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                 </div>
             </div>
             <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-center lg:w-[600px] md:w-[600px] sm:w-full">
                 Discover a world of possibilities through our services, tailored to meet your needs and exceed your aspirations.
             </p>
         </div>
         <div class="lg:w-[70%] md:w-[90%] w-full p-4 h-full mx-auto">
             <div class="  w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 ">

                 <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                     <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                         <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#fadae7] ">
                             <i class="fa fa-book text-[#ee0979] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                         </div>

                         <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                             QuickBooks Hosting
                         </h1>
                         <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                             If you are planning to automate every process of your organisation, then a QuickBooks application is the problem solver. You are free to select from the pro, premier and QuickBooks enterprise hosting edition as per your business needs.
                         </p>

                     </div>







                     <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                     </div>
                 </div>
                 <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                     <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                         <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#fddcef] ">
                             <i class="fa fa-calculator text-[#f78acb] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                         </div>

                         <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                             Sage Hosting
                         </h1>
                         <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                             Experience Sage Hosting: Streamline your business finances effortlessly. Our secure, efficient cloud solution empowers your team with easy access and top-notch support. Simplify accounting and stay ahead with Sage Hosting.
                         </p>

                     </div>







                     <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                     </div>
                 </div>
                 <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                     <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                         <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#cdf1d8] ">
                             <i class="fa fa-cloud text-[#44ce6f] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                         </div>

                         <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                             Lacerte Hosting
                         </h1>
                         <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                             You can get this hosting service from Winscloud to empower your accounting work with more automatic tools, improve tax preparations, consulting and management.
                         </p>

                     </div>







                     <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                     </div>
                 </div>

                 <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                     <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                         <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#fadae7] ">
                             <i class="fa fa-chart-simple text-[#ee0979] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                         </div>

                         <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                             Ultra Tax Hosting
                         </h1>
                         <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                             UltraTax CS software has the best error detecting mechanism to get the actual taxes that save your precious time and effort.
                         </p>

                     </div>







                     <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                     </div>
                 </div>
                 <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                     <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                         <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#fddcef] ">
                             <i class="fa fa-envelope text-[#f78acb] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                         </div>

                         <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                             MYOB Hosting
                         </h1>
                         <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                             Various small and medium organisations admire this hosting service. The system is compatible with multiple devices, and the make it the perfect choice.
                         </p>

                     </div>







                     <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                     </div>
                 </div>
                 <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                     <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                         <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#cdf1d8] ">
                             <i class="fa fa-envelope text-[#44ce6f] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                         </div>

                         <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                             Secure & Reliable Email
                         </h1>
                         <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                             Experience peace of mind with our secure and reliable email hosting services. Safeguard your communications with advanced encryption, spam filters, and 24/7 monitoring.
                         </p>

                     </div>







                     <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                     </div>
                 </div>

                 <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                     <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                         <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#edc3fc] ">
                             <i class="fa fa-cloud text-[#c679e3] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                         </div>

                         <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                             ProSeries Hosting
                         </h1>
                         <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                             Online ProSeries software is the best tax filing software. You can use it for both state and federal tax filling; its user-friendly interface makes it more popular among the professionals.
                         </p>

                     </div>







                     <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                     </div>
                 </div>
                 <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                     <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                         <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#f9d2c4] ">
                             <i class="fa fa-database text-[#eb6b3d] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                         </div>

                         <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                             Taxwise Hosting
                         </h1>
                         <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                             This platform is prevalent among US-based CPAs. With the smooth functionalities, accounting tools, and accuracy, Winscloud Taxwise can help you in every manner.
                         </p>

                     </div>







                     <div  class=" featureBoxes absolute top-0  left-0 h-full w-0 rounded-md bg-gradient-to-r from-[#ee0979] to-[#ff6a00]">
                     </div>
                 </div>
                 <div class="w-full flex gap-2 group bg-white rounded-md p-8 items-center relative featureBoxesDiv">

                     <div class="flex flex-col gap-2 w-full z-20 items-center justify-center">
                         <div class="w-[60px] h-[60px] flex justify-center items-center rounded-full bg-[#fadada] ">
                             <i class="fa fa-eye text-[#ee0979] text-[30px] group-hover:rotate-180 transition ease-in duration-2000"></i>
                         </div>

                         <h1 class="text-black font-semibold lg:text-[22px] md:text-[22px] text-[17px] mt-4 group-hover:text-white transition ease-in duration-2000">
                             Drake Hosting
                         </h1>
                         <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-left w-full group-hover:text-white transition ease-in duration-2000">
                             With extensive modules, such as practice management, payroll and user write-up you can buy this cloud platform to ease you tax filling process.
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
            <div class="  w-full grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 gap-6 ">
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
     <div class="w-full py-12 bg-gray-100">
         <div class="w-full flex flex-col gap-4 items-center justify-center py-4 text-center">
             <h1 class="text-black font-semibold lg:text-[30px] md:text-[30px] text-[25px]">What customers say about Us</h1>
             <div class="h-[5px] w-[100px] bg-[#cdf1d8] rounded-md relative">
                 <div class="bg-[#44ce6f] h-[12px] w-[12px] rounded-full absolute -top-1 movingDiv ">

                 </div>
             </div>
             <p class="text-gray-400 text-[16px] font-[400] mt-2 leading-8 text-center lg:w-[600px] md:w-[600px] sm:w-full">
                 Certainly, here are some customer quotes that can showcase what customers say about our business:
             </p>
         </div>
         <div class="lg:w-[40%] md:w-[90%] w-full p-4 h-full mx-auto">
             <div class="swiffy-slider slider-nav-caretfill">
                 <ul class="slider-container">
                     <li class="relative">
                         <div class="w-full  h-max bg-white">
                             <div class="flex flex-col items-center p-4 gap-3">
                                 <i class="fa-solid fa-quote-left text-[#44ce6f] text-[40px]"></i>
                                 <p class="text-gray-500 text-[16px] font-[400] mt-2 leading-8 text-justify w-full px-12">
                                     Exceptional service! Their team goes above and beyond to ensure customer satisfaction.Reliable and trustworthy. I've never had any issues with their products or support.
                                 </p>
                                 <div class="h-max w-max flex items-center gap-2">
                                        <div class="h-16 w-16 rounded-full">
                                            <img class="w-full h-full object-cover rounded-full" src="{{asset('assets/images/home/client1.jpg')}}" alt="">
                                        </div>
                                     <div class="flex flex-col ">
                                               <span class="text-black text-[20px]">John Lucy</span>
                                               <span class="text-gray-600 text-[14px]">Founder & Consultant</span>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </li>
                     <li class="relative">
                         <div class="w-full  h-max bg-white">
                             <div class="flex flex-col items-center p-4 gap-3">
                                 <i class="fa-solid fa-quote-left text-[#44ce6f] text-[40px]"></i>
                                 <p class="text-gray-500 text-[16px] font-[400] mt-2 leading-8 text-justify w-full px-12">
                                     A game-changer for our business. Their solutions have truly transformed our operations.Prompt and friendly customer support. They make us feel valued and heard.Highly recommended! They consistently deliver quality and innovation.
                                 </p>
                                 <div class="h-max w-max flex items-center gap-2">
                                        <div class="h-16 w-16 rounded-full">
                                            <img class="w-full h-full object-cover rounded-full" src="{{asset('assets/images/home/client2.jpg')}}" alt="">
                                        </div>
                                     <div class="flex flex-col ">
                                               <span class="text-black text-[20px]">John Smith </span>
                                               <span class="text-gray-600 text-[14px]">CTO & Consultant</span>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </li>

                 </ul>

                 <button type="button" class="slider-nav z-20"></button>
                 <button type="button" class="slider-nav slider-nav-next z-20"></button>
             </div>

         </div>




     </div>
    </div>
@endsection
