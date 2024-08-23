<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criando Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('produtos.store') }}" method="POST">
                    @csrf

                    <div class="px-4 py-5 sm:p-6">
                        <label for="nome" class="block font-medium text-sm text-gray-700">Nome do Produto</label>
                        <input type="text" name="nome" id="nome" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('nome')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="px-4 py-5 sm:p-6">
                        <label for="descricao" class="block font-medium text-sm text-gray-700">Descrição</label>
                        <input type="text" name="descricao" id="descricao" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('descricao')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="px-4 py-5 sm:p-6">
                        <label for="preco" class="block font-medium text-sm text-gray-700">Preço</label>
                        <input type="number" name="preco" id="preco" step="0.01" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('preco')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="px-4 py-5 sm:p-6">
                        <label for="categoria" class="block font-medium text-sm text-gray-700">Categoria</label>
                        <select name="categoria_id" id="categoria" class="form-select rounded-md shadow-sm mt-1 block w-full">
                            <option disabled selected>Selecione uma categoria</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                        </select>
                        @error('categoria')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="px-4 py-5 sm:p-6">
                        <label for="quantidade" class="block font-medium text-sm text-gray-700">Quantidade no estoque</label>
                        <input type="number" name="quantidade" id="quantidade" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('quantidade')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button class="inline-flex items-center px-4 py-2 bg-blue-500 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                            Criar
                        </button>

                        <a href="{{ route('produtos.index') }}" class="inline-flex items-center px-4 py-2 bg-red-500 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:shadow-outline-red disabled:opacity-25 transition ease-in-out duration-150">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


