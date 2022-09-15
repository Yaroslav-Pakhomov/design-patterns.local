<?php

declare(strict_types=1);

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
require_once("../../vendor/autoload.php");

// Посредник (Invoker)
use DesignPatterns\Behavioural\Command\InvokerClass\ApplicationInvoker;

// Текстовый редактор (Receiver)
use DesignPatterns\Behavioural\Command\ReceiverClass\TextEditorApp;

// Классы-команды (Command)
// Ярлык
use DesignPatterns\Behavioural\Command\CommandClass\ShortcutStart;
// Консоль
use DesignPatterns\Behavioural\Command\CommandClass\ConsoleStart;

// Давайте запустим текстовый редактор с помощью шаблона.


// Объект текстовый редактор (Receiver)
$textEditorApp = new TextEditorApp();


// И два Класса-команды (Command):
// через ярлык
$textEditorShortcut = new ShortcutStart($textEditorApp, "Administrator");
// через консоль.
$textEditorConsole = new ConsoleStart($textEditorApp, "User");


// Создадим посредника (Invoker) для приложений
$applicationInvoker = new ApplicationInvoker();


// По очереди установим "стартеры" посреднику и посмотреть что вышло.
$applicationInvoker->setStarter($textEditorShortcut);
$applicationInvoker->invokeTheApp();

echo '<br>';

$applicationInvoker->setStarter($textEditorConsole);
$applicationInvoker->invokeTheApp();
