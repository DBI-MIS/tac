<div>
    <button wire:click="$set('showModal', true)"  class=" mt-3 inline-flex flex-nowrap items-center justify-center h-10 px-4 font-medium tracking-wide text-white transition duration-200 bg-red-600 rounded-lg hover:bg-gray-800 focus:shadow-outline focus:outline-none">
      Inquire here
    </button>

    <!-- Modal -->
    @if($showModal)
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" wire:ignore.self>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md max-w-xl w-full mx-4 sm:mx-6 md:mx-8 lg:mx-auto relative">
                <button wire:click="$set('showModal', false)" class="absolute top-2 right-2 p-2 text-gray-500 bg-gray-200 rounded-full hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <form wire:submit.prevent="create" class="space-y-2 p-6">
                    {{ $this->form }}
                    <button type="submit" class="w-full py-2 px-4 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Submit
                    </button>
                </form>
                
                <x-filament-actions::modals />
            </div>
           
        </div>
    @endif

    @if($showSuccessMessage)
    <div class="fixed top-16 right-16 transform mt-4 p-4 border-2 border-green-600 bg-green-300 text-gray-700 rounded-lg shadow-md flex items-center justify-between space-x-4 z-50">
        <span class="text-lg">
            Your message inquiry has been sent successfully! 
            <br>
           
        </span>
        <button type="button" wire:click="$set('showSuccessMessage', false)" class="text-black hover:text-black focus:outline-none">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    {{-- <div class="fixed top-40 right-40 transform">To close this form click outside the form modal</div> --}}
@endif
</div>
