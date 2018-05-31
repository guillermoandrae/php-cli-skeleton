<?php require dirname(__DIR__) . '/vendor/autoload.php';

$application = new \Symfony\Component\Console\Application();
$application->add(new \App\Commands\HelloWorldCommand());
