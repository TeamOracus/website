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


if (!function_exists('asset')) {
    /**
     * asset
     *
     * @param  mixed $path
     * @return void
     */
    function asset($path)
    {
        // Get the base URL for your site
        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $scheme . $host . '/';
        // Define the URL to the public directory
        $publicPath = $baseUrl . '/public/' . $path;

        // Get the full file system path
        $fullPath = $_SERVER['DOCUMENT_ROOT'] . '/public/' . $path;

        // Check if the file exists in the public directory
        if (file_exists($fullPath)) {
            // Return the URL to the asset
            echo $publicPath;
        } else {
            // Return an empty string if the file doesn't exist
            echo '';
        }
    }

}