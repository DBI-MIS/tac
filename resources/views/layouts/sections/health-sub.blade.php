<div class="max-w-full w-full dark:text-gray-100 flex flex-col">

    @if (isset($healthPages['Sunflower Oil']) &&
            isset($healthPages['Olive Oil']) &&
            isset($healthPages['Peanut Oil']) &&
            isset($healthPages['Corn Oil']) &&
            isset($healthPages['Canola Oil']) &&
            isset($healthPages['Soybean Oil']) &&
            isset($healthPages['Palm Oil']))
        <details open class="flex flex-col md:flex-row justify-between md:items-center w-full group relative">

            <summary
                class="bg-gradient-to-br from-emerald-700 to-green-700 text-sm text-gray-700 mr-2 cursor-pointer flex flex-col md:flex-row justify-between items-center list-none w-full">
                <div class="flex flex-row justify-between w-full py-6 px-4 items-center">
                    <h3 class="text-xl text-white font-bold">{{ $healthPages['Sunflower Oil']->title }}</h3>
                    <span class="transition group-open:rotate-180 text-white">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                            width="24">
                            <path d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </span>
                </div>

            </summary>

            <div class="flex gap-1 group-open:opacity-100 overflow-hidden">
                <table class="w-full table text-left">
                    <thead>
                        <tr>
                            <th class="w-1/4"></th>
                            <th class="w-3/4"></th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Chemical Structure:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Sunflower Oil']->chemical_structure)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Characteristics (Major Fatty Acids):</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Sunflower Oil']->characteristics)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Process:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Sunflower Oil']->process)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Effect:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Sunflower Oil']->effect)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Age:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Sunflower Oil']->age)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </details>

        <details class="flex flex-col md:flex-row justify-between md:items-center w-full group relative">

            <summary
                class="bg-gradient-to-br from-emerald-700 to-green-700 text-sm text-gray-700 mr-2 cursor-pointer flex flex-col md:flex-row justify-between items-center list-none w-full ">
                <div class="flex flex-row justify-between w-full py-6 px-4 items-center">
                    <h3 class="text-xl text-white font-bold">{{ $healthPages['Olive Oil']->title }}</h3>
                    <span class="transition group-open:rotate-180 text-white">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                            width="24">
                            <path d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </span>
                </div>

            </summary>

            <div class="flex gap-1 group-open:opacity-100 overflow-hidden">
                <table class="w-full table text-left">
                    <thead>
                        <tr>
                            <th class="w-1/4"></th>
                            <th class="w-3/4"></th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Chemical Structure:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Olive Oil']->chemical_structure)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Characteristics (Major Fatty Acids):</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Olive Oil']->characteristics)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Process:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Olive Oil']->process)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Effect:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Olive Oil']->effect)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Age:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Olive Oil']->age)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </details>

        <details class="flex flex-col md:flex-row justify-between md:items-center w-full group relative">

            <summary
                class="bg-gradient-to-br from-emerald-700 to-green-700 text-sm text-gray-700 mr-2 cursor-pointer flex flex-col md:flex-row justify-between items-center list-none w-full ">
                <div class="flex flex-row justify-between w-full py-6 px-4 items-center">
                    <h3 class="text-xl text-white font-bold">{{ $healthPages['Peanut Oil']->title }}</h3>
                    <span class="transition group-open:rotate-180 text-white">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                            width="24">
                            <path d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </span>
                </div>

            </summary>

            <div class="flex gap-1 group-open:opacity-100 overflow-hidden">
                <table class="w-full table text-left">
                    <thead>
                        <tr>
                            <th class="w-1/4"></th>
                            <th class="w-3/4"></th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Chemical Structure:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Peanut Oil']->chemical_structure)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Characteristics (Major Fatty Acids):</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Peanut Oil']->characteristics)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Process:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Peanut Oil']->process)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Effect:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Peanut Oil']->effect)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Age:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Peanut Oil']->age)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </details>

        <details class="flex flex-col md:flex-row justify-between md:items-center w-full group relative">

            <summary
                class="bg-gradient-to-br from-emerald-700 to-green-700 text-sm text-gray-700 mr-2 cursor-pointer flex flex-col md:flex-row justify-between items-center list-none w-full ">
                <div class="flex flex-row justify-between w-full py-6 px-4 items-center">
                    <h3 class="text-xl text-white font-bold">{{ $healthPages['Corn Oil']->title }}</h3>
                    <span class="transition group-open:rotate-180 text-white">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            viewBox="0 0 24 24" width="24">
                            <path d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </span>
                </div>

            </summary>

            <div class="flex gap-1 group-open:opacity-100 overflow-hidden">
                <table class="w-full table text-left">
                    <thead>
                        <tr>
                            <th class="w-1/4"></th>
                            <th class="w-3/4"></th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Chemical Structure:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Corn Oil']->chemical_structure)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Characteristics (Major Fatty Acids):</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Corn Oil']->characteristics)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Process:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Corn Oil']->process)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Effect:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Corn Oil']->effect)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Age:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Corn Oil']->age)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </details>

        <details class="flex flex-col md:flex-row justify-between md:items-center w-full group relative">

            <summary
                class="bg-gradient-to-br from-emerald-700 to-green-700 text-sm text-gray-700 mr-2 cursor-pointer flex flex-col md:flex-row justify-between items-center list-none w-full ">
                <div class="flex flex-row justify-between w-full py-6 px-4 items-center">
                    <h3 class="text-xl text-white font-bold">{{ $healthPages['Canola Oil']->title }}</h3>
                    <span class="transition group-open:rotate-180 text-white">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            viewBox="0 0 24 24" width="24">
                            <path d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </span>
                </div>

            </summary>

            <div class="flex gap-1 group-open:opacity-100 overflow-hidden">
                <table class="w-full table text-left">
                    <thead>
                        <tr>
                            <th class="w-1/4"></th>
                            <th class="w-3/4"></th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Chemical Structure:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Canola Oil']->chemical_structure)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Characteristics (Major Fatty Acids):</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Canola Oil']->characteristics)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Process:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Canola Oil']->process)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Effect:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Canola Oil']->effect)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Age:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Canola Oil']->age)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </details>

        <details class="flex flex-col md:flex-row justify-between md:items-center w-full group relative">

            <summary
                class="bg-gradient-to-br from-emerald-700 to-green-700 text-sm text-gray-700 mr-2 cursor-pointer flex flex-col md:flex-row justify-between items-center list-none w-full ">
                <div class="flex flex-row justify-between w-full py-6 px-4 items-center">
                    <h3 class="text-xl text-white font-bold">{{ $healthPages['Soybean Oil']->title }}</h3>
                    <span class="transition group-open:rotate-180 text-white">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            viewBox="0 0 24 24" width="24">
                            <path d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </span>
                </div>

            </summary>

            <div class="flex gap-1 group-open:opacity-100 overflow-hidden">
                <table class="w-full table text-left">
                    <thead>
                        <tr>
                            <th class="w-1/4"></th>
                            <th class="w-3/4"></th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Chemical Structure:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Soybean Oil']->chemical_structure)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Characteristics (Major Fatty Acids):</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Soybean Oil']->characteristics)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Process:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Soybean Oil']->process)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Effect:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Soybean Oil']->effect)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Age:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Soybean Oil']->age)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </details>

        <details class="flex flex-col md:flex-row justify-between md:items-center w-full group relative">

            <summary
                class="bg-gradient-to-br from-emerald-700 to-green-700 text-sm text-gray-700 mr-2 cursor-pointer flex flex-col md:flex-row justify-between items-center list-none w-full ">
                <div class="flex flex-row justify-between w-full py-6 px-4 items-center">
                    <h3 class="text-xl text-white font-bold">{{ $healthPages['Palm Oil']->title }}</h3>
                    <span class="transition group-open:rotate-180 text-white">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            viewBox="0 0 24 24" width="24">
                            <path d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </span>
                </div>

            </summary>

            <div class="flex gap-1 group-open:opacity-100 overflow-hidden">
                <table class="w-full table text-left">
                    <thead>
                        <tr>
                            <th class="w-1/4"></th>
                            <th class="w-3/4"></th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Chemical Structure:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Palm Oil']->chemical_structure)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Characteristics (Major Fatty Acids):</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Palm Oil']->characteristics)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Process:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Palm Oil']->process)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Effect:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Palm Oil']->effect)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">Age:</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-sm text-balance">@markdown($healthPages['Palm Oil']->age)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </details>
    @endif
</div>

<script>
    document.querySelectorAll('details').forEach((details) => {
        details.addEventListener('toggle', function() {
            if (this.open) {
                document.querySelectorAll('details[open]').forEach((openDetails) => {
                    if (openDetails !== this) {
                        openDetails.removeAttribute('open');
                    }
                });
            }
        });
    });
</script>
