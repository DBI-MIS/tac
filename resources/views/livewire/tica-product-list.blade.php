<div>
     <!-- Landing Section -->
       
     <section class="relative min-h-[20svh] w-full bg-fixed bg-no-repeat bg-cover bg-center bg-gray-100 rounded-xl overflow-hidden"
     style="background-image: url({{ asset('/TICA_BG.webp') }})">

         <div class="absolute inset-0">

             <div class="absolute inset-0 z-10 flex flex-col md:flex-row gap-2 lg:gap-6 bg-gradient-to-t from-slate-900/85 to-transparent md:px-16 md:py-12 p-6 md:items-center ">
                 <img src="{{ asset('tica_logo_white.svg')}}" alt="GRAD" class="w-36 lg:w-[250px] ">
             <h1 class="w-full lg:w-[80%] text-balance text-3xl md:text-4xl lg:text-5xl font-bold text-white">Products</h1>
             <p 
             class=" w-full  text-md md:text-lg lg:text-2xl text-white "
             x-data="{ texts: ['We keep improving and striving for perfection.'] }"
             x-typewriter.3000ms="texts">We keep improving and striving for perfection.
             </p>
             
             </div>
         </div>

     </section>

     <div class="mx-auto px-4 py-5 sm:px-6 sm:py-12 lg:max-w-9xl lg:px-8">
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            @if ($this->products->count() == 0)
            <tr>
                <td colspan="4">No Products to display.</td>
            </tr>
            @endif

            @foreach($this->products as $product)
            <x-page.featured-grad-tica :product="$product" />
            @endforeach
        </div>
        <div class="my-3">
            {{ $this->products->onEachSide(1)->links() }}
        </div>
    </div>
</div>
