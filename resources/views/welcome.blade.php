<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <!-- Desenho/ícone -->
        <div class="mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 mx-auto text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.105-.895-2-2-2H8V7c0-1.105.895-2 2-2h2c1.105 0 2 .895 2 2v2h2c1.105 0 2 .895 2 2v2c0 1.105-.895 2-2 2h-2v2c0 1.105-.895 2-2 2h-2c-1.105 0-2-.895-2-2v-2H6c-1.105 0-2-.895-2-2v-2c0-1.105.895-2 2-2h2V9c0-1.105.895-2 2-2h2c1.105 0 2 .895 2 2v2h2z" />
            </svg>
        </div>

        <!-- Botões -->
        <div class="space-x-4">
            <a href="{{ url('/login') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">Entrar</a>
            <a href="{{ url('/register') }}" class="px-6 py-3 bg-green-600 text-white rounded-lg shadow hover:bg-green-700">Cadastrar</a>
        </div>
    </div>
</body>
</html>
