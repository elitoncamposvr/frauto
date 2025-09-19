<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <nav class="bg-white dark:bg-gray-800 antialiased">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 py-4">
            <div class="flex items-center justify-between">

                <div class="flex items-center space-x-8">
                    <div class="shrink-0">
                        <a href="#" title="" class="">
                            <img class="block w-auto h-8 dark:hidden"
                                 src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/logo-full.svg" alt="">
                            <img class="hidden w-auto h-8 dark:block"
                                 src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/logo-full-dark.svg" alt="">
                        </a>
                    </div>

                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Resumo') }}
                    </x-nav-link>
                    <x-nav-link :href="route('agendamentos.index')" :active="request()->routeIs('agendamentos.index')">
                        {{ __('Agendamentos') }}
                    </x-nav-link>
                    <x-nav-link :href="route('mecanicos.index')" :active="request()->routeIs('mecanicos.index')">
                        {{ __('Mecânicos') }}
                    </x-nav-link>
                    <x-nav-link :href="route('pedidos.index')" :active="request()->routeIs('pedidos.index')">
                        {{ __('Pedidos') }}
                    </x-nav-link>
                </div>

                <div class="flex items-center lg:space-x-2">



                    <button id="userDropdownButton1" data-dropdown-toggle="userDropdown1" type="button"
                            class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                  d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                        {{ Auth::user()->name }}
                        <svg class="w-4 h-4 text-gray-900 dark:text-white ms-1" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m19 9-7 7-7-7"/>
                        </svg>
                    </button>

                    <div id="userDropdown1"
                         class="hidden z-10 w-56 divide-y divide-gray-100 overflow-hidden overflow-y-auto rounded-lg bg-white antialiased shadow dark:divide-gray-600 dark:bg-gray-700">
                        <ul class="p-2 text-start text-sm font-medium text-gray-900 dark:text-white">
                            <li><a href="{{ route('profile.edit') }}" title=""
                                   class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                    Meu Perfil </a>
                            </li>
                        </ul>

                        <div class="p-2 text-sm font-medium text-gray-900 dark:text-white">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </div>

                    <button type="button" data-collapse-toggle="ecommerce-navbar-menu-1"
                            aria-controls="ecommerce-navbar-menu-1" aria-expanded="false"
                            class="inline-flex lg:hidden items-center justify-center hover:bg-gray-100 rounded-md dark:hover:bg-gray-700 p-2 text-gray-900 dark:text-white">
          <span class="sr-only">
            Open Menu
          </span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                  d="M5 7h14M5 12h14M5 17h14"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div id="ecommerce-navbar-menu-1"
                 class="bg-gray-50 dark:bg-gray-700 dark:border-gray-600 border border-gray-200 rounded-lg py-3 hidden px-4 mt-4">
                <ul class="text-gray-900 dark:text-white text-sm font-medium dark:text-white space-y-3">
                    <li>
                        <a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Home</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Best Sellers</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Gift Ideas</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Games</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Electronics</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Home & Garden</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ========== END HEADER ========== -->

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        document.getElementById('deleteButton').click();
    });
</script>
</body>
</html>
