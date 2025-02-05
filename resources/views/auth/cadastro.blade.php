@extends('layouts.app')
@section('title', 'HubMenu | Cadastro')

@section('content')
    <div class="flex flex-col min-h-screen bg-gradient-to-b from-blue-500 to-gray-700 px-4 sm:px-6 lg:px-8" id="main-container" data-theme="light">
        <div class="flex-grow flex items-center justify-center">
            <form method="POST" action="{{ route('login') }}" class="bg-gray-800 text-white rounded-2xl p-8 shadow-lg w-full sm:w-96 md:w-[450px] lg:w-[500px] mx-auto transform transition-all duration-300 hover:shadow-2xl">
                @csrf
                <div class="text-center mb-6">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-40 h-40 mx-auto">
                    <p class="text-xl font-semibold mt-2">Central do Usuário - Login</p>
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-white">Nome</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                           class="mt-1 block w-full px-3 py-2 border border-white-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-white-100 text-white-900">
                    @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-white-900">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                           class="mt-1 block w-full px-3 py-2 border border-white-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-white-100 text-white-900">
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-white-900">Senha</label>
                    <input id="password" type="password" name="password" required
                           class="mt-1 block w-full px-3 py-2 border border-white-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-white-100 text-white-900">
                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-white-900">Confirmar Senha</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                           class="mt-1 block w-full px-3 py-2 border border-white-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-white-100 text-white-900">
                </div>

                <div class="flex items-center mb-4">
                    <input id="remember" type="checkbox" name="remember" class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-white-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-white-900">
                        Aceito os
                        <a href="#" class="text-blue-600 hover:text-blue-400 font-medium transition-all duration-300">
                            Termos de Condições e de Serviços
                        </a>
                    </label>
                </div>

                <div>
                    <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Registrar
                    </button>
                </div>

                <div class="mt-4 text-center">
                    <p class="text-sm text-white-900">
                        Já tem uma conta?
                        <a class="text-blue-600 hover:text-blue-500 font-medium" href="{{ route('login') }}">
                            Faça login aqui
                        </a>
                    </p>
                </div>
            </form>
        </div>
        @include('components.footer')
    </div>
@endsection
