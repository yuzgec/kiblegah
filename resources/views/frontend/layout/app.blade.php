<!DOCTYPE html>
<html lang="tr">
    <head>
        <title>@yield('title', 'Kıblegah Aile Oyunları Online Satış Sitesi')</title>

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
    </body>
</html>
