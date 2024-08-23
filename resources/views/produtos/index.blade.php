<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto flex lg:px-8 b " style="justify-content: end">
            <div class="bg-white w-1/2 flex justify-center  shadow-xl rounded-full ">
                <a href="{{ route('produtos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white shadow-sm font-bold text-lg flex items-center justify-center p-2 w-full rounded-[10px]">Novo Produto</a>
            </div>
        </div>
    </div>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="flex items-center">
                        <h2 class="ms-3 text-xl font-semibold text-gray-900">
                            <a> {{ __('Baixar relatório de produtos') }}</a>
                        </h2>
                    </div>
                </div>
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Nome do Produto</th>
                        <th class="px-4 py-2">Descrição</th>
                        <th class="px-4 py-2">Preço</th>
                        <th class="px-4 py-2">Quantidade no estoque</th>
                        <th class="px-4 py-2">Categoria</th>
                        <th class="px-4 py-2">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($produtos as $produto)
                        <tr class="text-center">
                            <td class="border px-4 py-2">{{ $produto->id }}</td>

                            <td class="border px-4 py-2">{{ $produto->nome }}</td>

                            <td class="border px-4 py-2">{{ $produto->descricao }}</td>

                            <td class="border px-4 py-2">{{ $produto->preco }}</td>

                            @if( $produto->quantidade > 0)
                                <td class="border px-4 py-2">{{ $produto->quantidade }}</td>
                            @else
                                <td class="border px-4 py-2 text-red-500">SEM ESTOQUE</td>
                            @endif

                            <td class="border px-4 py-2">{{ $produto->categoria->nome }}</td>

                            <td class="border px-4 py-4 flex" style="justify-content: space-around">
                                <a href="{{ route('produtos.edit', $produto->id) }}" class="bg-green-500 hover:bg-green-700 text-white shadow-sm font-bold py-2 px-4 rounded-[10px]">Editar</a>
                                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white shadow-sm font-bold py-2 px-4 rounded-[10px] ml-3">Excluir</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $produtos->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
