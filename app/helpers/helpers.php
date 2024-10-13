<?php


if (!function_exists('isActiveRoute')) {
    /**
     * isActiveRoute
     *
     * @param  mixed $route
     * @param  mixed $currentRoute
     * @return string
     */
    function isActiveRoute($route, $currentRoute)
    {
        if (is_array($route)) {
            return in_array($currentRoute, $route) ? 'active' : '';
        }
        return $route === $currentRoute ? 'active' : '';
    }
}


if (!function_exists('view')) {  
    /**
     * view
     *
     * @param  mixed $file
     * @param  mixed $data
     * @return void
     */
    function view($file, $data = [])
    {
        $filePath = str_replace('.', '/', $file) . '.oracus.php';

        $fullPath = $_SERVER['DOCUMENT_ROOT'] . '/view/' . $filePath;
        $notFoundPath = $_SERVER['DOCUMENT_ROOT'] . '/view/404.oracus.php';

        if (!empty($data)) {
            extract($data);
        }

        if (file_exists($fullPath)) {
            include $fullPath;
        } elseif (file_exists($notFoundPath)) {
            include $notFoundPath;
        } else {
            echo "View file not found: $fullPath";
        }
    }
}