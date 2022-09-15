<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

// Класс
use DesignPatterns\Structural\Decorator\ObjectClass\SimpleNotification;

// Декораторы
use DesignPatterns\Structural\Decorator\DecoratorClass\BasicNotifier;
use DesignPatterns\Structural\Decorator\DecoratorClass\EmailNotifier;
use DesignPatterns\Structural\Decorator\DecoratorClass\SMSNotifier;
use DesignPatterns\Structural\Decorator\DecoratorClass\TelegramNotifier;


// Функция getNotification - клиентский код, который принимает сообщение и вызывает декоратор:
function getNotification($text, $decorator)
{
	echo "Messages and the message are: ";
	echo $decorator->notify($text);
}

// Создаем переменную, содержащую объект - простое уведомление, позволяющий это уведомление выводить.
$textNotification = new SimpleNotification();

// Создадим базовый декоратор и передадим в него простое уведомление.
$basicNotifier = new BasicNotifier($textNotification);

// И создадим всех наследников базового декоратор, с тем же уведомлением
$emailNotifier = new EmailNotifier($textNotification);
$smsNotifier = new SMSNotifier($textNotification);
$telegramNotifier = new TelegramNotifier($textNotification);

// Протестируем как сработает наша функция getNotification, в зависимости от того, какого из потомков мы ей передадим:
getNotification("Что-то отправленное по электронной почте", $emailNotifier);
echo '<br>';
getNotification("SMS сообщение", $smsNotifier);
echo '<br>';
getNotification("Telegram сообщение", $telegramNotifier);
echo '<br>';

// Обратите внимание, нам ничего не мешает поместить декоратор в декораторе, и отправить сообщения двумя способами! Главное не запутаться и не забыть того, что нам обязательно нужна обертка, содержащая базовый декоратор с объектом класса SimpleNotification!

$telegramAndSMS = new TelegramNotifier($smsNotifier);

// Все работает:
echo '<br>';
echo '<br>';
getNotification("Telegram и SMS сообщения", $telegramAndSMS);
