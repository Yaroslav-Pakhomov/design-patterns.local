<?php

declare(strict_types=1);

/**
 * Structural Patterns: Decorator
 * SimpleCoffee class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Decorator\Coffee\ObjectClass;

/**
 * Класс простого вида Кофе
 */
class SimpleCoffee implements ICoffee
{

	public function getCost(): int
	{
		return 10;
	}

	public function getDescription(): string
	{
		return 'Простой кофе';
	}
}
