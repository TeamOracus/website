<!DOCTYPE html>
<html lang="zxx">

@php View::render('layout.partial.head'); @endphp

<body class="tt-magic-cursor">

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/loader.svg" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Magic Cursor Start -->
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <!-- Magic Cursor End -->

    @php View::render('layout.partial.header'); @endphp

    @php
    if (array_key_exists($currentRoute, $routes)) {
    $page = $routes[$currentRoute];

    View::render($page);

    } else {
    View::render('404');
    }
    @endphp

    @php
    View::render('layout.partial.footer');
    View::render('layout.partial.scripts');
    @endphp
</body>

</html>