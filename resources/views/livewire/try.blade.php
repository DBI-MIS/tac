<div>
    <button wire:click="$set('showModal', true)"  class="w-full mt-3 inline-flex items-center justify-center h-10 px-4 font-medium tracking-wide text-white transition duration-200 bg-blue-900 rounded-lg hover:bg-gray-800 focus:shadow-outline focus:outline-none">
      Inquire here
    </button>

    <!-- Modal -->
    @if($showModal)
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" wire:ignore.self>
            <div class="bg-white rounded-lg shadow-md max-w-xl w-full mx-4 sm:mx-6 md:mx-8 lg:mx-auto relative">
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
'Uzbekistan - Akfa Medline Clinic, Uzbekistan',
'Villa, Karachi, Pakistan',
'Maldives Seaplane Airport',
'Puertos Offices Argentina',
'Argentina - Pilará Residence',
'Cambodia - Integrating Hotel, Cambodia',
'Thailand- Huanji Gene Technology',
'Russia - Biocad Biopharmaceutical Factory, Russia',
'Nipro - Indonesia',
'Uzbekistan - ZAMIN BIO HEALTH, Uzbekistan',
'Uzbekistan - Merrymed Farm Factory, Uzbekistan',
'Europe - Pharmaceutical plant',


'Ukraine - Citi Doctor, Ukraine',
'Indonesia-Netherland Embassy',
'Indonesia - National Police Headquarters',
'Villa, Karachi, Pakistan',
'Maldives Seaplane Airpor',
'Puertos Offices Argentina',
'Argentina - Pilará Residence',
'Argentina - Mendoza Government House Argentina',
'Libya - Tripoli International Airport',
'Vietnam - Museum Cao Bang',
'Europe - Opera and Ballet Theatre, 1864, 1959-1961',
'Tashkent - Tashkent Berinuy Ice Rink',
'Indonesia - Cibinong City Mall',
'Argentina - TUCSON Restaurant',
'Uzbekistan - Anor Plaza Shopping Center, Uzbekistan',
'Argentina - DAC Center',

'Indonesia - Cinema Platinum',
'Indonesia - Plaza Sukaramai',
'Philippines - SM City Shopping Mall, Philippines',
'Cambodia - Integrating Hotel, Cambodia',
'Indonesia - Conrad Resort Bali',
'Basra - Basra Mall Kourah',
'Sohar - Citcy Center Sohar',
'Electronic Factory/ Industrial cooling 10',
'Vietnam - Imperial Star Solar Energy',
'Vietnam- Foxconn CTTV',

'Vietnam – Qisda',
'Vietnam – Neweb',
'Vietnam - Amphenol',
'Cambodia - Imperial Star ,Solar Energy',
'Cambodia - BARDON Energy,
'Viet Nam - Gemtek Ha Nam',
'Viet Nam - Olam',
'Romania - Strada Fagului Plant',
</div>
