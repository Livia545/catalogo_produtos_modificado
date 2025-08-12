<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula de Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container text-center mt-5">
        <h1 class="mb-4">Aula de Laravel</h1>
        <p>Bem-vindo à aplicação Laravel!</p>
        <a href="{{ route('users.create') }}" class="btn btn-primary m-2">Cadastrar</a>
    </div>
</body>
</html>
