<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Memento
 * StringSnapShot class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\Memento\MementoClass;

use JetBrains\PhpStorm\Pure;

/**
 * Класс снимка для объекта строки
 * Поля инициализируются в конструкторе
 */
class StringSnapShot implements ISnapShot
{

	/**
	 * Дата
	 */
	private string $date;

	/**
	 * Значение строки
	 */
	private string $snappedString;

	public function __construct(string $stringValue)
	{
		$this->snappedString = $stringValue;
		$this->date = date('d-m-Y H:i:s');
		echo '[Создан новый моментальный снимок] ' . $this->getName() . '<br><br>';
	}

	#[Pure]
	public function getName(): string
	{
		return $this->getDate() . ' - является датой, а строка - "' . $this->getString() . '"<br>';
	}

	public function getString(): string
	{
		return $this->snappedString;
	}

	public function getDate(): string
	{
		return $this->date;
	}
}
