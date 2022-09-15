<?php

declare(strict_types=1);

/**
 * Creation Patterns: Factory Method
 * Printer interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 20.08.2022
 */

namespace DesignPatterns\Creational\FactoryMethod\ObjectClass;

/**
 * Интерфейс для принтера
 */
interface IPrinter
{
	/**
	 * В данном примере у принтера один метод - напечатать
	 */
	public function print(): string;
}
