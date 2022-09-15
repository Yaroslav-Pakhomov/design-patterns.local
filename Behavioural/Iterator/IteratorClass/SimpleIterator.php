<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Iterator
 * SimpleIterator class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 29.08.2022
 */

namespace DesignPatterns\Behavioural\Iterator\IteratorClass;

/**
 * Наш простой итератор
 */
class SimpleIterator implements IMyIterator
{
	/**
	 * Массив для итерации
	 */
	private array $collection;
	/**
	 * Текущая позиция итератор
	 */
	private int $currentPosition = 0;

	public function __construct(array $collection)
	{
		$this->collection = $collection;
	}

	public function getCurrent(): string
	{
		return $this->collection[ $this->currentPosition ];
	}

	public function hasNext(): bool
	{
		if (isset($this->collection[ $this->currentPosition + 1 ])) {
			return TRUE;
		}
		return FALSE;
	}

	public function getNext(): array|string
	{
		if ($this->hasNext()) {
			$this->currentPosition++;
			return $this->collection[ $this->currentPosition ];
		}
		return "No next item.";
	}
}