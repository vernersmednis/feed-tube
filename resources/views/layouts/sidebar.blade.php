<style>
    .sidebar {
        transition: transform 0.3s ease-in-out;
    }
    .sidebar-open {
        transform: translateX(0);
    }
    .sidebar-closed {
        transform: translateX(-100%);
    }
</style>

<div x-data="{ showSidebar: false }" @toggle-sidebar.window="showSidebar = !showSidebar" :class="{'sidebar-closed': !showSidebar, 'sidebar-open': showSidebar }" class="sidebar  sidebar-closed fixed top-0 left-0 w-72 h-full overflow-y-auto bg-white z-50">
    <!-- Secondary Sidebar Content -->
    <div class="flex justify-between h-16 space-x-3 px-4">
        <div class="flex space-x-3">
            <!-- Sidebar Hamburger Button -->
            <div @click="showSidebar = !showSidebar" class="hamburger -me-2 flex items-center">
                <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />                        </svg>
                </button>
            </div>

            <!-- Sidebar Logo Home Button -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('home') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                </a>
            </div>
            
            <!-- Sidebar Language Settings Button -->
            <div class="m-auto">
                <x-dropdown align="left">
                    <x-slot name="trigger">
                        <button class="hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-1 py-2.5 text-center inline-flex items-center" type="button">
                            {{ __('EN') }}
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="#">
                            EN
                        </x-dropdown-link>
                        <x-dropdown-link href="#">
                            LV
                        </x-dropdown-link>
                        <x-dropdown-link href="#">
                            RU
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
    <!-- Main Sidebar Content -->
    <div class="p-4">
        <h2 class="text-2xl font-bold">{{ __('Sidebar') }}</h2>
        <ul>
            @auth
                <!-- Home Button -->
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-200 text-lg font-bold">{{ __('Home') }}</a></li>
                <hr>
                <!-- Authenticated User "You" Options -->
                <!-- (Your Channel, Playlists, Watch Later, Liked Videos) -->
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-200 text-lg font-bold">{{ __('You') }}</a>
                    <ul class="px-4 ">
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" ><path d="M4 20h14v1H3V6h1v14zM6 3v15h15V3H6zm2.02 14c.36-2.13 1.93-4.1 5.48-4.1s5.12 1.97 5.48 4.1H8.02zM11 8.5a2.5 2.5 0 015 0 2.5 2.5 0 01-5 0zm3.21 3.43A3.507 3.507 0 0017 8.5C17 6.57 15.43 5 13.5 5S10 6.57 10 8.5c0 1.69 1.2 3.1 2.79 3.43-3.48.26-5.4 2.42-5.78 5.07H7V4h13v13h-.01c-.38-2.65-2.31-4.81-5.78-5.07z"></path></svg>
                                <p>{{ __('Your channel') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" ><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>
                                <p>{{ __('Playlists') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" ><path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path></svg>
                                <p>{{ __('Watch later') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" ><path d="M18.77,11h-4.23l1.52-4.94C16.38,5.03,15.54,4,14.38,4c-0.58,0-1.14,0.24-1.52,0.65L7,11H3v10h4h1h9.43 c1.06,0,1.98-0.67,2.19-1.61l1.34-6C21.23,12.15,20.18,11,18.77,11z M7,20H4v-8h3V20z M19.98,13.17l-1.34,6 C18.54,19.65,18.03,20,17.43,20H8v-8.61l5.6-6.06C13.79,5.12,14.08,5,14.38,5c0.26,0,0.5,0.11,0.63,0.3 c0.07,0.1,0.15,0.26,0.09,0.47l-1.52,4.94L13.18,12h1.35h4.23c0.41,0,0.8,0.17,1.03,0.46C19.92,12.61,20.05,12.86,19.98,13.17z"></path></svg>
                                <p>{{ __('Liked videos') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                <!-- Authenticated User Subcriptions List -->
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-200 text-lg font-bold">{{ __('Subscriptions') }}</a>
                    <ul class="px-4 ">
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="User Avatar" class="w-7 h-7 max-w-none rounded-full">
                                <p>Channel 1</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <img src="https://yt3.ggpht.com/ytc/AIdro_nIQaSCXNp1j_Kq35s2bXmYP3GIIhgVA9bSiREn-TwHsFc=s88-c-k-c0x00ffffff-no-rj" alt="User Avatar" class="w-7 h-7 max-w-none rounded-full">
                                <p>Channel 2</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <img src="https://yt3.ggpht.com/I7i7vxFesX-D63MYKO3gcC_116mTxEsFJ3MbA6Ibl-iKaU3v7H9d3k09EvI2OPeRPGI-s58NZQ=s88-c-k-c0x00ffffff-no-rj" alt="User Avatar" class="w-7 h-7 max-w-none rounded-full">
                                <p>Channel 3</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <img src="https://yt3.ggpht.com/ytc/AIdro_mpYedipdXUXCKkwjQEeFrepFlDHZ0LiczqWeKyG0YmJvA=s88-c-k-c0x00ffffff-no-rj" alt="User Avatar" class="w-7 h-7 max-w-none rounded-full">
                                <p>Channel 4</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <img src="https://yt3.googleusercontent.com/cQysrzCc6nOPsE_4CGNwedWjx09gqGo4fCkcE6WzRD8fU_WfTRkvRwXWaT2UXcWKmeel9yzJww=s160-c-k-c0x00ffffff-no-rj" alt="User Avatar" class="w-7 h-7 max-w-none rounded-full">
                                <p>Channel 5</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <img src="https://yt3.googleusercontent.com/ytc/AIdro_n9yyw9WSXX-br4PBlgLuY18BOVPagHY_YX6SE3ud_y1wY=s160-c-k-c0x00ffffff-no-rj" alt="User Avatar" class="w-7 h-7 max-w-none rounded-full">
                                <p>Channel 6</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <img src="https://yt3.googleusercontent.com/ytc/AIdro_n8EykrWs8qctnl363VArqIqUnFZcyQiTwdYdo6Z5fKwGA=s160-c-k-c0x00ffffff-no-rj" alt="User Avatar" class="w-7 h-7 max-w-none rounded-full">
                                <p>Channel 7</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" ><path d="m18 9.28-6.35 6.35-6.37-6.35.72-.71 5.64 5.65 5.65-5.65z"></path></svg>
                                <p>{{ __('Show more') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
            @else
                <!-- Home Button  (in Case of being Unauthenticated) -->
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-200 text-lg font-bold">{{ __('Home') }}</a></li>
                <hr>
                <!-- User "You" Options (in Case of being Unauthenticated) -->
                <li>
                    <a href="{{ route('login') }}" class="block py-2 px-4 hover:bg-gray-200 text-lg font-bold">{{ __('You') }}</a>
                    <ul class="px-4 ">
                        <li>
                            <a href="{{ route('login') }}" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <p>{{ __('Login') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <p>{{ __('Register') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                <!-- User Subcriptions List (in Case of being Unauthenticated) -->
                <li>
                    <a href="{{ route('login') }}" class="block py-2 px-4 hover:bg-gray-200 text-lg font-bold">{{ __('Subscriptions') }}</a>
                    <ul class="px-4 ">
                        <li>
                            <a href="{{ route('login') }}" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <p>{{ __('Login') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="flex space-x-4 p-2 items-center hover:bg-gray-200">
                                <p>{{ __('Register') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
            @endauth
        </ul>
    </div>
</div>