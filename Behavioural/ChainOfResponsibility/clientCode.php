<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\ChainOfResponsibility\ChainOfResponsibilityClass\SubmittedPost;
use DesignPatterns\Behavioural\ChainOfResponsibility\ObjectClass\BlogPost;

// Создадим 2 записи, одна из них и не подтверждена и не подготовлена для базы данных, о второй же позаботились - у нее все в порядке
$blogPostOne = new BlogPost("Текст сообщения №1", FALSE, FALSE);
$blogPostTwo = new BlogPost("Текст сообщения №2", TRUE, TRUE);
$blogPostTree = new BlogPost("Текст сообщения №3", TRUE, FALSE);
$blogPostFour = new BlogPost("Текст сообщения №4", FALSE, TRUE);


// Создадим объект нашей цепочки и запустим нашу длинную и сложную последовательность сначала для первого, а затем и для второго поста
$postWriter = new SubmittedPost();

$postWriter->write($blogPostOne); // ПРОВАЛ! Сначала вам нужно отправить сообщение! Нажмите кнопку "Отправить"!!! Текст сообщения №1 не записан в Базу данных!
echo '<br>';
$postWriter->write($blogPostTwo); // Текст сообщения №2 была успешно выполнена запись в Базу данных!
echo '<br>';
$postWriter->write($blogPostTree); // ПРОВАЛ! Вам нужно сначала сделать htmlspecialchars() поста до отправки в БД или что-то в этом роде!! Текст сообщения №3 не записан в Базу данных!
echo '<br>';
$postWriter->write($blogPostFour); // ПРОВАЛ! Сначала вам нужно отправить сообщение! Нажмите кнопку "Отправить"!!! Текст сообщения №4 не записан в Базу данных!
echo '<br>';
