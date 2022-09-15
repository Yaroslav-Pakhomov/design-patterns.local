<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

// Объект, для сохранения состояния
use DesignPatterns\Behavioural\Memento\ObjectClass\StringObject;

// Объект управляющий созданием снимков
use DesignPatterns\Behavioural\Memento\ManagerClass\StringManager;


// Создадим объект StringObject
$stringObject = new StringObject("Начальная строка!");

// Объект управляющий объектом StringObject
$stringManager = new StringManager($stringObject);

echo '<br>';
echo '<br>';

// Попробуем сразу же отменить действие
$stringManager->undo();

echo '<br>';
echo '<br>';

// Перезаписываем строку
$stringManager->changeString("Измененная строка 1!!!");
$stringManager->changeString("Измененная строка 2!!!");
$stringManager->changeString("Измененная строка 3!!!");
$stringManager->changeString("Измененная строка 4!!!");
$stringManager->changeString("Измененная строка 5!!!");
$stringManager->changeString("Измененная строка 6!!!");
$stringManager->changeString("Измененная строка 7!!!");

echo '<br>';
echo '<br>';

$stringManager->undo(3);

echo '<br>';
echo '<br>';

echo $stringObject->getString();
