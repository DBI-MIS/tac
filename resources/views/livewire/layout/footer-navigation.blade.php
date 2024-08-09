<nav class="bg-white dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700">
    <div class="mx-auto px-1 lg:px-32">
        <div class="flex justify-between h-10 items-center dark:text-gray-100">
            <div class="flex space-x-4 ">
                <span class="text-sm">&copy;2024, Team Asia Corporation -  All Rights Reserved.</span>
            </div>
            <div class="space-x-8 sm:-my-px hidden sm:ms-10 sm:flex">
                <x-footer-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                    {{ __('Home') }}
                </x-footer-nav-link>
                <x-footer-nav-link :href="route('projects.index')" :active="request()->routeIs('projects.index')" wire:navigate>
                    {{ __('Projects') }}
                </x-footer-nav-link>
                <x-footer-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" wire:navigate>
                    {{ __('Products') }}
                </x-footer-nav-link>
                <x-footer-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                    {{ __('About Us') }}
                </x-footer-nav-link>
            </div>
            
        </div>
    </div>
</nav>
