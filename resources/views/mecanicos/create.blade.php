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
                                    Adicionar Mecânico
                                </p>
                            </div>
                        </div>
                        <!-- End Header -->
                        <form action="{{ route('mecanicos.store') }}" method="POST" class="space-y-4 p-5">
                            @csrf

                            <div>
                                <label for="filial_id" class="block text-sm font-medium">Filial</label>
                                <select name="filial_id" id="filial_id" class="w-full border-gray-300 rounded">
                                    @foreach($filiais as $filial)
                                        <option value="{{ $filial->id }}">{{ $filial->nome }} ({{ $filial->cidade }})</option>
                                    @endforeach
                                </select>
                                @error('user_id') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="nome_mecanico" class="block text-sm font-medium">Nome Mecânico</label>
                                <input type="text" name="nome_mecanico" id="nome_mecanico" class="w-full border-gray-300 rounded">
                                @error('nome') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="telefone_mecanico" class="block text-sm font-medium">Telefone Mecânico</label>
                                <input type="text" name="telefone_mecanico" id="telefone_mecanico" class="w-full border-gray-300 rounded">
                                @error('telefone_mecanico') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="especialidade" class="block text-sm font-medium">Especialidade</label>
                                <select name="especialidade" id="especialidade" class="w-full border-gray-300 rounded">
                                        <option value="Geral">Geral</option>
                                    <option value="Suspensão">Suspensão</option>
                                    <option value="Elétrica">Elétrica</option>
                                    <option value="Alinhamento">Alinhamento</option>
                                    <option value="Borracharia">Borracharia</option>
                                    <option value="Câmbio Automático">Câmbio Automático</option>
                                </select>
                                @error('especialidade') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full text-center">
                                <button type="submit" class="px-4 py-2 bg-primary text-white rounded-md">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</x-app-layout>
