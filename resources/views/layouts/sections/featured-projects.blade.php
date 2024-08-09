<div class="max-w-full w-full pb-6 pt-2 px-4 dark:text-gray-100">
    <div class="border-b-[1px] dark:border-gray-100/10 border-red-600/10">
    <h1 class="dark:text-gray-100 text-3xl">Featured Projects</h1>
    </div>
    <div class="p-4"></div>
    <div class="flex flex-wrap gap-2">
    @foreach ($featuredProjects as $project)
    <x-page.featured-projects :project="$project" />
    @endforeach
    </div>
    
</div>