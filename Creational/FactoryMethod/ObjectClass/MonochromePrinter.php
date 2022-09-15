<?php

declare(strict_types=1);

/**
 * Creation Patterns: Factory Method
 * MonochromePrinter Class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 20.08.2022
 */

namespace DesignPatterns\Creational\FactoryMethod\ObjectClass;

use JetBrains\PhpStorm\Pure;

/**
 * Черно-белый принтер, реализующий
 * интерфейс IPrinter
 */
class MonochromePrinter implements IPrinter
{
	public string $printer = 'Чёрно-белый принтер';

	/**
	 * Черно-белый принтер, конечно же, печатает
	 * черно-белое изображение.
	 */
	#[Pure]
	public function print(): string
	{
		return $this->getString();
	}

	private function getString(): string
	{
		return 'Printing <b style="color:#777">greyscale</b> image. ' . $this->printer . ' ... <br>';
	}
}
