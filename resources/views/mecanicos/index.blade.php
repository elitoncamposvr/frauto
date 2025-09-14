<x-app-layout>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">

                        <!-- Header -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                    Mecânicos
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Adicionar mecânicos, alterar e mais.
                                </p>
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
                                <div class="w-1/12 text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200 pe-6 py-3 text-start">

                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- End Table -->





                        <!-- Footer -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $mecanicos_count }}</span> resultado(s)
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                                        Prev
                                    </button>

                                    <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                        Next
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                                    </button>
                                </div>
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
