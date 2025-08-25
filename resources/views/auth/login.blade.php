@extends('layout')
@section('title', 'Login')
@section('content')
<div class="bg-white p-6 rounded-lg shadow">
  <h1 class="text-2xl font-bold mb-4">Login</h1>
  <form method="POST" action="{{ route('login.post') }}" class="space-y-3">
    @csrf
    <div>
      <label class="block text-sm font-medium">Email</label>
      <input type="email" name="email" class="mt-1 w-full border rounded p-2" required>
    </div>
    <div>
      <label class="block text-sm font-medium">Senha</label>
      <input type="password" name="password" class="mt-1 w-full border rounded p-2" required>
    </div>
    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Entrar</button>
  </form>
  <div class="flex justify-between mt-4 text-sm">
    <a href="{{ route('edit') }}" class="text-blue-600 underline">Esqueci a senha</a>
    <a href="{{ route('register') }}" class="text-gray-600 underline">Criar conta</a>
  </div>
</div>
@endsection
