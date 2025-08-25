@extends('layout')
@section('title', 'Cadastro')
@section('content')
<div class="bg-white p-6 rounded-lg shadow">
  <h1 class="text-2xl font-bold mb-4">Cadastro</h1>
  <form method="POST" action="{{ route('register.post') }}" class="space-y-3">
    @csrf
    <div>
      <label class="block text-sm font-medium">Nome</label>
      <input type="text" name="name" class="mt-1 w-full border rounded p-2" required>
    </div>
    <div>
      <label class="block text-sm font-medium">Email</label>
      <input type="email" name="email" class="mt-1 w-full border rounded p-2" required>
    </div>
    <div>
      <label class="block text-sm font-medium">Senha</label>
      <input type="password" name="password" class="mt-1 w-full border rounded p-2" required>
    </div>
    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Cadastrar</button>
  </form>
  <p class="text-center text-sm text-gray-600 mt-4">
    Já tem conta? <a href="{{ route('login') }}" class="text-blue-600 underline">Entrar</a>
  </p>
</div>
@endsection
