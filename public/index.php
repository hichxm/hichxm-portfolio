<?php

if (preg_match('/\.(?:js|css|jpg|png|webp|woff|woff2|otf|eot|svg|ttf)$/', $_SERVER['REQUEST_URI'])) {
    // serve the requested resource as-is.

    return false;
} else {
    require_once __DIR__ . '/../framework/app.php';
}

