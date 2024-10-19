{{-- <div class="flex">
    <div class="bg-[#105d53] p-8">color</div>
    <div class="bg-[#b3eda9] p-8">color</div>
    <div class="bg-[#009a6e] p-8">color</div>
    <div class="bg-[#293e33] p-8">color</div>
    <div class="bg-[#ebfadb] p-8">color</div>
    <div class="bg-[#767f7d] p-8">color</div>
    <div class="bg-[#c2cbc9] p-8">color</div>
    <div class="bg-[#c7dc5a] p-8">color</div>
</div> --}}
<section class="w-full">

    <div class="flex items-center border-t border-green-800 dark:border-white">
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-green-800 px-2 py-6 dark:text-white">
            We Care About Our Customer's Expectation
        </h1>
    </div>

    <div class=" pb-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        @foreach ($testimonials as $testimonial)
            <div
                class="bg-[#ebfadb] flex flex-col justify-between text-gray-600  dark:text-white dark:bg-gray-400 transition-all duration-500 ease-in-out transform group max-h-max w-full h-auto overflow-hidden rounded-xl">
                <p
                    class="text-lg leading-8 max-h-24 overflow-hidden transition-all duration-500 ease-in-out transform group-hover:max-h-[600px] p-6">
                    <x-icon-quote-start class="size-5 inline-block -translate-y-2 " />
                    {{ $testimonial->description1 ?? 'No Data' }}
                    <x-icon-quote-end class="size-5 mx-auto my-4" />
                </p>
                
                <div class="flex items-center gap-4 mt-4 py-2 px-6 transition-all duration-500 ease-in-out 
                shadow-[0px_-15px_15px_-3px_rgba(0,0,0,0.1)] 
                {{-- shadow-lg --}}
                w-full">
                    <img src="{{ asset('storage/' . $testimonial->img_page) ?? 'No Data' }}"
                        class="w-14 h-14 rounded-full transition-all duration-500 ease-in-out transform group-hover:scale-110"
                        alt="Customer">
                    <div class="grid gap-1">
                        <h5 class="font-medium">{{ $testimonial->title ?? 'No Data' }}</h5>
                    </div>
                </div>
            </div>
        @endforeach



    </div>
</section>
