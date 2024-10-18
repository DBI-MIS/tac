@props(['project'])

<div class="rounded-xl border border-opacity-10  bg-white hover:bg-gray-100 border-red-800 col-span-1 overflow-hidden
cursor-pointer group mx-auto hover:shadow-lg shadow-sm w-full">
    <a href="{{ route('projects.show', $project->slug) }}">
        <div class="flex flex-col sm:flex-row">
        <div class="w-full sm:min-w-[300px] sm:max-w-[300px]  bg-gray-200 group-hover:opacity-75" 
        {{-- style="max-width: 500px;" --}}
        >
            <img class="w-full h-60 object-cover group-hover:scale-105 transition-all ease-in-out duration-300" 
            src="{{ $project->project_img ? asset('storage/' . $project->project_img) : asset('/default-slide-2.webp') }}"
            {{-- src="{{ $project->project_img }}" --}}
            alt="{{ $project->title }}"/>
        </div>
        <div class="flex flex-col justify-center px-4 py-2 group-hover:sm:ml-3 transition-all ease-in-out duration-300 text-balance">
            <h3 class="text-lg font-bold text-red-800 dark:text-gray-700">{{ $project->title }}</h3>
            {{-- <span class="text-[10px]">Category: {{ $project->category }}</span> --}}
            <p >{{ $project->getExcerpt() }}</p>
            @if($project->country)
            <p>Country: {{ $project->country }}</p>
            @endif
            @if($project->product_type)
            <p>Product Type: {{ $project->product_type }}</p>
            @endif
        </div>
    </div>
    </a>
</div>
