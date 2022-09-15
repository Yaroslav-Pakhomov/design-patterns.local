<?php

declare(strict_types=1);

/**
 * Creation Patterns: Factory Method
 * ColorPrinter Class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 20.08.2022
 */

namespace DesignPatterns\Creational\FactoryMethod\ObjectClass;

use JetBrains\PhpStorm\Pure;

/**
 * Цветной принтер, реализующий
 * интерфейс IPrinter
 */
class ColorPrinter implements IPrinter
{
	private string $printer = 'Цветной принтер';

	/**
	 * Цветной принтер, конечно же, печатает
	 * цветное изображение.
	 */
	#[Pure]
	public function print(): string
	{
		return $this->getString();
	}

	private function getString(): string
	{
		return 'Printing <b style="color:#ff0000">colorfull</b> image. ' . $this->printer . ' ... <br>';
	}
}
