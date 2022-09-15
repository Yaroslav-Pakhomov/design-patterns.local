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

/**
 * Класс вида Кофе с ванилью
 */
class VanillaCoffee extends AbstractDecoratorCoffee
{

	public function getCost(): int
	{
		return $this->coffee->getCost() + 3;
	}

	public function getDescription(): string
	{
		return $this->coffee->getDescription() . ', ваниль';
	}
}
