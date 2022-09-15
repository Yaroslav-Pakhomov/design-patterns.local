<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Memento
 * StringObject class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\Memento\ObjectClass;

use DesignPatterns\Behavioural\Memento\MementoClass\ISnapShot;
use DesignPatterns\Behavioural\Memento\MementoClass\StringSnapShot;

/**
 * Объект, хранящий строку с возможностью
 * сохранять её состояние
 * В конструкторе инициализируем свойство строкой
 */
class StringObject
{

	private string $stringItself;

	public function __construct(string $initString)
	{
		$this->stringItself = $initString;
		echo 'Создана новая строка со значением: "' . $this->stringItself . '".<br><br>';
	}

	/**
	 * Метод для изменения строки
	 */
	public function changeString($newString): void
	{
		$prevString = $this->stringItself;
		$this->stringItself = $newString;
		echo 'Изменилось значение в строке из "' . $prevString . '" в "' . $this->stringItself . '"<br><br>';
	}

	/**
	 * С помощью этого метода будем восстанавливать состояние
	 * объекта из сохраненных ранее снимков,
	 * перезаписывать поле stringItself
	 *
	 * @param ISnapShot $snapshot принадлежит классу StringSnapShot
	 */
	public function restoreFromSnapShot(ISnapShot $snapshot): void
	{
		$this->stringItself = $snapshot->getString();
		echo 'Строка восстанавливается из моментального снимка с указанием даты: ' . $snapshot->getDate() . ' и предыдущая строка - это "' . $snapshot->getString() . '"<br><br>';
	}

	/**
	 * Фабричный метод, создающий снимок
	 * возвращает объект класса StringSnapShot
	 */
	public function createSnapShot(): ISnapShot
	{
		return new StringSnapShot($this->stringItself);
	}

	/**
	 * Возвращает поле stringItself
	 */
	public function getString(): string
	{
		return $this->stringItself;
	}
}
