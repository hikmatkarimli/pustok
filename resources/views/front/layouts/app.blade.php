<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('front.layouts.includes.head')
    @stack('css')

    <title>
        @stack('title', 'Pustok - Book Store')
    </title>
</head>

<body>
    <div class="site-wrapper" id="top">

        <x-front-header-component />
        <!-- @if (!Route::is('faq') && !Route::is('my-account')) -->
        <!-- @endif -->
        @yield('content')

    </div>

    <x-front-footer-component />

    <!-- Use Minified Plugins Version For Fast Page Load -->
    @include('front.layouts.includes.foot')
    @stack('js')  </body>

</html>