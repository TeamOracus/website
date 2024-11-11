@php
    if (isset($_GET['service'])) {
        $serviceFile = '/services/' . basename($_GET['service']) . '.oracus.php';
        View::render('services.'.basename($_GET['service']));
    } else {
        View::render('services.all_services');
    }
@endphp