<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Iterator
 * IMyIterator interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 29.08.2022
 */

namespace DesignPatterns\Behavioural\Iterator\IteratorClass;

/**
 * Интерфейс нашего итератора
 */
interface IMyIterator
{

	/**
	 * Метод получения текущего положения итератора
	 */
	public function getCurrent(): string;

	/**
	 * Метод проверки - есть ли следующий элемент
	 */
	public function hasNext(): bool;

	/**
	 * Метод перехода к следующему элементу
	 */
	public function getNext(): array|string;
}