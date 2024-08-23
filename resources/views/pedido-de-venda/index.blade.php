<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nova venda') }}
        </h2>
    </x-slot>

    <div class="py-12   ">
        <div class="max-w-7xl mx-auto flex lg:px-8 b " style="justify-content: end">
            <div class="bg-white w-1/2 flex justify-center  shadow-xl rounded-full ">
                <a href="{{ route('pedido-de-venda.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold text-lg flex items-center justify-center p-2 w-full rounded-[10px]">Cadastrar Nova Venda</a>
            </div>
        </div>
    </div>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">Data do pedido</th>
                        <th class="px-4 py-2">Produto</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td class="border px-4 py-2">{{ $pedido->data_do_pedido }}</td>

                            <td class="border px-4 py-2">{{ $pedido->produto->nome }}</td>

                            <td class="border px-4 py-2">{{ $pedido->status }}</td>

                            <td class="border px-4 py-4 flex " style="justify-content: space-around">
                                <a href="{{ route('pedido-de-venda.edit', $pedido->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-[10px]">Editar</a>

                                <form action="{{ route('pedido-de-venda.destroy', $pedido->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $pedido->id }}">
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-[10px] ml-3">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                <div class="mt-4">
                    {{ $pedidos->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
