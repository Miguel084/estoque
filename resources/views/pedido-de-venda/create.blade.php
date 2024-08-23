<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nova venda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('pedido-de-venda.store') }}" method="POST">
                    @csrf

                    <div class="px-4 py-5 sm:p-6">
                        <label for="data_do_pedido" class="block font-medium text-sm text-gray-700">Pedido</label>
                        <input type="date" name="data_do_pedido" id="nome" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        @error('data_do_pedido')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="px-4 py-5 sm:p-6">
                        <label for="produto_id" class="block font-medium text-sm text-gray-700">Produto</label>
                        <select name="produto_id" id="produto_id" class="form-select rounded-md shadow-sm mt-1 block w-full">
                            <option disabled selected>Selecione um produto</option>
                            @foreach($produtos as $produto)
                            <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                            @endforeach
                        </select>
                        @error('produto_id')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="px-4 py-5 sm:p-6">
                        <label for="status" class="block font-medium text-sm text-gray-700">Status</label>
                        <select name="status" id="status" class="form-select rounded-md shadow-sm mt-1 block w-full">
                            <option disabled selected>Selecione um status</option>
                            <option value="1">Aberto</option>
                            <option value="2">Fechado</option>
                        </select>
                        @error('status')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="px-4 py-5 sm:p-6">

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-blue-500 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                                Criar
                            </button>

                            <a href="{{ route('pedido-de-venda.index') }}" class="inline-flex items-center px-4 py-2 bg-red-500 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:shadow-outline-red disabled:opacity-25 transition ease-in-out duration-150">
                                Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>



