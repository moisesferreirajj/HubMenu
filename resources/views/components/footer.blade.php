<footer class="bg-transparent text-black py-6 mt-8">
    <div class="container mx-auto text-center sm:text-left">
        <div class="flex justify-between items-center sm:flex-row flex-col">
            <p class="text-sm">
                &copy; {{ date('Y') }} | HubMenu
            </p>
            <div class="mt-2 sm:mt-0 flex flex-grow justify-end">
                <a href="#" class="text-black-200 hover:text-blue-300 mx-2">Termos de Serviço</a>
                <a href="#" class="text-black-200 hover:text-blue-300 mx-2">Política de Privacidade</a>
                <a href="#" class="text-black-200 hover:text-blue-300 mx-2">Sobre nós</a>
            </div>

            <div class="flex items-center ml-4">
                <button id="theme-toggle" class="text-yellow-400">
                    <span id="sun-icon" class="hidden">☀</span>
                    <span id="moon-icon" class="block">🌙</span>
                </button>
            </div>

        </div>
    </div>
</footer>
