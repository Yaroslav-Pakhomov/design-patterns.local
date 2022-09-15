<?php

declare(strict_types=1);

/**
 * Creation Patterns: Factory Method
 * ColorTypographerFactory class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 20.08.2022
 */

namespace DesignPatterns\Creational\FactoryMethod\FactoryMethodClass;

use DesignPatterns\Creational\FactoryMethod\ObjectClass\ColorPrinter;
use JetBrains\PhpStorm\Pure;

/**
 * Специалист по цветной печати,
 * класс - потомок AbstractTypographerFactory с реализацией фабричного метода,
 * возвращающей цветной принтер
 */
class ColorTypographerFactory extends AbstractTypographerFactory
{

	/**
	 * Печатник подготавливает цветной принтер, с помощью
	 * Внедрения зависимости (Dependency injection - DI)
	 */
	#[Pure]
	protected function preparePrinter(): ColorPrinter
	{
		return new ColorPrinter();
	}
}
