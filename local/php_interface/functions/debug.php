<?php


if (!function_exists('dd')) {
    function dd($var) {
        global $APPLICATION;

        $APPLICATION->RestartBuffer();
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        die();
    }
}

