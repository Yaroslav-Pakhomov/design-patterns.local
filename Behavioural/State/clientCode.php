<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\State\ObjectClass\Kettle;

// Создадим объект чайника
$kettle = new Kettle();

// Включаем:
$kettle->turnOn();

// Включаем еще раз:
$kettle->turnOn();

// Теперь подождем 10 минут и обнаружим что вода остыла
$kettle->waitTenMinutes();