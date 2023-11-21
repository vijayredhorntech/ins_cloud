<header class="absolute left-0 top-0 z-50 w-full " id="mainHeader">
    <div id="headerDiv" class="w-full h-20 flex lg:justify-evenly md:justify-evenly justify-between items-center p-4 ">
        <div  class="w-max h-full" id="logoDiv">
            <a href="{{route('home')}}">
                <img class="w-full h-full object-cover"  src="{{asset('assets/images/logo (1).png')}}" alt="">
            </a>
        </div>

        <div class="w-max h-full  flex items-center">
            <ul id="navItems" class="lg:flex md:flex hidden lg:flex-row md:flex-row flex-col h-max w-full lg:items-center md:items-center items-start lg:bg-transparent md:bg-transparent bg-white gap-8 lg:static md:static absolute top-[100%] left-0 lg:text-white md:text-white text-black  font-[400] lg:text-[18px] md:text-[15px]  lg:py-0 md:py-0 py-6">
                <a href="{{route('home')}}"> <li class="hover:text-[#ee0979] transition ease-in duration-2000 lg:px-0 md:px-0 px-6">Home</li></a>
                <li class="flex lg:flex-row md:flex-row flex-col gap-3 lg:items-center md:items-center items-start relative group cursor-pointer lg:px-0 md:px-0 px-6">
                    <div class="flex  items-center gap-2">
                        Quick Book Hosting
                        <i class="fa-solid fa-caret-down"></i>
                    </div>

                    <ul  class="hidden group-hover:flex flex-col text-black lg:absolute md:absolute static left-0 top-[100%] rounded-md bg-white z-50  lg:w-max md:w-max w-screen h-max py-2  font-normal">
                        <a href="{{route('quickbooks-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">QuickBooks Hosting</li></a>
                        <a href="{{route('quickbooks-desktop')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">Quickbooks Desktop</li></a>
                        <a href="{{route('quickbooks-pro')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">Quickbooks Pro</li></a>
                        <a href="{{route('quickbooks-premier')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">Quickbooks Premier</li></a>
                        <a href="{{route('quickbooks-enterprise')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">Quickbooks Enterprise</li></a>
                        <a href="{{route('quickbooks-pos')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">Quickbooks POS</li></a>
                        <a href="{{route('quickbooks-hosting-canada')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">Quickbooks Hosting Canada</li></a>
                    </ul>
                </li>
                <li class="flex lg:flex-row md:flex-row flex-col gap-3 lg:items-center md:items-center items-start relative group cursor-pointer lg:px-0 md:px-0 px-6">
                    <div class="flex  items-center gap-2">
                        Sage Hosting
                        <i class="fa-solid fa-caret-down"></i>

                    </div>

                    <ul  class="hidden group-hover:flex flex-col text-black lg:absolute md:absolute static left-0 top-[100%] rounded-md bg-white z-50  lg:w-max md:w-max w-screen h-max py-2  font-normal">
                        <a href="{{route('sage-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">Sage Hosting</li></a>
                        <a href="{{route('sage-50-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">Sage 50 Hosting</li></a>
                        <a href="{{route('sage-100-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">Sage 100 Hosting</li></a>
                        <a href="{{route('sage-300-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">Sage 300 Hosting</li></a>
                        <a href="{{route('sage-500-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000  ">Sage 500 Hosting</li></a>
                    </ul>
                </li>
                <li class="flex lg:flex-row md:flex-row flex-col gap-3 lg:items-center md:items-center items-start relative group cursor-pointer lg:px-0 md:px-0 px-6">
                    <div class="flex  items-center gap-2">
                        Services
                        <i class="fa-solid fa-caret-down"></i>

                    </div>
                    <ul  class="hidden group-hover:flex flex-col text-black lg:absolute md:absolute static left-0 top-[100%] rounded-md bg-white z-50  lg:w-max md:w-max w-screen h-max py-2  font-normal">
                        <a href="{{route('lacerte-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Lacerte Hosting</li></a>
                        <a href="{{route('proSeries-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">ProSeries Hosting</li></a>
                        <a href="{{route('cloud-server-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Cloud Server Hosting</li></a>
                        <a href="{{route('drake-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Drake Hosting</li></a>
                        <a href="{{route('ultratax-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Ultratax Hosting</li></a>
                        <a href="{{route('act-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">ACT Hosting</li></a>
                        <a href="{{route('atx-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">ATX Hosting</li></a>
                        <a href="{{route('taxwise-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Taxwise Hosting</li></a>
                        <a href="{{route('quicken-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Quicken Hosting</li></a>
                        <a href="{{route('myob-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">MYOB Hosting</li></a>
                        <a href="{{route('fishbowl-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Fishbowl Hosting</li></a>
                        <a href="{{route('doc-it-hosting')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Doc -It Hosting</li></a>
                    </ul>
                </li>
                <a href="{{route('pricing')}}"> <li class="hover:text-[#ee0979] transition ease-in duration-2000 lg:px-0 md:px-0 px-6 ">Pricing</li></a>
                <li class="flex lg:flex-row md:flex-row flex-col gap-3 lg:items-center md:items-center items-start relative group cursor-pointer lg:px-0 md:px-0 px-6">
                    <div class="flex  items-center gap-2">
                        Support
                        <i class="fa-solid fa-caret-down"></i>

                    </div>
                    <ul  class="hidden group-hover:flex flex-col text-black lg:absolute md:absolute static left-0 top-[100%] rounded-md bg-white z-50  lg:w-max md:w-max w-screen h-max py-2  font-normal">
                        <a href="https://join.zoho.com" target="_blank"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Windows Support</li></a>
                        <a href="https://join.zoho.com" target="_blank"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">MAC Support</li></a>
                        <a href="https://join.zoho.com" target="_blank"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Android Support</li></a>
                        <a href="{{route('upload-data')}}" target="_blank"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Upload Data</li></a>
                        <a href="{{route('faq')}}" target="_blank"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">FAQs</li></a>
                        <a href="https://join.zoho.com" target="_blank"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">What is My IP</li></a>
                    </ul>
                </li>
                <li class="flex lg:flex-row md:flex-row flex-col gap-3 lg:items-center md:items-center items-start relative group cursor-pointer lg:px-0 md:px-0 px-6">
                    <div class="flex  items-center gap-2">
                        About-Us
                        <i class="fa-solid fa-caret-down"></i>

                    </div>
                    <ul  class="hidden group-hover:flex flex-col text-black lg:absolute md:absolute static left-0 top-[100%] rounded-md bg-white z-50  lg:w-max md:w-max w-screen h-max py-2  font-normal">
                        <a href="{{route('introduction')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Introductions</li></a>
                        <a href="{{route('policy')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Policy</li></a>
                        <a href="{{route('contact')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Contact Us</li></a>
                        <a href="{{route('blogs')}}"><li class="px-6 py-2 block w-full lg:text-black md:text-black text-[#ee0979] hover:text-[#ee0979] transition ease-in duration-2000   ">Blogs</li></a>
                    </ul>
                </li>
                <a href="{{route('login')}}"> <li class="hover:text-[#ee0979] transition ease-in duration-2000 "> <i class="fa-regular fa-user mr-1 text-[#eae563] lg:px-0 md:px-0 px-6"></i>Login</li></a>
            </ul>
        </div>
        <div class="w-max h-full lg:hidden md:hidden   flex items-center">
            <ul class="flex h-full items-center  text-white gap-4  font-[400] text-[18px] ">
                <a href="{{route('login')}}"> <li class="hover:text-[#ee0979] transition ease-in duration-2000 "> <i class="fa-regular fa-user mr-2 text-[#ee0979]"></i>Login</li></a>
                <li class="hover:text-[#ee0979] transition ease-in duration-2000 "
                    onclick="
                            let navItems = document.getElementById('navItems');
                            navItems.classList.toggle('hidden');
                            navItems.classList.toggle('flex');
                         "> <i class="fa-solid fa-bars text-[#ee0979]"></i></li>
            </ul>
        </div>
    </div>


</header>


@push('scripts')
    <script>
        // when scroll up to 100px, add remove absolute and add sticky class to mainHeader
        // lg:text-white md:text-white text-black
        window.addEventListener('scroll', function () {
            let mainHeader = document.getElementById('mainHeader');
            let headerDiv = document.getElementById('headerDiv');
            let logoDiv = document.getElementById('logoDiv');
            let navItems = document.getElementById('navItems');

            if (window.scrollY > 60) {
                mainHeader.classList.remove('absolute');
                mainHeader.classList.add('sticky');
                headerDiv.classList.add('bg-white');
                logoDiv.innerHTML = '  <a href="{{route('home')}}"> <img class="w-full h-full object-cover"  src="{{asset('assets/images/black-logo.png')}}" alt=""> </a>';
                navItems.classList.remove('lg:text-white');
                navItems.classList.remove('md:text-white');

            } else {
                mainHeader.classList.add('absolute');
                mainHeader.classList.remove('sticky');
                headerDiv.classList.remove('bg-white');
                logoDiv.innerHTML = '  <a href="{{route('home')}}"> <img class="w-full h-full object-cover"  src="{{asset('assets/images/logo (1).png')}}" alt=""> </a>';
                navItems.classList.add('lg:text-white');
                navItems.classList.add('md:text-white');
            }
        })
    </script>
@endpush
