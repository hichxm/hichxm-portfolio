<?php

if (preg_match('/\.(?:js|css|jpg|png|woff|woff2|otf|eot|svg|ttf)$/', $_SERVER['REQUEST_URI'])) {
    return false; // serve the requested resource as-is.
} else {
    require_once __DIR__ . '/../framework/app.php';
}

