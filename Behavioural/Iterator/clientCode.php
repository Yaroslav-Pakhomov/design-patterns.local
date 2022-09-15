<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\Iterator\ObjectClass\MyCollection;


$myCollection = new MyCollection([ "Item one", "Item two", "Item three", "Item four" ]);

$myCollectionIterator = $myCollection->getIterator();

for ($i = 0; $i <= 9; $i++) {
	echo $myCollectionIterator->getCurrent();
	echo '<br>';
	echo $myCollectionIterator->getNext();
	echo '<br>';
	echo '<br>';
}

