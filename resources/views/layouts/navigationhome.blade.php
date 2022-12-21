<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <header class="fixed absolute top-0 left-0 z-50 w-full px-4 sm:px-8 lg:px-16">
        <div class="flex flex-wrap items-center justify-between py-6">
        <div class="w-1/2 md:w-auto">
            <a href="index.html" class="text-2xl font-bold text-white">
            <img src="images/logo1.png" alt="">
            </a>
        </div>

        <label for="menu-toggle" class="block mr-6 pointer-cursor md:hidden"><svg class="text-white fill-current"
            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <title>menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg></label>
        <input class="hidden" type="checkbox" id="menu-toggle">

        <div class="hidden w-full md:block md:w-auto" id="menu">
            <nav class="w-full px-6 py-4 mt-4 text-center bg-white rounded shadow-lg md:bg-transparent md:p-0 md:mt-0 md:shadow-none">
            <ul class="items-center md:flex">
                <li><a class="inline-block py-2 font-semibold md:text-white md:hidden lg:block hover:text-yellow-400" 
                    href="#about">About Us</a></li>
                <li class="md:ml-4"><a class="inline-block py-2 font-semibold md:text-white md:px-2 hover:text-yellow-400" 
                    href="#testi">Testimoni</a></li>
                <li class="md:ml-4"><a class="inline-block py-2 font-semibold md:text-white md:px-2 hover:text-yellow-400" 
                    href="#">FAQ's</a></li>
                <li class="md:ml-4"><a class="inline-block py-2 font-semibold md:text-white md:px-2 hover:text-yellow-400" 
                    href="#">Contact Us</a></li>
                <li class="md:ml-6"><a class="inline-block py-1 font-medium border rounded-md md:text-white md:px-2 hover:text-yellow-400" 
                    href="admin">Admin Page</a></li>
                <li class="pl-4 mt-3 md:mt-0">
                <a href="#">
                    <div class="hidden bg-yellow-400 rounded-lg sm:flex sm:items-center sm:ml-2">
                    <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out bg-white bg-yellow-400 border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>                        
                    </x-slot>
                </x-dropdown>
            </div>
                </a>
                    
                </li>
            </ul>
            </nav>
        </div>
        </div>
    </header>
</nav>
