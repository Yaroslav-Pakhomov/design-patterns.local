<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");


use DesignPatterns\Behavioural\Observer\ObjectClass\RegularBookLover;
use DesignPatterns\Behavioural\Observer\ObserverClass\BookStore;


$booksStore = new BookStore([ "Властелин Колец", "Путешествие в конец ночи", "Чистый код" ]);

$readerGuyAlex = new RegularBookLover("Лёха");
$readerGuyAlex->addToWaitingList("Чистый код");

$readerGuyBob = new RegularBookLover("Вова");
$readerGuyBob->addToWaitingList("Путешествие в конец ночи");

$booksStore->addSubscribe($readerGuyAlex);

$booksStore->addSubscribe($readerGuyBob);

$readerGuyBob->addToWaitingList("Оседлай Тигра");

$booksStore->updateCatalog("Оседлай Тигра");
