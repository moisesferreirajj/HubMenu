@include('components.header', ['title' => View::yieldContent('title', 'HubMenu | Error')])
    
    <body>
        @yield('content')
    </body>
</html>
