{{-- Navbar Section Start --}}

<header
 x-data="{navbarOpen: false}"
 class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24"
>
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2 gap-4 ml-2 lg:ml-0">
                    <img src="{{ url('/img/software-icon-transparent.png')}}" alt="logo" class="w-[48px] lg:w-[64px] inline-block dark:hidden"/>
                    <img src="{{ url('/img/software-icon-white-transparent.png')}}" alt="logo-white" class="w-[48px] lg:w-[64px] hidden dark:inline-block"/>
                    <span class="text-xl xl:text-2xl font-bold text-[#0c7187] dark:text-white xs:whitespace-nowrap">Hugo Suárez</span>
                </a>
            </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen" x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>
                    <nav
                     :class="!navbarOpen && 'hidden'"
                     id="navbarCollapse"
                     class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
                    >
                        <ul class="block lg:flex lg:items-center">
                            @foreach ($navigationItems as $item)
                                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                            @endforeach
                            {{-- <x-toggle-dark-mode></x-toggle-dark-mode> --}}
                        </ul>
                    </nav>
                </div>
            </div>
            {{-- Create a darkmode/lightmode button --}}
            {{-- Make sure it is toggleable --}}
        </div>
    </div>
</header>

<div></div>


{{-- Navbar Section End --}}
