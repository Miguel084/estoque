<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Bem vindo ao sistema de estoque
    </h1>

</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Total de Vendas: ') . __('R$') . $valores['total']  }}</a>
            </h2>
        </div>
    </div>

    <div>
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Quantidade total de produtos no estoque: ')  . $valores['totalEstoque'] }}</a>
            </h2>
        </div>
    </div>

    <div>
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Produtos vendidos por categoria') }}</a>
                @foreach($valores['vendasPorCategoria'] as $categoria)
                    <br>
                    <a> {{ $categoria['nome'] . ': ' . $categoria['quantidade'] . ' ' }}</a>

                @endforeach
            </h2>
        </div>
    </div>
</div>
