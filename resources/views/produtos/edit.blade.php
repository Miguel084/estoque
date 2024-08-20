<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editando Produto: ') . $produto->nome . " de id: " . $produto->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="px-4 py-5 sm:p-6">
                        <label for="nome" class="block font-medium text-sm text-gray-700">Nome do Produto</label>
                        <input type="text" name="nome" id="nome" class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ $produto->nome }}" />
                        @error('nome')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="px-4 py-5 sm:p-6">
                        <label for="descricao" class="block font-medium text-sm text-gray-700">Descrição</label>
                        <input type="text" name="descricao" id="descricao" class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ $produto->descricao }}" />
                        @error('descricao')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="px-4 py-5 sm:p-6">
                        <label for="preco" class="block font-medium text-sm text-gray-700">Preço</label>
                        <input type="number" name="preco" id="preco" class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ $produto->preco }}" />
                        @error('preco')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="px-4 py-5 sm:p-6">
                        <label for="quantidade" class="block font-medium text-sm text-gray-700">Quantidade no estoque</label>
                        <input type="number" name="quantidade" id="quantidade" class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ $produto->quantidade }}" />
                        @error('quantidade')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button class="inline-flex items-center px-4 py-2 bg-blue-500 rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                            Salvar
                        </button>

                        <a href="{{ route('produtos.index') }}" class="inline-flex items-center px-4 py-2 bg-red-500 rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:shadow-outline-red disabled:opacity-25 transition ease-in-out duration-150">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>