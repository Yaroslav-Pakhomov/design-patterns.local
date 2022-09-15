<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Creational\Singleton\SingletonClass\Singleton;
use DesignPatterns\Creational\Singleton\SingletonClass\SingletonChild;

// Теперь запустим код, создав синглтон и его потомка с помощью метода getInstance(), который позволяет потомкам создавать свой экземпляр.

$singleton = Singleton::getInstance();
$singletonChild = SingletonChild::getInstance();

echo 'Реализация с помощью метода "static": <br><br>';
$singleton->printName();
$singleton->singletonLogic();

echo '<br>';

$singletonChild->printName();
$singletonChild->singletonLogic();

echo '<br>';
echo '<br>';
echo '<br>';

// Очистим переменные и создадим одиночек уже с помощью метода getSingleInstance().
unset($singleton, $singletonChild);

$singleton = Singleton::getSingleInstance();
$singletonChild = SingletonChild::getSingleInstance();

echo 'Реализация с помощью метода "self": <br><br>';
$singleton->printName();
$singleton->singletonLogic();

echo '<br>';

// И на выводе обнаружим, что был создан только экземпляр класса Singleton и вызываются только его методы.

$singletonChild->printName();
$singletonChild->singletonLogic();
