<?php

if (!function_exists('redirect')) {
    function redirect(string $path) {
        header("Location: $path");
        exit;
    }
}