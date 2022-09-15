<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\Mediator\ChatMediator;
use DesignPatterns\Behavioural\Mediator\ObjectClass\AdminUser;
use DesignPatterns\Behavioural\Mediator\ObjectClass\RegularUser;

// Создадим админа Василия и обычного пользователи, и с их помощью создадим чат!
$adminUser = new AdminUser("Вася");
$regularUserVova = new RegularUser("Вова");

$chatRoom = new ChatMediator($adminUser, $regularUserVova);

// Посмотрим как отправляются сообщения разными типами пользователей:
$adminUser->sendMessage("Всем привет, я АДМИНИСТРАТОР Вася!");
$regularUserVova->sendMessage("Привет, я Вова!");

// А теперь Станислав решил добавиться в чат
$regularUserSlava = new RegularUser("Слава");

$chatRoom->addUser($regularUserSlava);

$regularUserSlava->sendMessage("Привет, ребята, я Слава, как дела?");

// Попробуем добавить ещё одного Админа
$adminUserArtem = new AdminUser("Тёма");
$chatRoom->addUser($adminUserArtem);

echo '<br>';
echo '<br>';

// Выведем список юзеров. Потому что позаботились о такой возможности
$chatRoom->showUsers();
