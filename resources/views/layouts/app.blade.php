@include('components.header', ['title' => View::yieldContent('title', 'HubMenu | Error')])
    <body>
        <section>
        @yield('content')
        </section>
    </body>
</html>
