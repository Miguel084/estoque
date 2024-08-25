<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Bem vindo ao sistema de estoque
    </h1>

</div>

<div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8  border-gray-200 ">
    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Valores Diarios:
    </h1>
</div>
<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8 ">
    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Total de Vendas: ') . __('R$') . $valoresHoje['total']  }}</a>
            </h2>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Quantidade total de produtos no estoque: ')  . $valoresHoje['totalEstoque'] }}</a>
            </h2>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Produtos vendidos por categoria') }}</a>
                @foreach($valoresHoje['vendasPorCategoria'] as $categoria)
                    <br>
                    <a> {{ $categoria['nome'] . ': ' . $categoria['quantidade'] . ' ' }}</a>
                @endforeach
            </h2>
        </div>
    </div>
</div>
<hr>
<div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8  border-gray-200 ">
    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Valores Mensais:
    </h1>
</div>
<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Total de Vendas: ') . __('R$') . $valoresMes['total']  }}</a>
            </h2>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Quantidade total de produtos no estoque: ')  . $valoresMes['totalEstoque'] }}</a>
            </h2>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Produtos vendidos por categoria') }}</a>
                @foreach($valoresMes['vendasPorCategoria'] as $categoria)
                    <br>
                    <a> {{ $categoria['nome'] . ': ' . $categoria['quantidade'] . ' ' }}</a>
                @endforeach
            </h2>
        </div>
    </div>
</div>
<hr>
<div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8  border-gray-200 ">
    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Valores Anuais:
    </h1>
</div>
<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Total de Vendas: ') . __('R$') . $valoresAno['total']  }}</a>
            </h2>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Quantidade total de produtos no estoque: ')  . $valoresAno['totalEstoque'] }}</a>
            </h2>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="flex items-center">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a> {{ __('Produtos vendidos por categoria') }}</a>
                @foreach($valoresAno['vendasPorCategoria'] as $categoria)
                    <br>
                    <a> {{ $categoria['nome'] . ': ' . $categoria['quantidade'] . ' ' }}</a>
                @endforeach
            </h2>
        </div>
    </div>
</div>
