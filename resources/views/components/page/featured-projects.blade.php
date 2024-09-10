@props(['project'])
<div class="rounded-xl border border-opacity-10  bg-white hover:bg-gray-100 border-red-800 
cursor-pointer group hover:shadow-lg shadow-sm flex flex-col mx-auto w-full max-w-[250px] min-w-[250px] overflow-hidden h-[260px]">

    <div class="block mb-2 relative"
    wire:navigate href="{{ route('projects.show', $project->slug) }}">

    <div class="group-hover:scale-110 transition-all ease-in-out duration-300 overflow-hidden absolute h-40">
            <img {{-- src="{{ $project->project_img ? asset('storage/' . $project->project_img) : asset('/default-slide-1.webp') }}" --}} 
            src="/storage/{{ $project->project_img }}" alt="{{ $project->title }}">
            {{-- <img class="w-auto h-auto " src="{{ $project->img }}" alt=""> --}}
        </div>
        
    </div>
    <div class="block h-auto px-6 mt-[160px] min-h-max">
            <button
                class="text-nowrap text-xs font-light w-min rounded-md px-2 py-1 my-2 tracking-wide text-red-800 bg-transparent group-hover:bg-red-800 border border-red-800 group-hover:text-white">{{ $project->category }}</button>
                <div class="flex flex-row gap-1 items-center">
            <span class="text-md font-bold text-balance dark:text-slate-800">{{ $project->title }}</span>
            {{-- <span class="text-sm font-light text-balance dark:text-slate-800">{{ $project->getExcerpt() }}</span> --}}
            </div>
        </div>

</div>
