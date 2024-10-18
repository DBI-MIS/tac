<div class="max-w-full w-full dark:text-gray-100">

   
    @if(isset($healthPages['Virgin Coconut Oil']) && isset($healthPages['Other Oils']))
    <table class="w-full table">
        <thead class="text-center">
            {{-- <tr>
                <th colspan="2">
                    <img src="{{  asset('/pp1.webp') }}" class="w-full" />
                </th>
            </tr> --}}
            
                <tr class="">
                    <th class="bg-gradient-to-tr from-emerald-500 to-green-500 w-1/2">
                        <h3 class="text-2xl text-white font-bold py-10 px-2">{{ $healthPages['Virgin Coconut Oil']->title }}</h3>
                    </th>
                    <th class="bg-gradient-to-br from-emerald-700 to-green-700 w-1/2">
                        <h3 class="text-2xl text-white font-bold">{{ $healthPages['Other Oils']->title }}</h3>
                    </th>
                    
                    
                </tr>
            

        </thead>
        <tbody class="text-center">
            <tr>
                <td colspan="2" class=" h-[50px]">
                    <span >• Chemical Structure •</span>
                </td>
                
            </tr>
            <tr>
                
                <td class="py-10 px-2 bg-gradient-to-tr from-emerald-500 to-green-500">
                    <span class="text-white">@markdown($healthPages['Virgin Coconut Oil']->chemical_structure)</span>
                </td>
                <td class="py-10 px-2 bg-gradient-to-br from-emerald-700 to-green-700">
                    <span class="text-white">@markdown($healthPages['Other Oils']->chemical_structure)</span>
                </td>
            </tr>

            <tr>
                <td colspan="2" class=" h-[50px]">
                    <span >• Characteristics (Major Fatty Acids) •</span>
                </td>
                
            </tr>
            <tr>
                
                <td class="py-10 px-2 bg-gradient-to-tr from-emerald-500 to-green-500">
                    <span class="text-white">@markdown($healthPages['Virgin Coconut Oil']->characteristics)</span>
                </td>
                <td class="py-10 px-2 bg-gradient-to-br from-emerald-700 to-green-700">
                    <span class="text-white">@markdown($healthPages['Other Oils']->characteristics)</span>
                </td>
            </tr>

            <tr>
                <td colspan="2" class=" h-[50px]">
                    <span >• Process •</span>
                </td>
                
            </tr>
            <tr>
                
                <td class="py-10 px-2 bg-gradient-to-tr from-emerald-500 to-green-500">
                    <span class="text-white">@markdown($healthPages['Virgin Coconut Oil']->process)</span>
                </td>
                <td class="py-10 px-2 bg-gradient-to-br from-emerald-700 to-green-700">
                    <span class="text-white">@markdown($healthPages['Other Oils']->process)</span>
                </td>
            </tr>

            <tr>
                <td colspan="2" class=" h-[50px]">
                    <span >• Effect •</span>
                </td>
                
            </tr>
            <tr>
                
                <td class="py-10 px-2 bg-gradient-to-tr from-emerald-500 to-green-500">
                    <span class="text-white">@markdown($healthPages['Virgin Coconut Oil']->effect)</span>
                </td>
                <td class="py-10 px-2 bg-gradient-to-br from-emerald-700 to-green-700">
                    <span class="text-white">@markdown($healthPages['Other Oils']->effect)</span>
                </td>
            </tr>

            <tr>
                <td colspan="2" class=" h-[50px]">
                    <span >• Age •</span>
                </td>
                
            </tr>
            <tr>
                
                <td class="py-10 px-2 bg-gradient-to-tr from-emerald-500 to-green-500">
                    <span class="text-white">@markdown($healthPages['Virgin Coconut Oil']->age)</span>
                </td>
                <td class="py-10 px-2 bg-gradient-to-br from-emerald-700 to-green-700">
                    <span class="text-white">@markdown($healthPages['Other Oils']->age)</span>
                </td>
            </tr>

        </tbody>
    </table>
   

   



    @endif

   

</div>