<?php
spl_autoload_register('myAutoloader');
// if (!function_exists('myAutoloader')) {
    function myAutoloader($className) {
        $path = 'classes/';
        $ext = '.class.php';
        $fullPath = $path . $className . $ext;

        include_once $fullPath;
    }
// }


?>
