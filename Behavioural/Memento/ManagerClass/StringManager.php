<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Memento
 * StringManager class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\Memento\ManagerClass;

use DesignPatterns\Behavioural\Memento\ObjectClass\StringObject;

/**
 * Объект управляющий созданием снимков
 * В конструкторе инициализируем переменные и сразу же
 * создаем снимок самого первого состояния
 */
class StringManager
{

	/**
	 * Созданные снимки, массив объектов
	 * класса StringSnapShot
	 */
	private array $snapShots = [];

	/**
	 * Объект SomeString
	 */
	private StringObject $someStringObj;

	public function __construct(StringObject $someStringObj)
	{
		$this->someStringObj = $someStringObj;
		$this->createSnapShot();
	}

	/**
	 * Метод для смены строки в объекте SomeString, так же
	 * подразумевающий создание снимка при смене
	 */
	public function changeString(string $newString): void
	{
		$this->someStringObj->changeString($newString);
		$this->createSnapShot();
	}

	/**
	 * Метод по отмене $condition последних изменений объекта (наш ctrl+z).
	 * Восстанавливаем состояние объекта, передав в него
	 * снепшот, при условии, что есть из чего восстанавливать
	 *
	 * @param int $condition Указывает сколько последних изменений нужно убрать
	 */
	public function undo(int $condition = 1): void
	{
		// Необходимая размерность для массива объектов класса StringObject
		$countSnapShots = ++$condition;

		// Возвращаем необходимое кол-во отменяемых последних изменений
		$condition--;

		if (count($this->snapShots) >= $countSnapShots) {
			echo 'Количество отменённых изменений: ' . $condition . '.<br><br>';

			// Необходимый ключ элемента массива, в котором находится нужный объект класса StringObject
			$requiredObjectKey = count($this->snapShots) - $countSnapShots;

			// Восстанавливаем состояние объекта
			$this->someStringObj->restoreFromSnapShot($this->snapShots[ $requiredObjectKey ]);

			// Удаляем все более поздние элементы массива (состояния объекта класса StringObject)
			unset($this->snapShots[ count($this->snapShots) - $condition ]);
		} else {
			echo 'У вас есть только ' . count($this->snapShots) . ' снимков, восстанавливать нечего!<br><br>';
		}
	}


	/**
	 * Вспомогательный метод для конструктора
	 * При создании снимка - обращаемся к методу createSnapShot() класса StringObject
	 * и записываем результирующий объект в массив
	 */
	private function createSnapShot(): void
	{
		$this->snapShots[] = $this->someStringObj->createSnapShot();
	}
}
