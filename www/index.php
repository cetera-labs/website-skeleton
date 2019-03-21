<?php
// Backoffice
if ($_SERVER['REQUEST_URI'] == '/cms/') {
    $_SERVER['REQUEST_URI'] = '/cms/index.php';
}
include __DIR__ . '/../vendor/cetera-labs/cetera-cms' . $_SERVER['REQUEST_URI'];