<?php
require_once __DIR__ . '/vendor/autoload.php';

use Hello\Gindow;

echo Gindow::settings_get('appName');
