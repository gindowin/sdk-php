<?php
require_once __DIR__ . '/vendor/autoload.php';

use Gindow\Settings;

echo Settings::get('appName');
