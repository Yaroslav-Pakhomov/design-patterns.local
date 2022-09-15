<?php

declare(strict_types=1);

/**
 * Creation Patterns: Prototype
 * Prototype class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Creational\Prototype;

/**
 * Класс - прототип, который необходимо
 * клонировать
 */
class Prototype
{
	private string $objectName;
	private int $objectID;

	public function __construct(string $objName, int $objId)
	{
		$this->objectName = $objName;
		$this->objectID = $objId;
	}

	/**
	 * В данном примере при клонировании меняем поле имени
	 * и инкриминируем ID
	 */
	public function __clone()
	{
		$this->objectName .= " CLONED";
		$this->objectID++;
	}

	public function __toString()
	{
		return "ID is: " . $this->objectID . " and name is: " . $this->objectName;
	}
}
