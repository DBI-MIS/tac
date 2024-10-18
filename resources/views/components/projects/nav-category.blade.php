@props(['category'])
<nav class="flex flex-row flex-wrap md:flex-col border-none md:border-l-2 border-gray-300" >
    <span class="font-extrabold text-red-600 dark:text-white w-full">CATEGORIES</span>
    <hr>

    <a href="{{ route('projects.tica', ['category' => 'Semicon']) }}"
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Semicon' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600' }}
        transition duration-300 ease-in-out py-1 px-1">
        Semicon
     </a>

    <a href="{{ route('projects.tica', ['category' => 'Chemicals']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Chemicals' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Chemicals
    </a>

    <a href="{{ route('projects.tica', ['category' => 'F&B']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'F&B' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       F&B
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Garment Sector']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Garment Sector' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Garment Sector
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Hospital']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Hospital' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Hospital
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Hotel']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Hotel' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Hotel
    </a>

    <a href="{{ route('projects.tica', ['category' => 'University']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'University' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       University
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Research Center']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Research Center' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Research Center
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Office']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Office' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Office
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Plastic Factory']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Plastic Factory' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Plastic Factory
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Solar']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Solar' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Solar
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Medical']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Medical' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Medical
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Microelectronics']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Microelectronics' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Microelectronics
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Commercial Building']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Commercial Building' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Commercial Building
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Church']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Church' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Church
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Cinema']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Cinema' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Cinema
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Factory']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Factory' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Factory
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Pharmaceutical Factory']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Pharmaceutical Factory' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Pharmaceutical Factory
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Museum']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Museum' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Museum
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Restaurant']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Restaurant' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Restaurant
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Airport']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Airport' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Airport
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Governments & Private']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Governments & Private' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Governments & Private
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Hotel & Shopping Center']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Hotel & Shopping Center' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Hotel & Shopping Center
    </a>

    <a href="{{ route('projects.tica', ['category' => 'Electronic Factory']) }}" 
        wire:navigate
        class="text-sm font-semibold  {{ $category === 'Electronic Factory' ? '  bg-red-600 dark:bg-gray-900 rounded-md md:rounded-r-md text-white ' : 
        'text-gray-800 dark:text-white hover:text-red-600 ' }}
        transition duration-300 ease-in-out py-1 px-1">
       Electronic Factory
    </a>

</nav>