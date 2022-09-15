<?php

declare(strict_types=1);

/**
 * Creation Patterns: Factory Method
 * MonochromeTypographerFactory class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 20.08.2022
 */

namespace DesignPatterns\Creational\FactoryMethod\FactoryMethodClass;

use DesignPatterns\Creational\FactoryMethod\ObjectClass\MonochromePrinter;
use JetBrains\PhpStorm\Pure;

/**
 * Специалист по чёрно-белой печати,
 * класс - потомок AbstractTypographerFactory с реализацией фабричного метода,
 * возвращающей монохромный принтер
 */
class MonochromeTypographerFactory extends AbstractTypographerFactory
{

	/**
	 * ЧБ печатник подготавливает черно-белый принтер, с помощью
	 * Внедрения зависимости (Dependency injection - DI)
	 */
	#[Pure]
	protected function preparePrinter(): MonochromePrinter
	{
		return new MonochromePrinter();
	}
}
