@extends('layouts.app')
@section('title', 'HubMenu | Sobre')

@section('content')
    <div class="">
        @include('layouts.nav')
        <div class="">
            <section id="sobre" class="">
                <div class="">
                    <h2 class="">Sobre o HubMenu</h2>
                    <p class="">
                        O HubMenu é um sistema robusto e flexível criado para simplificar o gerenciamento de diversas franquias de refeitórios, sejam elas autônomas, empresariais ou educacionais. Com uma interface intuitiva e fácil de usar, o HubMenu oferece ferramentas poderosas para atender às necessidades específicas de cada tipo de operação.
                    </p>
                </div>
            </section>
        </div>
        @include('components.footer')
    </div>
@endsection
