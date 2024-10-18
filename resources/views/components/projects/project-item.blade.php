@props(['project'])

<div class="rounded-xl border border-opacity-10  bg-white hover:bg-gray-100 border-red-800 col-span-1 overflow-hidden
cursor-pointer group mx-auto hover:shadow-lg shadow-sm">
    <a href="{{ route('projects.show', $project->slug) }}">
        <div class="h-auto w-full   bg-gray-200 group-hover:opacity-75">
            <img class="w-full h-60 object-cover group-hover:scale-110 transition-all ease-in-out duration-300" 
            src="{{ $project->project_img ? asset('storage/' . $project->project_img) : asset('/default-slide-2.webp') }}"
            {{-- src="{{ $project->project_img }}" --}}
            alt="{{ $project->title }}"/>
        </div>
        <div class="flex justify-center items-center px-4 py-2 group-hover:mt-2 transition-all ease-in-out duration-300">
            <h3 class="text-md font-bold text-gray-700">{{ $project->title }}</h3>
        </div>
    </a>
</div>
