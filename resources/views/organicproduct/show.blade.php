@props(['organicproduct'])

<x-app-layout :title="$organicproduct->title">

    @section('meta_title', $organicproduct->title)
    @section('meta_type', 'website')
    @section('meta_description', $organicproduct->getExcerpt())
    @section('meta_image', $organicproduct->product_img ? asset("/storage/$organicproduct->product_img") : ' ')
    @section('meta_keywords', $organicproduct->title . ', ' . ', HVAC Equipment, Chiller, AHU, FCU')

    <article class="col-span-8 md:col-span-3 md:mt-10 mx-auto py-5 w-full h-full" style="max-width:900px">
        <div class="flex flex-col md:flex-row items-start gap-x-2 w-full">

            <div class=" w-full md:w-1/2 py-5  mb-5 rounded-xl border-opacity-10 p-2 bg-white border-blue-800">
                <div id="zoom-img" class="zoom-img w-auto h-[400px] md:h-[450px] bg-center bg-cover"
                    style="background-image: url({{ $organicproduct->product_img
                        ? asset('storage/' . $organicproduct->product_img)
                        : asset('/default-slide-1.webp') }})">

                </div>
            </div>

            <div class="grid grid-cols-3 gap-3 flex-grow w-full md:w-1/2">
                <div
                    class="col-span-3 w-full py-5 px-5 mb-5 rounded-xl border-l-4 border-opacity-10 p-2 bg-white border-blue-800">

                    <div class="flex flex-row justify-between w-full">

                        <h1 class="text-xl md:text-3xl font-bold text-left text-gray-800">
                            {{ $organicproduct->title }}
                        </h1>
                        <div class="flex items-center gap-2">
                        </div>
                    </div>


                    <div class="gap-x-2 mt-4">
                        <img class="w-auto h-auto max-w-[50px]"
                            src="/storage/{{ $organicproduct->product_brand->brand_logo }}" alt="">
                    </div>

                    <div class="flex flex-row gap-x-2 mt-2">
                        <div class="topics flex flex-wrap justify-start gap-1 my-auto py-1">
                            @foreach ($organicproduct->organicproductorganiccategories as $organicproductorganiccategory)
                                <x-badge wire:navigate
                                    href="{{ route('organicproducts.index', ['organicproductorganiccategory' => $organicproductorganiccategory->slug]) }}"
                                    :textColor="$organicproductorganiccategory->text_color" :bgColor="$organicproductorganiccategory->bg_color">
                                    {{ $organicproductorganiccategory->title }}
                                </x-badge>
                            @endforeach
                        </div>
                    </div>

                    

                    <h3 class="font-light mt-4 mb-2">Description</h3>
                    <div
                        class="mb-2 text-base items-center justify-between border-t border-b border-gray-100 px-2 text-balance">
                        @if ($organicproduct->description === null)
                            <tr>
                                <td>No Description to display.</td>
                            </tr>
                        @endif
                        @markdown( $organicproduct->description)
                    </div>

                    @if ($organicproduct->features)
                    <h3 class="font-light mt-4 mb-2">Features</h3>
                    <div class="mb-2 text-base items-center justify-between border-t border-b border-gray-100 px-2 text-balance">
                        @markdown( $organicproduct->features )
                    </div>
                    @endif

                    @if ($organicproduct->benefits)
                    <h3 class="font-light mt-4 mb-2">Benefits</h3>
                    <div
                        class="mb-2 text-base items-center justify-between border-t border-b border-gray-100 px-2 text-balance">
                        
                        @markdown( $organicproduct->benefits )
                    </div>
                    @endif

                    @if ($organicproduct->storage)
                    <h3 class="font-light mt-4 mb-2">Storage Conditions</h3>
                    <div
                        class="mb-2 text-base items-center justify-between border-t border-b border-gray-100 px-2 text-balance">
                        @markdown( $organicproduct->storage )
                    </div>
                    @endif

                    @if ($organicproduct->packaging)
                    <h3 class="font-light mt-4 mb-2">Packaging</h3>
                    <div
                        class="mb-2 text-base items-center justify-between border-t border-b border-gray-100 px-2 text-balance">
                        @markdown( $organicproduct->packaging )
                    </div>
                    @endif


                    @if ($organicproduct->usage)
                    <h3 class="font-light mt-4 mb-2">Usage</h3>
                    <div
                        class="mb-2 text-base items-center justify-between border-t border-b border-gray-100 px-2 text-balance">
                        @markdown( $organicproduct->usage )
                    </div>
                    @endif

                    @if (!empty($organicproduct->categories))
                        <div class="flex flex-row gap-x-2 mt-2">
                            <div class="topics flex flex-wrap justify-start gap-1 my-auto py-1 items-center">
                                <h1 class="text-gray-700">Tags:</h1>
                                @foreach ($organicproduct->categories as $category)
                                    <span
                                        class="mr-1 rounded-xl px-3 py-1 text-base bg-gray-200 text-nowrap">{{ $category }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endif


                    <div class="py-6 w-max mx-auto md:mx-0  ">
                        <div type="button"
                            class="group animate-minimal-bounce transition-all duration-200 hover:-translate-y-2 text-green-800 rounded-lg bg-gradient-to-r from-slate-200 via-gray-200 to-slate-400 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-slate-200 dark:focus:ring-slate-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shdow-green-800/80 px-8 py-6 text-center me-2 mb-2 flex flex-row items-center gap-1 cursor-pointer ">
                            <div
                                class="transition transform duration-500 ease-in-out flex flex-row group-hover:flex-col justify-start">
                                <span class="transition transform duration-500 ease-in-out text-xl md:text-3xl font-bold">Order
                                    Now!</span>
                                <span
                                    class="transition transform duration-500 ease-in-out hidden group-hover:block text-sm">Select>>></span>
                            </div>
        
                            <a href="https://shopee.ph/tacsupercocovco" rel="noreferrer nofollow" target="_blank">
                                <button type="button"
                                    class="group transition-all duration-200 hover:translate-y-1 rounded-full text-lg md:text-2xl font-bold">
                                    <x-icon-shopee_color class="size-16" />
                                </button>
                            </a>
        
                            <a href="https://www.lazada.com.ph/shop/team-asia-corporation-tac" rel="noreferrer nofollow"
                                target="_blank">
                                <button type="button"
                                    class="group transition-all duration-200 hover:translate-y-1 rounded-full  text-lg md:text-2xl font-bold">
                                    <x-icon-lazada_color class="size-16" />
                                </button>
                            </a>
        
                        </div>
                    </div>

                    {{-- <h3 class="font-light mt-4 mb-2">Technical Specification</h3> --}}
                    {{-- <div
                        class="mb-2 text-base items-center justify-between border-t border-b border-gray-100 px-2 text-wrap">
                        @if ($organicproduct->technical_specs === null)
                            <tr>
                                <td>No Data to Display</td>
                            </tr>
                        @endif
                        @markdown( $organicproduct->technical_specs )
                    </div> --}}

                    {{-- <livewire:product-response :product_id="$organicproduct->id" /> --}}



                </div>


            </div>

        </div>




        <div
            class="flex flex-col md:flex-row md:items-center items-start gap-5 w-full justify-between py-4 px-5 md:px-10 border-y-2 border-blue-200 mt-24 dark:text-white">
            <div class="flex flex-row items-center gap-2">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                    </svg>
                </div>

                <div class="text-sm text-nowrap">
                    <span>For More Info:</span>
                    <p>Contact Us @ </p>
                    <p>Tel: +632 8723 4461 to 64</p>
                </div>
            </div>

            <div class="flex flex-nowrap items-center gap-2">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                    </svg>

                </div>

                <div class="text-sm">
                    <span>Email</span>
                    <div class="flex flex-col">
                        <p>corporate@dbiphils.com,</p>
                        <p>reception@dbiphils.com</p>
                    </div>

                </div>
            </div>
            <div class="flex flex-wrap items-center gap-2">
                <div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                    </svg>

                </div>

                <div class="text-sm">
                    <span>Follow, Like & Subscribe to Our Socials</span>
                    <div class="flex flex-row md:flex-col lg:flex-row">

                        <div class="flex gap-1 mt-1 mr-5">
                            <div>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 32 32" fill="currentcolor">
                                    <path
                                        d="M16,2c-7.732,0-14,6.268-14,14,0,6.566,4.52,12.075,10.618,13.588v-9.31h-2.887v-4.278h2.887v-1.843c0-4.765,2.156-6.974,6.835-6.974,.887,0,2.417,.174,3.043,.348v3.878c-.33-.035-.904-.052-1.617-.052-2.296,0-3.183,.87-3.183,3.13v1.513h4.573l-.786,4.278h-3.787v9.619c6.932-.837,12.304-6.74,12.304-13.897,0-7.732-6.268-14-14-14Z">
                                    </path>
                                </svg>
                            </div>
                            <div><a href="https://www.facebook.com/teamasiacorporation" target="_blank"
                                    rel="noreferer">TAC</a></div>

                        </div>
                        <div class="flex gap-1 mt-1">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 32 32" fill="currentcolor">
                                    <path
                                        d="M26.111,3H5.889c-1.595,0-2.889,1.293-2.889,2.889V26.111c0,1.595,1.293,2.889,2.889,2.889H26.111c1.595,0,2.889-1.293,2.889-2.889V5.889c0-1.595-1.293-2.889-2.889-2.889ZM10.861,25.389h-3.877V12.87h3.877v12.519Zm-1.957-14.158c-1.267,0-2.293-1.034-2.293-2.31s1.026-2.31,2.293-2.31,2.292,1.034,2.292,2.31-1.026,2.31-2.292,2.31Zm16.485,14.158h-3.858v-6.571c0-1.802-.685-2.809-2.111-2.809-1.551,0-2.362,1.048-2.362,2.809v6.571h-3.718V12.87h3.718v1.686s1.118-2.069,3.775-2.069,4.556,1.621,4.556,4.975v7.926Z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </div>

                            <div><a href="https://www.linkedin.com/in/team-asia-corporation-9a89b01a9/" target="_blank"
                                    rel="noreferer">TAC</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </article>



    <script>
        var addZoom = function(target) {
            // FETCH CONTAINER + IMAGE
            var container = document.getElementById(target),
                imgsrc = container.currentStyle || window.getComputedStyle(container, false),
                imgsrc = imgsrc.backgroundImage.slice(4, -1).replace(/"/g, ""),
                img = new Image();

            // LOAD IMAGE + ATTACH ZOOM
            img.src = imgsrc;
            img.onload = function() {
                var imgWidth = img.naturalWidth,
                    imgHeight = img.naturalHeight,
                    ratio = imgHeight / imgWidth,
                    percentage = ratio * 50 + '%';

                // ZOOM ON MOUSE MOVE
                container.onmousemove = function(e) {
                    var boxWidth = container.clientWidth,
                        xPos = e.pageX - this.offsetLeft,
                        yPos = e.pageY - this.offsetTop,
                        xPercent = xPos / (boxWidth / 90) + '%',
                        yPercent = yPos / (boxWidth * ratio / 90) + '%';

                    Object.assign(container.style, {
                        backgroundPosition: xPercent + ' ' + yPercent,
                        backgroundSize: imgWidth + 'px'
                    });

                    //   TO CONTROL if want mas lower or higher pag zoom

                    //   var zoomFactor = 0.9;
                    // var newBackgroundSize = (imgWidth * zoomFactor) + 'px';

                    // Object.assign(container.style, {
                    //     backgroundPosition: xPercent + ' ' + yPercent,
                    //     backgroundSize: newBackgroundSize});


                };

                // RESET ON MOUSE LEAVE
                container.onmouseleave = function(e) {
                    Object.assign(container.style, {
                        backgroundPosition: 'center',
                        backgroundSize: 'cover'
                    });
                };
            }
        };

        window.addEventListener("mousemove", function() {
            addZoom("zoom-img");
        });
    </script>

</x-app-layout>
