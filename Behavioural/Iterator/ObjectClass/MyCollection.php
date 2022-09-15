<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Iterator
 * MyCollection class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 29.08.2022
 */

namespace DesignPatterns\Behavioural\Iterator\ObjectClass;

use DesignPatterns\Behavioural\Iterator\IteratorClass\IMyIterator;
use DesignPatterns\Behavioural\Iterator\IteratorClass\SimpleIterator;
use JetBrains\PhpStorm\Pure;

/**
 * Самодельная коллекция с фабричным методом
 * для создания итератор
 */
class MyCollection
{
	private array $collection;

	public function __construct(array $collection)
	{
		$this->collection = $collection;
	}

	#[Pure]
	public function getIterator(): IMyIterator
	{
		return new SimpleIterator($this->collection);
	}
}