<?php
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;

$container = new ContainerBuilder();

$container->setParameter('db_config', [
    'database_type' => 'mysql',
    'database_name' => 'message_board',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '123',
]);
$container->register('medoo_db', \Medoo\Medoo::class)
    ->setArguments([
        new Parameter('db_config')
    ]);

$container->register('user_gateway', \Emotion\Gateway\User::class)
    ->setArguments([
        new Reference('medoo_db')
    ]);

$container->register('message_gateway', \Emotion\Gateway\Message::class)
    ->setArguments([
        new Reference('medoo_db')
    ]);

