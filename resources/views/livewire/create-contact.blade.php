<div>
    <!-- Modal Content -->
    <form wire:submit.prevent="create" class="space-y-2 md:p-6">
        {{-- close button --}}
        {{-- <button type="button" wire:click="toggleModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button> --}}
        <div class="mb-10">
            {{ $this->form }}
        </div>
        <button type="submit" class="w-full  py-2 px-4 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
            Submit
        </button>
    </form>

    <!-- Success Message -->
    @if($showSuccessMessage)

        <div class="fixed top-16 right-16 transform mt-4 p-4 border-2 border-green-600 bg-green-300 text-gray-700 rounded-lg shadow-md flex items-center justify-between space-x-4 z-50">
            <span class="text-lg">
                Your message has been sent successfully! 
                <br>
                To close the form click outside the form.
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
