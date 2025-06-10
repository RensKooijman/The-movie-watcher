<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center align-items-center shrink-0 flex items-center">
            <a class="flex justify-center align-items-center" href="{{ route('dashboard') }}">
                <x-application-logo style="height: 250px; width: 250px;" class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
        </div>
        <h1 class="py-2 flex justify-center align-items-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight logo-gradient" style="font-size: 36px;">
            {{ __('Welcome to the Movie Watcher Dashboard') }}
        </h1>
    </x-slot>
    <div class="py-12" x-data="{ open: false }">
        <div x-ref="alert" class="relative w-full overflow-hidden rounded-sm border border-green-500 bg-surface text-on-surface dark:bg-surface-dark dark:text-on-surface-dark" role="alert">
            <div class="flex w-full items-center gap-2 bg-green-500/10 p-4">
                <div class="bg-green-500/15 text-green-500 rounded-full p-1" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-2">
                    <h2 class="text-sm font-semibold text-green-500">{{ __("You're logged in!") }}</h2>
                </div>
                <button class="ml-auto" aria-label="dismiss alert" @click="$refs.alert.remove()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="2.5" class="size-4 shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div> -->
            </div>
        </div>
    </div>
</x-app-layout>
