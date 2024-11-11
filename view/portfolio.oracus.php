@php
    if (isset($_GET['project'])) {
        $projectFile = '/portfolios/' . basename($_GET['project']) . '.oracus.php';
        View::render('portfolios.'.basename($_GET['project']));
    } else {
        View::render('portfolios.all_portfolios');
    }
@endphp