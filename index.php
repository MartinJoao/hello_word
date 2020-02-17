<?php
//USAR VISTAS DE ARCHIVOS SEPARADOS
require_once './vendor/autoload.php';
//Para aplicar de forma correcta Twig, Loader y FilesystemLoader 
//Se debe de agregar / y no _ 
$loader = new \Twig\Loader\FilesystemLoader('./views');
//Para aplicar de forma correcta Twig y Enviroment 
//Se debe de agregar / y no _ 
$twig = new \Twig\Environment($loader, []);

$who = 'A todos los programadores';
$hello = 'sean todos bienvenidos a este tutorial.';

echo $twig->render('index.twig', compact('who', 'hello'));
