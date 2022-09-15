<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Observer
 * BookLover class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\Observer\ObjectClass;

/**
 * Абстрактный класс книголюба
 */
abstract class AbstractBookLover implements ISubscriber
{
	/**
	 * Имя книголюба
	 */
	protected string $name;

	/**
	 * Список ожидаемых книг
	 */
	protected array $waitingList = [];

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * Время от времени книголюб хочет книгу, которая
	 * еще не вышла, при их наличии храним список в
	 * поле класса $waitingList
	 */
	public function addToWaitingList($book): void
	{
		$this->waitingList[] = $book;
	}

	/**
	 * Механизм отбора книг из списка желаемых
	 * у разных чтецов могут быть разные, поэтому
	 * оставим метод абстрактным
	 */
	abstract public function notify($books): void;
}
