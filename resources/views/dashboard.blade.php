@extends('layout')
@section('title', 'Estou logado')
@section('content')
<div class="bg-white p-6 rounded-lg shadow text-center">
  <h1 class="text-2xl font-bold mb-2">Você está logado!</h1>
  @if(isset($user))
    <p class="text-gray-700 mb-4">Olá, <span class="font-semibold">{{ $user->name }}</span> ({{ $user->email }})</p>
  @endif
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded">Sair</button>
  </form>
</div>
@endsection
