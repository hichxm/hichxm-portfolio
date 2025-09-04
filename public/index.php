<?php

if (preg_match('/\.(?:js|css)$/', $_SERVER['REQUEST_URI'])) {
    return false; // serve the requested resource as-is.
}

require_once __DIR__ . '/../framework/app.php';