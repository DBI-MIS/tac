@props(['project'])
<div class="rounded-xl border border-opacity-10  bg-white hover:bg-gray-100 border-red-800 col-span-1 overflow-hidden
cursor-pointer group mx-auto hover:shadow-lg shadow-sm">
<div class="text-balance flex flex-col max-w-[300px] min-w-[300px] group" 
    wire:navigate href="{{ route('projects.show', $project->slug) }}">
        
        <div class="gap-2 group-hover:scale-110 transition-all ease-in-out duration-300">
            <img
            class="w-full" 
            {{-- src="{{ $project->project_img ? asset('storage/' . $project->project_img) : asset('/default-slide-1.webp') }}" --}}
            src="/storage/{{ $project->project_img }}"
            alt="{{ $project->title }}" >
            {{-- <img class="w-auto h-auto " src="{{ $project->img }}" alt=""> --}}
        </div>
        <div class="flex flex-col text-left gap-1 px-6 py-4 group-hover:mt-2 transition-all ease-in-out duration-300">
            <button class="text-xs font-light w-max whitespace-nowrap rounded-md px-2 py-1 tracking-wide text-white bg-red-800">{{ $project->category }}</button>
            <span class="text-2xl font-bold text-balance dark:text-slate-800">{{ $project->title}}</span>
            <span class="text-sm font-light text-balance dark:text-slate-800">{{ $project->getExcerpt() }}</span>
        </div>
    
    </div>

</div>