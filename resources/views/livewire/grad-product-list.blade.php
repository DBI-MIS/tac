<div>
      <!-- Landing Section -->
      <section class="relative min-h-[20svh] w-full bg-fixed bg-no-repeat bg-cover bg-center bg-gray-100 rounded-xl overflow-hidden"
      style="background-image: url({{ asset('/GRAD_BG.webp') }})">

          <div class="absolute inset-0">

              <div class="absolute inset-0 z-10 flex flex-col md:flex-row gap-2 lg:gap-6 bg-gradient-to-t from-slate-900/85 to-transparent md:px-16 md:py-12 p-6 md:items-center ">
                  <img src="{{ asset('GRAD_LOGO_WHITE.svg')}}" alt="GRAD" class="w-36 lg:w-[300px] ">
              <h1 class="w-full lg:w-[80%] text-balance text-3xl md:text-4xl lg:text-5xl font-bold text-white">Product Center</h1>
             
              
              </div>
          </div>
          

      </section>
      <div class="px-4 py-3 flex flex-row gap-2">
        <img src="{{ asset('list.png')}}" alt="list">
        <span class="text-lg font-light dark:text-white mt-2 ">GRAD is a large modern enterprise with the research & development, design, production, sales installation and maintenance for central air conditioning products, composite material products and solar energy products.</span>
   
      </div>
      <hr>

      <div class="mx-auto px-4 py-5 sm:px-6 sm:py-12 lg:max-w-9xl lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 py-4 gap-4">
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
