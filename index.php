<?php

use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;

//ini_set('display_errors', On);
//error_reporting(E_ALL &  ~E_NOTICE);

require __DIR__ .'/vendor/autoload.php';

Debug::enable();

$kernel = new Kernel('dev', true);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
