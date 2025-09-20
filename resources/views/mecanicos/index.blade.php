<x-app-layout>
    <!-- Table Section -->
    <div class="max-w-[85rem] p-4 sm:px-6 lg:px-8 lg:py-4 mx-auto">

        <!--Breadcrumb-->
        <nav class="flex mb-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg>
                        Início
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Mecânicos</span>
                    </div>
                </li>
            </ol>
        </nav>
        <!-- End Breadcrumb-->

        <!-- Card -->
        <div class="flex flex-col">
            <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                        <!-- Header -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                                <div class="w-full md:w-1/2">
                                    <form class="flex items-center">
                                        <label for="simple-search" class="sr-only">Pesquisar</label>
                                        <div class="relative w-full">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Pesquisar" required="">
                                        </div>
                                    </form>
                                </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                               <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="{{ route('mecanicos.create') }}">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                        Novo Mecânico
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <div class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700 border-b border-gray-200 dark:border-neutral-700">
                            <div class="w-full flex bg-gray-50 dark:bg-neutral-800 px-5">
                                <div class="w-1/12 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200 pe-6 py-3 text-start">
                                    ID
                                </div>
                                <div class="w-4/12 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200 pe-6 py-3 text-start">
                                    NOME
                                </div>
                                <div class="w-3/12 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200 pe-6 py-3 text-start">
                                    ESPECIALIDADE
                                </div>
                                <div class="w-3/12 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200 pe-6 py-3 text-start">
                                    telefone
                                </div>
                                <div class="w-1/12 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200 pe-6 py-3 text-start">

                                </div>
                            </div>
                        </div>

                        @foreach($mecanicos as $mecanico)
                        <div class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700 border-b border-gray-200 dark:border-neutral-700">
                            <div class="w-full flex px-5">
                                <div class="w-1/12 font-semibold  text-gray-800 dark:text-neutral-200 pe-6 py-3 text-start">
                                    <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $mecanico->id }}</span>
                                </div>
                                <div class="w-4/12 font-semibold  text-gray-800 dark:text-neutral-200 pe-6 py-3 text-start">
                                    <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $mecanico->nome_mecanico }}</span>
                                </div>
                                <div class="w-3/12 text-xs font-semibold text-gray-800 dark:text-neutral-200 pe-6 py-3 text-start">
                                    <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $mecanico->especialidade }}</span>
                                </div>
                                <div class="w-3/12 text-xs font-semibold text-gray-800 dark:text-neutral-200 pe-6 py-3 text-start">
                                    <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $mecanico->telefone_mecanico }}</span>
                                </div>
                                <div class="w-1/12 text-gray-800 dark:text-neutral-200 pe-6 py-3 text-start">
                                    <button id="{{ $mecanico->id }}-dropdown-button" data-dropdown-toggle="{{ $mecanico->id }}-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="{{ $mecanico->id }}-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="{{ $mecanico->id }}-dropdown-button">
                                            <li>
                                                <a href="{{ route('mecanicos.edit', [$mecanico->id]) }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Editar</a>
                                            </li>
                                            <li>
                                                    <form method="post" class="form-destroy w-full" action="{{ route('mecanicos.destroy') }}">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="id" id="id" value="{{ $mecanico->id }}">
                                                        <button type="submit" class="w-full block text-left py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                            Deletar
                                                        </button>
                                                    </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Total de <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $mecanicos_count }}</span> resultado(s).
                                </p>
                            </div>

                            <div>
                                @if ($mecanicos->hasPages())
                                <div class="inline-flex gap-x-2">
                                    <a href="{{ $mecanicos->previousPageUrl() }}" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                        Anterior
                                    </a>

                                    <a href="{{ $mecanicos->nextPageUrl() }}" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    Próximo
                                    </a>

                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</x-app-layout>
