@extends('layout')
@section('title', 'Editar dados')
@section('content')
<div class="bg-white p-6 rounded-lg shadow">
  <h1 class="text-2xl font-bold mb-4">Editar nome, email e senha</h1>
  <form method="POST" action="{{ route('edit.post') }}" class="space-y-3">
    @csrf
    <div>
      <label class="block text-sm font-medium">Seu email atual (para localizar sua conta)</label>
      <input type="email" name="email" class="mt-1 w-full border rounded p-2" required>
    </div>
    <div>
      <label class="block text-sm font-medium">Novo nome</label>
      <input type="text" name="name" class="mt-1 w-full border rounded p-2" required>
    </div>
    <div>
      <label class="block text-sm font-medium">Novo email</label>
      <input type="email" name="new_email" class="mt-1 w-full border rounded p-2" required>
    </div>
    <div>
      <label class="block text-sm font-medium">Nova senha (opcional)</label>
      <input type="password" name="password" class="mt-1 w-full border rounded p-2">
    </div>
    <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded">Salvar alterações</button>
  </form>
  <p class="text-xs text-gray-500 mt-3">* Fluxo simplificado: sem envio de email. Use seu email atual para localizar e atualizar a conta.</p>
</div>
@endsection
