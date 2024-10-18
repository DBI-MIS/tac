<nav x-data="{ open: false, projectsOpen: false, newsOpen: false, productOpen: false }"
    class="bg-white dark:bg-gray-800 border-t-4 border-red-600 dark:border-gray-700 shadow-md shadow-slate-800/10">

    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-2 lg:px-32 ">

        <div class="flex flex-row justify-between h-full">

            <!-- Logo -->
            <div class="shrink-0 flex items-center py-4">
                <a href="{{ route('home') }}" wire:navigate>
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                </a>
            </div>

            <div class="h-auto w-full flex flex-row justify-end">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                        {{ __('Home') }}
                    </x-nav-link>

                    <x-nav-container {{-- :href="route('projects.index')" --}} :active="request()->routeIs('projects.index')" {{-- wire:navigate --}}
                        @mouseover="projectsOpen = true" @mouseleave="projectsOpen = false">
                        <span class="cursor-pointer">{{ __('Projects') }}</span>
                        <div x-show="projectsOpen" @click.away="projectsOpen = false"
                            class="absolute left-0 top-10 mt-5 bg-white text-gray-800 rounded shadow-lg z-20 dark:bg-gray-800 dark:text-gray-200 overflow-hidden"
                            style="display: none; width: 20ch;">
                            <x-nav-link :href="route('projects.index')" :active="request()->routeIs('projects.index')" wire:navigate
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 w-full">
                                TICA Projects
                            </x-nav-link>



                        </div>
                    </x-nav-container>

                    <x-nav-container {{-- :href="route('newsarticles.index')" --}} :active="request()->routeIs('newsarticles.index') || request()->routeIs('newsarticles.show')" wire:navigate @mouseover="newsOpen = true"
                        @mouseleave="newsOpen = false">
                        <span class="cursor-pointer">{{ __('News') }}</span>

                        <div x-show="newsOpen" @click.away="newsOpen = false"
                            class="absolute right-0 top-10 mt-5 bg-white text-gray-800 rounded shadow-lg z-20 py-2 px-4 dark:bg-gray-800 dark:text-gray-200 overflow-hidden"
                            style="display: none; width: 50ch;">
                            <div class="flex flex-row justify-between">
                                <span class="text-md">Latest News & Articles</span>
                                <span class="text-sm cursor-pointer text-red-600 dark:text-red-600" href="{{route('newsarticles.index')}}" wire:navigate>See All</span>
                            </div>
                            <hr>

                            @foreach ($recentArticles as $article)
                                <x-nav-link :href="route('newsarticles.show', $article->slug)" 
                                    {{-- :active="request()->routeIs('newsarticles.show', ['newsarticle' => $article->slug])" --}}
                                    :active="request()->is('newsarticles/' . $article->slug)"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 w-full" wire:navigate>
                                    <div class="flex flex-row gap-2">
                                        <img 
                                        src="{{ $article->img ? asset('storage/' . $article->img) : asset('/default-slide-2.webp') }}"
                                        {{-- src="{{ $article->img }}"  --}}
                                        alt="{{ $article->title }}"
                                        style="max-width: 100px">
                                        <div class="flex flex-col justify-between">
                                            <span>{{ $article->title }}</span>
                                            <span class="text-xs">{{ \Carbon\Carbon::parse($article->published_at)->format('M d, Y') }}</span>
                                            

                                        </div>
                                       
                                    </div>
                                    
                                </x-nav-link>
                            @endforeach

                        </div>
                    </x-nav-container>

                    {{-- <x-nav-link :href="route('newsarticles.index')" :active="request()->routeIs('newsarticles.index')" wire:navigate>
                        {{ __('News') }}
                    </x-nav-link> --}}

                    <x-nav-container :active="request()->routeIs('ticaProducts') || request()->routeIs('products.index') || request()->routeIs('products.show')"
                        wire:navigate @mouseover="productOpen = true"
                        @mouseleave="productOpen = false">
                        <span class="cursor-pointer">{{ __('Products') }}</span>

                        <div x-show="productOpen" @click.away="productOpen = false"
                            class="absolute right-0 top-10 mt-5 bg-white text-gray-800 rounded shadow-lg z-20 py-2 px-4 dark:bg-gray-800 dark:text-gray-200 overflow-hidden"
                            style="display: none; width: 25ch;">

                          
                                <x-nav-link 
                                :href="route('ticaProducts')" 
                                :active="request()->routeIs('ticaProducts')" wire:navigate
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 w-full">
                                    TICA Equipment
                                </x-nav-link>
                                
                                <hr>

                                <x-nav-link 
                                :href="route('supercoco')" 
                                :active="request()->routeIs('supercoco')" wire:navigate
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 w-full">
                                    SUPERCOCO Products
                                </x-nav-link>

                                <x-nav-link 
                                :href="route('cocoking')" 
                                :active="request()->routeIs('cocoking')" wire:navigate
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 w-full">
                                    COCOKING Products
                                </x-nav-link>

                                <x-nav-link 
                                :href="route('juv')" 
                                :active="request()->routeIs('juv')" wire:navigate
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 w-full">
                                    JUV Products
                                </x-nav-link>
                                
                                <hr>

                                <x-nav-link 
                                :href="route('health-info')" 
                                :active="request()->routeIs('health-info')" wire:navigate
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 text-red-600 w-full">
                                <div class="flex flex-col">
                                    <div class="flex flex-row gap-1">
                                        <span class="w-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="Heart-Cross--Streamline-Flex"><g id="heart-cross--health-sign-medical-symbol-heart-cross"><path id="Union" fill="#fa8f8f" fill-rule="evenodd" d="M13.75 4.941c-0.023 -1.582 -0.92 -3.14 -2.297 -3.782a3.199 3.199 0 0 0 -2.36 -0.139c-0.705 0.224 -1.412 0.683 -2.093 1.405 -0.681 -0.722 -1.388 -1.18 -2.093 -1.405a3.199 3.199 0 0 0 -2.36 0.139C1.17 1.801 0.273 3.359 0.25 4.941v0.008c0 2.307 1.372 4.351 2.826 5.786a12.326 12.326 0 0 0 2.183 1.726c0.338 0.205 0.657 0.37 0.94 0.486 0.271 0.11 0.553 0.194 0.801 0.194s0.53 -0.084 0.8 -0.194c0.284 -0.115 0.603 -0.28 0.94 -0.486a12.328 12.328 0 0 0 2.184 -1.726C12.378 9.3 13.75 7.256 13.75 4.95l0 -0.008Z" clip-rule="evenodd" stroke-width="1"></path><path id="Union_2" fill="#c5282b" fill-rule="evenodd" d="M7.625 5.397a0.625 0.625 0 1 0 -1.25 0v1.388H4.987a0.625 0.625 0 0 0 0 1.25h1.388v1.387a0.625 0.625 0 0 0 1.25 0V8.035h1.388a0.625 0.625 0 0 0 0 -1.25H7.625V5.397Z" clip-rule="evenodd" stroke-width="1"></path></g></svg>
                                        </span>    
                                            <span class="w-full">Health Info</span>
                                    </div>

                                
                              
                                    <span class="text-[10px]">Health Benefits of Coconut Oil vs...</span>
                                </div>
                                </x-nav-link>
                            

                        </div>
                    </x-nav-container>

                    {{-- <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" wire:navigate>
                        {{ __('Products') }}
                    </x-nav-link> --}}

                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                        {{ __('About Us') }}
                    </x-nav-link>

                </div>

                <!-- Darkmode Toggler -->
                <button x-on:click="darkMode = !darkMode" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm px-2.5 my-auto ml-6 h-10 w-10 border border-gray-200 dark:border-gray-600">

                    <svg x-show="!darkMode" class="w-5 h-5 text-center" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>

                    <svg x-show="darkMode" class="w-5 h-5 text-center" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>

                </button>


                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">

                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">

                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </button>
                </div>

            </div>

        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">

            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('Home') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('projects.index')" :active="request()->routeIs('projects.index')" wire:navigate>
                {{ __('Projects') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('newsarticles.index')" :active="request()->routeIs('newsarticles.index')" wire:navigate>
                {{ __('News') }}
            </x-responsive-nav-link>

                <details
                class="flex flex-col md:flex-row justify-between md:items-center w-full py-2 group relative">

                <summary
                class="text-sm text-gray-700 mr-2 cursor-pointer flex flex-row justify-between items-center list-none ">

                <x-responsive-nav-container
                {{-- :href="route('products.index')" --}}
                :active="request()->routeIs('ticaProducts') || request()->routeIs('products.index') || request()->routeIs('products.show')" 
                class="flex flex-row justify-between">
                    {{ __('Products') }}
                </x-responsive-nav-container>

                <span class="transition group-open:rotate-180 dark:text-gray-200">
                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                        width="24">
                        <path d="M6 9l6 6 6-6">
                        </path>

                    </svg>
                </span>

               
                
                </summary>

                <div class="w-full ml-4">
                    <x-responsive-nav-link
                    :href="route('ticaProducts')" 
                    :active="request()->routeIs('ticaProducts')" wire:navigate
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 w-full">
                        TICA Equipment
                   </x-responsive-nav-link>
   
                   <hr>
   
                   <x-responsive-nav-link
                   :href="route('supercoco')"
                   :active="request()->routeIs('supercoco')"
                   wire:navigate
                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 w-full">
                      SUPERCOCO Products
                  </x-responsive-nav-link>
   
                  <x-responsive-nav-link
                  :href="route('products.index')"
                  :active="request()->routeIs('products.index')"
                  wire:navigate
                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 w-full">
                     COCOKING Products
                 </x-responsive-nav-link>
   
                 <x-responsive-nav-link
                 :href="route('juv')"
                 :active="request()->routeIs('juv')"
                 wire:navigate
               class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 w-full">
                    JUV Products
                </x-responsive-nav-link>
                </div>

                <hr>

                <x-responsive-nav-link 
                :href="route('health-info')" 
                :active="request()->routeIs('health-info')"
                wire:navigate
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-500 text-red-600 w-full">
                <div class="flex flex-col">
                    <div class="flex flex-row gap-1">
                        <span class="w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="Heart-Cross--Streamline-Flex"><g id="heart-cross--health-sign-medical-symbol-heart-cross"><path id="Union" fill="#fa8f8f" fill-rule="evenodd" d="M13.75 4.941c-0.023 -1.582 -0.92 -3.14 -2.297 -3.782a3.199 3.199 0 0 0 -2.36 -0.139c-0.705 0.224 -1.412 0.683 -2.093 1.405 -0.681 -0.722 -1.388 -1.18 -2.093 -1.405a3.199 3.199 0 0 0 -2.36 0.139C1.17 1.801 0.273 3.359 0.25 4.941v0.008c0 2.307 1.372 4.351 2.826 5.786a12.326 12.326 0 0 0 2.183 1.726c0.338 0.205 0.657 0.37 0.94 0.486 0.271 0.11 0.553 0.194 0.801 0.194s0.53 -0.084 0.8 -0.194c0.284 -0.115 0.603 -0.28 0.94 -0.486a12.328 12.328 0 0 0 2.184 -1.726C12.378 9.3 13.75 7.256 13.75 4.95l0 -0.008Z" clip-rule="evenodd" stroke-width="1"></path><path id="Union_2" fill="#c5282b" fill-rule="evenodd" d="M7.625 5.397a0.625 0.625 0 1 0 -1.25 0v1.388H4.987a0.625 0.625 0 0 0 0 1.25h1.388v1.387a0.625 0.625 0 0 0 1.25 0V8.035h1.388a0.625 0.625 0 0 0 0 -1.25H7.625V5.397Z" clip-rule="evenodd" stroke-width="1"></path></g></svg>
                        </span>    
                            <span class="w-full">Health Info</span>
                    </div>

                
              
                    <span class="text-[10px]">Health Benefits of Coconut Oil vs...</span>
                </div>
                </x-responsive-nav-link>

                 


                </details>

                <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                    {{ __('About Us') }}
                </x-responsive-nav-link>

        </div>


    </div>


</nav>
