@extends('layouts.app')
@section('title', 'HubMenu | Cadastro')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <form method="POST" action="{{ route('register') }}" class="bg-white rounded-xl p-8 shadow-md w-full max-w-sm mx-auto">
        @csrf
        <div class="text-center mb-6">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-16 h-16 mx-auto">
            <p class="text-black text-lg mt-2">HubMenu</p>
        </div>

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-black">Nome</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            @error('name')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-black">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-black">Senha</label>
            <input id="password" type="password" name="password" required
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            @error('password')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-black">Confirmar Senha</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div>
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Registrar
            </button>
        </div>

        <div class="mt-4 text-center">
            <p class="text-sm text-black">
                Já tem uma conta?
                <a class="text-blue-600 hover:text-blue-500" href="{{ route('login') }}">
                    Faça login aqui
                </a>
            </p>
        </div>
    </form>
</div>
@endsection
