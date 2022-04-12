<!DOCTYPE html>
<html lang="tr">
    <head>
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        @include('frontend.layout.css')
        @yield('customCSS')

    </head>
    <body>
        @include('frontend.layout.header')

            <main id="content" role="main">
                @yield('content')
            </main>

        @include('frontend.layout.footer')
        @include('frontend.layout.js')
        @yield('customJS')

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-216042717-1">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-216042717-1');
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10883748311"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'AW-10883748311');
        </script>
        <script>
            gtag('event', 'conversion', {
                'send_to': 'AW-10883748311/H7GLCP2817IDENej48Uo',
                'transaction_id': ''
            });
        </script>

    </body>
</html>
