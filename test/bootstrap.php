<?php

define('ROOT_PATH', __DIR__.'/..');

$files = glob(ROOT_PATH . '/*.php');

foreach ($files as $file) {
    require($file);
}