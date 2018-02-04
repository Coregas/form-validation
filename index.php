<?php

require_once __DIR__ . '/bootstrap.php';

dump(__DIR__ . '/bootstrap.php');
$ug = $container->get('user_gateway');
//$bar = $doctrine->em->find(Emotion\Models\Entity\User::class, 1);
dump($bar);

echo file_get_contents('src/Views/main.php');