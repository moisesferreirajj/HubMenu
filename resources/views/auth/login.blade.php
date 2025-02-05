@extends('layouts.app')
@section('title', 'HubMenu | Login')

@section('content')
    <div class="flex flex-col min-h-screen bg-gradient-to-b from-blue-500 to-gray-700 px-4 sm:px-6 lg:px-8" id="main-container" data-theme="light">
        <div class="flex-grow flex items-center justify-center">
            <form method="POST" action="{{ route('login') }}" class="bg-gray-800 text-white rounded-2xl p-8 shadow-lg w-full sm:w-96 md:w-[420px] lg:w-[480px] xl:w-[500px] mx-auto transform transition-all duration-300 hover:shadow-2xl">
                @csrf
                <div class="text-center mb-6">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-40 h-40 mx-auto">
                    <p class="text-xl font-semibold mt-2">Central do Usuário - Login</p>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-white">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                           class="mt-1 block w-full px-4 py-3 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 bg-gray-700 text-white">
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-white">Senha</label>
                    <input id="password" type="password" name="password" required
                           class="mt-1 block w-full px-4 py-3 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 bg-gray-700 text-white">
                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center mb-4">
                    <input id="remember" type="checkbox" name="remember" class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-white">Lembrar-me</label>
                </div>

                <div>
                    <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-blue-white font-medium py-3 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-all duration-300">
                        Entrar
                    </button>
                </div>

                <div class="mt-6 text-center">
                    <p class="text-sm text-white">Caso não tenha conta ainda,
                        <a href="{{ route('cadastro') }}" class="text-blue-600 hover:text-blue-400 font-medium transition-all duration-300">
                            clique aqui!
                        </a>
                    </p>
                    <a class="mt-2 block text-blue-600 hover:text-blue-400 font-medium transition-all duration-300" href="#">
                        Esqueceu sua senha?
                    </a>
                </div>
            </form>
        </div>
        @include('components.footer')
    </div>
@endsection