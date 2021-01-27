<?php

require_once './vendor/autoload.php';
include "functions.php";



$pesos = !empty($_POST['Pesos']) ? $_POST['Pesos'] : 0;


$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    'cache' => './cache',
]);

echo $twig->render('index.html.twig', ['resultado' => convertir($pesos)]);