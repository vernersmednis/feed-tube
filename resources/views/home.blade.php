<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Video Item 1 -->
            <div class="block p-4 bg-white rounded-lg shadow hover:bg-gray-100">
                <a href="#"><img src="https://img.youtube.com/vi/Nx-x3biNbHI/hqdefault.jpg" class="w-full h-auto rounded" alt="Video Title 1"></a>
                <div class="flex space-x-4 p-2">
                    <a href="#" class="mt-2"><img src="https://yt3.ggpht.com/0hAbF-TC91U6I_Fxdz-XSOJBThknQjVzy6WMod6S5v9HZvJJ2v1WmmYhUbfT3N6-wXEpkLE9Vw=s88-c-k-c0x00ffffff-no-rj" alt="Channel Icon" class="w-10 h-10 max-w-none rounded-full"></a>
                    <div>
                        <a href="#"><h5 class="text-lg font-bold">Video Title 1</h5></a>
                        <p>3012 views, 24 Aug, 2024</p>
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
                            <p>918 views, 31 Jan, 2020</p>
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
                            <p>2038 views, 6 Jul, 2019</p>
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
                            <p>1512 views, 28 Jul, 2021</p>
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
                            <p>8114 views, 28 Feb, 2021</p>
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
                            <p>50234 views, 13 Mar, 2018</p>
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
                            <p>10234 views, 25 Sep, 2023</p>
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
                            <p>50001 views, 25 Sep, 2023</p>
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
                            <p>100101 views, 11 Oct, 2017</p>
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
                            <p>101131 views, 12 Dec, 2017</p>
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
                            <p>81131 views, 24 Apr, 2019</p>
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
                            <p>131131 views, 25 Apr, 2020</p>
                            <x-likes-and-dislikes likes-count="11038" dislikes-count="555"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
