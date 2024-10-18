import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/livewire/*.blade.php',
        './resources/views/component/*.blade.php',
        './resources/views/components/news/*.blade.php',
        './resources/views/layouts/sections/*.blade.php',
        './resources/views/layouts/**/*.blade.php',
        './resources/views/layouts/sections/*.blade.php',
        './resources/views/news/*.blade.php',
        './resources/views/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
}
