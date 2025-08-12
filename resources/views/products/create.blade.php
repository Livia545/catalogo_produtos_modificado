<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Produto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Adicionar Produto</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg">
            @csrf

            <label class="block mb-2 font-semibold">Nome</label>
            <input type="text" name="nome" class="border rounded w-full p-2 mb-4" required>

            <label class="block mb-2 font-semibold">Descrição</label>
            <textarea name="descricao" class="border rounded w-full p-2 mb-4"></textarea>

            <label class="block mb-2 font-semibold">Preço</label>
            <input type="number" step="0.01" name="preco" class="border rounded w-full p-2 mb-4" required>

            <label class="block mb-2 font-semibold">Imagem</label>
            <input type="file" name="imagem" class="border rounded w-full p-2 mb-4">

            <label class="block mb-2 font-semibold">Estoque</label>
            <input type="number" name="estoque" class="border rounded w-full p-2 mb-4" required>

            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Salvar</button>
            <a href="{{ route('products.index') }}" class="ml-4 text-gray-600">Cancelar</a>
        </form>
    </div>
</body>
</html>
