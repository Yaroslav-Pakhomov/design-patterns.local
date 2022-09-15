<?php

declare(strict_types=1);

/**
 * Structural Patterns: Decorator
 * SimpleNotification class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Decorator\Coffee\DecoratorClass;

use DesignPatterns\Structural\Decorator\Coffee\ObjectClass\ICoffee;

/**
 * Абстрактный класс для декораторов разных видов Кофе
 */
abstract class AbstractDecoratorCoffee implements ICoffee
{

	protected ICoffee $coffee;

	public function __construct(ICoffee $coffee)
	{
		$this->coffee = $coffee;
	}

	abstract public function getCost(): int;

	abstract public function getDescription(): string;
}
