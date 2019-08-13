<?php
declare(strict_types = 1);

include_once 'vendor/autoload.php';

$content = [
    'title' => 'Welcome to your Frontend developer recruitment task!'
];

$loader = new \Twig\Loader\FilesystemLoader('./views');
$twig = new \Twig\Environment($loader);

echo $twig->render('pages/index.html', $content);