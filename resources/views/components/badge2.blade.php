@props (['textColor','bgColor', 'hoverBgColor'])

@php
    $textColor = match ($textColor) {
        'gray' => 'text-gray-500',
        'blue' => 'text-blue-500',
        'red' => 'text-red-500',
        'yellow' => 'text-yellow-500',
        'green' => 'text-green-500',
        'white' => 'text-white',
        default => 'text-gray-500',
    };

    $bgColor = match ($bgColor) {
        'gray' => 'bg-gray-500',
        'blue' => 'bg-blue-500',
        'red' => 'bg-red-500',
        'yellow' => 'bg-yellow-500',
        'green' => 'bg-green-500',
        default => 'bg-red-500',
    };

    $hoverBgColor = match ($hoverBgColor) {
        'gray' => 'hover:bg-gray-800',
        'blue' => 'hover:bg-blue-800',
        'red' => 'hover:bg-red-800',
        'yellow' => 'hover:bg-yellow-800',
        'green' => 'hover:bg-green-800',
        default => 'hover:bg-red-800',
    };
    
@endphp
<button {{ $attributes }} class=" {{$textColor}} {{$bgColor}} {{$hoverBgColor}} px-2 py-2 text-sm text-left border-white border flex-grow dark:border-slate-700">
            {{ $slot }}</button>