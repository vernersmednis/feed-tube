<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Video') }}
        </h2>
    </x-slot>

    <div class="lg:flex space-x-6 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="lg:w-8/12 space-y-6">
            <!-- Current Video -->
            <div class="w-full">
                <div class="w-full">
                    <div class="w-full block p-4 bg-white rounded-lg shadow">
                        <video controls class="w-full h-auto rounded-lg shadow-lg">
                            <source src="https://rr1---sn-p11p-gpms.googlevideo.com/videoplayback?expire=1724616740&ei=xDvLZqOGBtOyobIPhPyJyQw&ip=177.184.180.21&id=o-AHJWxY-UQvvq7CR3_Xs4ksJv2Xc--rM8pRQdCNKe9eHE&itag=18&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&bui=AQmm2ewCO3-tPIZv7eXIw87nE5WQp2mW2xo0Bfx2ZsI-UPZRWbbPyRSGb-t8uvm16qHBUyNP-9x8k-Hu&spc=Mv1m9qigt7xPDphIGl8q8PBQbIUxgx-vhGIeKn6sENe-a-jVzTmFNjU&vprv=1&svpuc=1&mime=video%2Fmp4&ns=tl3GtNu-Z29D8_D7kOYEjkEQ&rqh=1&gir=yes&clen=791367&ratebypass=yes&dur=19.063&lmt=1680501259475484&c=WEB_CREATOR&sefc=1&txp=4530434&n=0mxYAV3oAzJ6Ig&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cxpc%2Cbui%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Crqh%2Cgir%2Cclen%2Cratebypass%2Cdur%2Clmt&sig=AJfQdSswRQIgW8dhJWHaaRCQAJmGQ3XX2HPvResiGJLfsy2BftZnB7cCIQDRjkrWJ8JtImQF7c6TyvgG0UKyMYmrRKuy1MXvey8PuQ%3D%3D&title=Me+at+the+zoo&redirect_counter=1&rm=sn-bg0e7d7z&rrc=104&fexp=24350516,24350517,24350556,24350561&req_id=f839aba9068ea3ee&cms_redirect=yes&cmsv=e&ipbypass=yes&mh=VD&mip=62.205.237.62&mm=31&mn=sn-p11p-gpms&ms=au&mt=1724595084&mv=u&mvi=1&pcm2cms=yes&pl=21&lsparams=ipbypass,mh,mip,mm,mn,ms,mv,mvi,pcm2cms,pl&lsig=AGtxev0wRAIgC-_kuD9ChbKRpqhWA7VvBTtzh_xKTGqplFJSGC7WgiMCID0wiAnjtNswuZqv6pd3ZJmVcRxpMA9ccff7nFLZps65" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="flex space-x-4 p-2">
                            <a href="#" class="mt-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                            <div>
                                <a href="#"><h5 class="text-lg font-bold">Me at the Zoo</h5></a>
                                <p>3012 {{__('views')}}, 24 Aug, 2024</p>
                                <x-likes-and-dislikes likes-count="253" dislikes-count="14"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Comments -->
            <div class="w-full block p-4 bg-white rounded-lg shadow">
                <!-- Amount of Comments and "Sort by" Settings -->
                <div class="flex space-x-4 items-center">
                    <p class="font-bold">34 {{ __('comments') }}</p>
                    <x-dropdown align="left">
                        <x-slot name="trigger">
                            <button class="hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-1 py-2.5 text-center inline-flex items-center" type="button">
                                {{ __('Sort by') }}
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="#">
                                {{ __('Top comments') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="#">
                                {{ __('Newest first') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
                <!-- Post Your Own Comment Options -->
                <div>
                    <form class="flex">
                        <a href="#" class="m-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div class="m-2 w-full">
                            <textarea id="comment" rows="3" class="w-full text-sm text-gray-900 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800" placeholder="Write a comment..." required=""></textarea>
                            <button type="submit" class="bg-black rounded text-white px-2 py-1 float-right">
                                {{ __('Post') }}
                            </button>
                        </div>
                    </form>
                </div>
                <!-- The Actual Comments -->
                <div>
                    <div class="flex">
                        <a href="#" class="m-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div class="m-2">
                            <a href="#"><p class="font-bold">Author Name</p></a>
                            <p>very good video. i love it. would watch all throughout my life if I could. I wish I could add more than just 1 like.</p>
                            <div class="flex space-x-4">
                                <x-likes-and-dislikes likes-count="23" dislikes-count="3"/>
                                <button type="button" class="flex items-center mltext-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                    <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"></path>
                                    </svg>                
                                    {{ __('Reply') }}
                                </button>
                            </div>
                            <button class="inline-flex items-center py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ __('Replies') }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            <!-- Replies -->
                            <div class="ml-4">
                                <div class="flex">
                                    <a href="#" class="m-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                                    <div>
                                        <a href="#"><p class="font-bold">Author Name</p></a>
                                        <p>No, it was very boring.</p>
                                        <div class="flex space-x-4">
                                            <x-likes-and-dislikes likes-count="23" dislikes-count="3"/>
                                            <button type="button" class="flex items-center mltext-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                                <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"></path>
                                                </svg>      
                                                {{ __('Reply') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <a href="#" class="m-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                                    <div>
                                        <a href="#"><p class="font-bold">Author Name</p></a>
                                        <p>Yeah, I agree.</p>
                                        <div class="flex space-x-4">
                                            <x-likes-and-dislikes likes-count="23" dislikes-count="3"/>
                                            <button type="button" class="flex items-center mltext-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                                <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"></path>
                                                </svg>      
                                                {{ __('Reply') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="flex">
                        <a href="#" class="m-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div class="m-2">
                            <a href="#"><p class="font-bold">Author Name</p></a>
                            <p>very good video. i love it. would watch all throughout my life if I could. I wish I could add more than just 1 like.</p>
                            <div class="flex space-x-4">
                                <x-likes-and-dislikes likes-count="23" dislikes-count="3"/>
                                <button type="button" class="flex items-center mltext-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                    <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"></path>
                                    </svg>
                                    {{ __('Reply') }}
                                </button>
                            </div>
                            <button class="inline-flex items-center py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ __('Replies') }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="flex">
                        <a href="#" class="m-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div class="m-2">
                            <a href="#"><p class="font-bold">Author Name</p></a>
                            <p>very good video. i love it. would watch all throughout my life if I could. I wish I could add more than just 1 like.</p>
                            <div class="flex space-x-4">
                                <x-likes-and-dislikes likes-count="23" dislikes-count="3"/>
                                <button type="button" class="flex items-center mltext-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                    <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"></path>
                                    </svg>
                                    {{ __('Reply') }}
                                </button>
                            </div>
                            <button class="inline-flex items-center py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ __('Replies') }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="flex">
                        <a href="#" class="m-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div class="m-2">
                            <a href="#"><p class="font-bold">Author Name</p></a>
                            <p>very good video. i love it. would watch all throughout my life if I could. I wish I could add more than just 1 like.</p>
                            <div class="flex space-x-4">
                                <x-likes-and-dislikes likes-count="23" dislikes-count="3"/>
                                <button type="button" class="flex items-center mltext-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                    <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"></path>
                                    </svg>
                                    {{ __('Reply') }}
                                </button>
                            </div>
                            <button class="inline-flex items-center py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ __('Replies') }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="flex">
                        <a href="#" class="m-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div class="m-2">
                            <a href="#"><p class="font-bold">Author Name</p></a>
                            <p>very good video. i love it. would watch all throughout my life if I could. I wish I could add more than just 1 like.</p>
                            <div class="flex space-x-4">
                                <x-likes-and-dislikes likes-count="23" dislikes-count="3"/>
                                <button type="button" class="flex items-center mltext-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                    <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"></path>
                                    </svg>
                                    {{ __('Reply') }}
                                </button>
                            </div>
                            <button class="inline-flex items-center py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ __('Replies') }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="flex">
                        <a href="#" class="m-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div class="m-2">
                            <a href="#"><p class="font-bold">Author Name</p></a>
                            <p>very good video. i love it. would watch all throughout my life if I could. I wish I could add more than just 1 like.</p>
                            <div class="flex space-x-4">
                                <x-likes-and-dislikes likes-count="23" dislikes-count="3"/>
                                <button type="button" class="flex items-center mltext-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                    <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"></path>
                                    </svg>
                                    {{ __('Reply') }}
                                </button>
                            </div>
                            <button class="inline-flex items-center py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ __('Replies') }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="flex">
                        <a href="#" class="m-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div class="m-2">
                            <a href="#"><p class="font-bold">Author Name</p></a>
                            <p>very good video. i love it. would watch all throughout my life if I could. I wish I could add more than just 1 like.</p>
                            <div class="flex space-x-4">
                                <x-likes-and-dislikes likes-count="23" dislikes-count="3"/>
                                <button type="button" class="flex items-center mltext-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                    <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"></path>
                                    </svg>
                                    {{ __('Reply') }}
                                </button>
                            </div>
                            <button class="inline-flex items-center py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ __('Replies') }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Other Videos List -->
        <div class="lg:w-4/12 grid gap-6">
            <!-- Video Item 1 -->
            <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                <a href="#"><img src="https://img.youtube.com/vi/Nx-x3biNbHI/hqdefault.jpg" class="w-full h-auto rounded" alt="Video Title 1"></a>
                <div class="flex space-x-4 p-2">
                    <a href="#" class="mt-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                    <div>
                        <a href="#"><h5 class="text-lg font-bold">Video Title 1</h5></a>
                        <p>3012 {{__('views')}}, 24 Aug, 2024</p>
                        <x-likes-and-dislikes likes-count="253" dislikes-count="14"/>
                    </div>
                </div>
            </div>
            <!-- Video Item 2 -->
            <div>
                <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                    <a href="#"><img src="https://img.youtube.com/vi/_nTpsv9PNqo/hqdefault.jpg" class="w-full h-auto rounded" alt="Video Title 2"></a>
                    <div class="flex space-x-4 p-2">
                        <a href="#" class="mt-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div>
                            <a href="#"><h5 class="text-lg font-bold">Video Title 2</h5></a>
                            <p>918 {{__('views')}}, 31 Jan, 2020</p>
                            <x-likes-and-dislikes likes-count="512" dislikes-count="40"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Item 3 -->
            <div>
                <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                    <a href="#"><img src="https://img.youtube.com/vi/xWUSet0pxbQ/hqdefault.jpg" class="w-full h-auto rounded" alt="Video Title 3"></a>
                    <div class="flex space-x-4 p-2">
                        <a href="#" class="mt-2"><img src="https://yt3.googleusercontent.com/ytc/AIdro_n8EykrWs8qctnl363VArqIqUnFZcyQiTwdYdo6Z5fKwGA=s160-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div>
                            <a href="#"><h5 class="text-lg font-bold">Video Title 3</h5></a>
                            <p>2038 {{__('views')}}, 6 Jul, 2019</p>
                            <x-likes-and-dislikes likes-count="400" dislikes-count="40"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Item 4 -->
            <div>
                <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                    <a href="#"><img src="https://img.youtube.com/vi/q_q7bsVQ5IQ/hqdefault.jpg" class="w-full h-auto rounded" alt="Video Title 4"></a>
                    <div class="flex space-x-4 p-2">
                        <a href="#" class="mt-2"><img src="https://yt3.googleusercontent.com/ytc/AIdro_n8EykrWs8qctnl363VArqIqUnFZcyQiTwdYdo6Z5fKwGA=s160-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div>
                            <a href="#"><h5 class="text-lg font-bold">Video Title 4</h5></a>
                            <p>1512 {{__('views')}}, 28 Jul, 2021</p>
                            <x-likes-and-dislikes likes-count="380" dislikes-count="25"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Item 5 -->
            <div>
                <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                    <a href="#"><img src="https://img.youtube.com/vi/I-TP9LCUTaU/hqdefault.jpg" class="w-full h-auto rounded" alt="Video Title 5"></a>
                    <div class="flex space-x-4 p-2">
                        <a href="#" class="mt-2"><img src="https://yt3.googleusercontent.com/cQysrzCc6nOPsE_4CGNwedWjx09gqGo4fCkcE6WzRD8fU_WfTRkvRwXWaT2UXcWKmeel9yzJww=s160-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div>
                            <a href="#"><h5 class="text-lg font-bold">Video Title 5</h5></a>
                            <p>8114 {{__('views')}}, 28 Feb, 2021</p>
                            <x-likes-and-dislikes likes-count="1000" dislikes-count="200"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Item 6 -->
            <div class="video-container">
                <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                    <a href="#"><img src="https://img.youtube.com/vi/0mm05SkR_Ys/hqdefault.jpg" class="thumbnail w-full h-auto rounded" alt="Video Title 6"></a>
                    <div class="flex space-x-4 p-2">
                        <a href="#" class="mt-2"><img src="https://yt3.googleusercontent.com/cQysrzCc6nOPsE_4CGNwedWjx09gqGo4fCkcE6WzRD8fU_WfTRkvRwXWaT2UXcWKmeel9yzJww=s160-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div>
                            <a href="#"><h5 class="text-lg font-bold">Video Title 6</h5></a>
                            <p>50234 {{__('views')}}, 13 Mar, 2018</p>
                            <x-likes-and-dislikes likes-count="5512" dislikes-count="2013"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Item 7 -->
            <div class="video-container">
                <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                    <a href="#"><img src="https://img.youtube.com/vi/DI3yXg-sX5c/hqdefault.jpg" class="thumbnail w-full h-auto rounded" alt="Video Title 7"></a>
                    <div class="flex space-x-4 p-2">
                        <a href="#" class="mt-2"><img src="https://yt3.googleusercontent.com/cQysrzCc6nOPsE_4CGNwedWjx09gqGo4fCkcE6WzRD8fU_WfTRkvRwXWaT2UXcWKmeel9yzJww=s160-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div>
                            <a href="#"><h5 class="text-lg font-bold">Video Title 7</h5></a>
                            <p>10234 {{__('views')}}, 25 Sep, 2023</p>
                            <x-likes-and-dislikes likes-count="2038" dislikes-count="313"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Item 8 -->
            <div class="video-container">
                <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                    <a href="#"><img src="https://img.youtube.com/vi/TR7GEFbzRPs/hqdefault.jpg" class="thumbnail w-full h-auto rounded" alt="Video Title 8"></a>
                    <div class="flex space-x-4 p-2">
                        <a href="#" class="mt-2"><img src="https://yt3.googleusercontent.com/cQysrzCc6nOPsE_4CGNwedWjx09gqGo4fCkcE6WzRD8fU_WfTRkvRwXWaT2UXcWKmeel9yzJww=s160-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div>
                            <a href="#"><h5 class="text-lg font-bold">Video Title 8</h5></a>
                            <p>50001 {{__('views')}}, 25 Sep, 2023</p>
                            <x-likes-and-dislikes likes-count="2038" dislikes-count="413"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Item 9 -->
            <div class="video-container">
                <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                    <a href="#"><img src="https://img.youtube.com/vi/l35cs9_Pb-M/hqdefault.jpg" class="thumbnail w-full h-auto rounded" alt="Video Title 9"></a>
                    <div class="flex space-x-4 p-2">
                        <a href="#" class="mt-2"><img src="https://yt3.googleusercontent.com/ytc/AIdro_n9yyw9WSXX-br4PBlgLuY18BOVPagHY_YX6SE3ud_y1wY=s160-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div>
                            <a href="#"><h5 class="text-lg font-bold">Video Title 9</h5></a>
                            <p>100101 {{__('views')}}, 11 Oct, 2017</p>
                            <x-likes-and-dislikes likes-count="10038" dislikes-count="405"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Item 10 -->
            <div class="video-container">
                <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                    <a href="#"><img src="https://img.youtube.com/vi/q8wQYK1tJUc/hqdefault.jpg" class="thumbnail w-full h-auto rounded" alt="Video Title 10"></a>
                    <div class="flex space-x-4 p-2">
                        <a href="#" class="mt-2"><img src="https://yt3.googleusercontent.com/ytc/AIdro_n9yyw9WSXX-br4PBlgLuY18BOVPagHY_YX6SE3ud_y1wY=s160-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                        <div>
                            <a href="#"><h5 class="text-lg font-bold">Video Title 10</h5></a>
                            <p>101131 {{__('views')}}, 12 Dec, 2017</p>
                            <x-likes-and-dislikes likes-count="9038" dislikes-count="505"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Item 11 -->
            <div class="video-container">
                <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                    <a href="#"><img src="https://img.youtube.com/vi/O79Ft0PiiGg/hqdefault.jpg" class="thumbnail w-full h-auto rounded" alt="Video Title 11"></a>
                    <div class="flex space-x-4 p-2">
                        <a href="#" class="mt-2"><img class="w-10 h-10" src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-7 h-7 max-w-none rounded-full"></a>
                        <div>
                            <a href="#"><h5 class="text-lg font-bold">Video Title 11</h5></a>
                            <p>81131 {{__('views')}}, 24 Apr, 2019</p>
                            <x-likes-and-dislikes likes-count="8038" dislikes-count="605"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Item 12 -->
            <div class="video-container">
                <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                    <a href="#"><img src="https://img.youtube.com/vi/owootTAuxic/hqdefault.jpg" class="thumbnail w-full h-auto rounded" alt="Video Title 12"></a>
                    <div class="flex space-x-4 p-2">
                        <a href="#" class="mt-2"><img class="w-10 h-10" src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-7 h-7 max-w-none rounded-full"></a>
                        <div>
                            <a href="#"><h5 class="text-lg font-bold">Video Title 12</h5></a>
                            <p>131131 {{__('views')}}, 25 Apr, 2020</p>
                            <x-likes-and-dislikes likes-count="11038" dislikes-count="555"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
