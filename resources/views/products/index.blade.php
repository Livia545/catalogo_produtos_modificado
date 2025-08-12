<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Produtos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Catálogo de Produtos</h1>
            <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">+ Adicionar Produto</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    @if($product->imagem)
                        <img src="{{ asset('storage/' . $product->imagem) }}" class="w-full h-48 object-cover" alt="{{ $product->nome }}">
                    @else
                        <div class="w-full h-48 bg-gray-300 flex items-center justify-center text-gray-500">Sem imagem</div>
                    @endif
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $product->nome }}</h2>
                        <p class="text-gray-700 text-sm">{{ $product->descricao }}</p>
                        <div class="mt-2 text-green-600 font-bold">R$ {{ number_format($product->preco, 2, ',', '.') }}</div>
                        <div class="text-sm text-gray-500">Estoque: {{ $product->estoque }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
