<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xs mx-auto py-12 w-1/2 h-1/2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-end p-4">
                <a href="{{ route('produtos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-1 px-2 rounded-full w-24 h-24 text-sm flex items-center justify-center">Novo Produto</a>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Nome do Produto</th>
                        <th class="px-4 py-2">Descrição</th>
                        <th class="px-4 py-2">Preço</th>
                        <th class="px-4 py-2">Quantidade no estoque</th>
                        <th class="px-4 py-2">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td class="border px-4 py-2">{{ $produto->id }}</td>

                            <td class="border px-4 py-2">{{ $produto->nome }}</td>

                            <td class="border px-4 py-2">{{ $produto->descricao }}</td>

                            <td class="border px-4 py-2">{{ $produto->preco }}</td>

                            <td class="border px-4 py-2">{{ $produto->quantidade }}</td>

                            <td class="border px-4 py-4 d-flex justify-center">
                                <a href="{{ route('produtos.edit', $produto->id) }}" class="bg-green-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded">Editar</a>
                                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-black font-bold py-2 px-4 rounded">Excluir</button>
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
