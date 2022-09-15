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


interface IDesktopComputer
{

	/**
	 * Метод собирает строку из элементов массива
	 * компонентов компьютера и выводит его
	 */
	public function getDescription(): void;

	/**
	 * Метод для добавления компонента
	 */
	public function addComponent(string $component): void;
}
