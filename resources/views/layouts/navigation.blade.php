<!-- Navigation Bar -->
<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Main Navigation Menu Content -->
    <div class="max-w-7xl mx-auto px-4 px-6 lpx-8">
        <div :class="{'space-x-3': !showSearchBar }" class="flex justify-between h-16 space-x-3">
            <div :class="{'hidden': showSearchBar }"  class="flex space-x-3">
                <!-- Sidebar Hamburger Button -->
                <div @click="showSidebar = !showSidebar" class="hamburger -me-2 flex items-center">
                    <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />                        
                        </svg>
                    </button>
                </div>

                <!-- Logo Home Button -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>
                
                <!-- Language Settings Button -->
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

            <!-- Search Bar -->
            <div :class="{'hidden': !showSearchBar, 'space-x-3': !showSearchBar }" class="w-full my-auto">
                <form class="flex">
                    <button @click="showSearchBar = !showSearchBar" type="button" class="bg-gray-300 text-black p-3 rounded-l-full hover:bg-gray-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <input class="border border-gray-300 rounded-none p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" 
                        type="search" placeholder="Search" aria-label="Search">
                    <button type="submit" class="bg-blue-500 text-white p-3 rounded-r-full hover:bg-blue-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 4a7 7 0 017 7c0 1.78-.66 3.43-1.85 4.7a7.012 7.012 0 01-10.3 0A6.982 6.982 0 014 11a7 7 0 017-7z"></path>
                        </svg>
                    </button>
                </form>
            </div>
                

            <div :class="{'hidden': showSearchBar }" class="flex ">
                <!-- Search Button (to Show the Actual Search Bar) -->
                <button @click="showSearchBar = !showSearchBar" class="my-auto bg-blue-500 text-white p-3 rounded-full hover:bg-blue-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 4a7 7 0 017 7c0 1.78-.66 3.43-1.85 4.7a7.012 7.012 0 01-10.3 0A6.982 6.982 0 014 11a7 7 0 017-7z"></path>
                    </svg>
                </button>
                <!-- Guest or Authenticated User Options -->
                @auth
                    <x-dropdown align="right" width="48">
                        <!-- Authenticated User Icon -->
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <img src="//yt3.ggpht.com/cyToyZxdJ6njviVg7UnqtX1k1m4btgtQLjG-B-r8eyVnW3gqCsBCHPSC3ej9yE0TvovD88oPEdg=s176-c-k-c0x00ffffff-no-rj-mo" alt="User Avatar" class="w-11 h-11 max-w-none rounded-full">
                            </button>
                        </x-slot>

                        <!-- Profile and Log Out Button (if Authenticated) -->
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

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
                @else
                    <x-dropdown align="right" width="48">
                        <!-- UNauthenticated User Icon -->
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <x-unauthenticated-user-icon class="w-11 h-11 max-w-none rounded-full" />
                            </button>
                        </x-slot>

                        <!-- Login and Register Buttons (if NOT Authenticated) -->
                        <x-slot name="content">
                            <x-dropdown-link :href="route('login')">
                                {{ __('Login') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('register')">
                                {{ __('Register') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                @endauth
            </div>
        </div>
    </div>
</nav>