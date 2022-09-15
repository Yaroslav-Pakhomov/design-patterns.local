<?php

declare(strict_types=1);

/**
 * Creation Patterns: Builder
 * DesktopComputer class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Creational\Builder\ObjectClass;

/**
 * Собственно сам компьютер, который может иметь разные конфигурации.
 * Возможна общая часть конфигурации для всех компьютеров.
 */
class DesktopComputer implements IDesktopComputer
{
	private array $components = [];

	/**
	 * Каждый компьютер в любом случае будет состоять из корпуса,
	 * материнской платы, блока питания и оперативной памяти
	 * (еще, конечно, процессора, но я этот момент упустил),
	 * в целом, даже без участия "Строителей", такой ПК
	 * будет работать
	 */
	public function __construct()
	{
		$this->components[] = "Рабочий стол состоит из: корпуса, материнской платы, блока питания, оперативной памяти.";
	}

	public function getDescription(): void
	{
		$descriptionString = "";
		if (count($this->components) <= 1) {
			echo $this->components[0];
		} else {
			foreach ($this->components as $component) {
				$descriptionString .= $component . " ";
			}
			echo $descriptionString;
		}
	}

	public function addComponent(string $component): void
	{
		$this->components[] = $component;
	}
}
