<?php

define('PUBLIC_FIX',true);

function asset($path, $secure = null)
{
    return app('url')->asset('public/'.trim($path,'/'), $secure);
}

require_once __DIR__ . '/public/index.php';