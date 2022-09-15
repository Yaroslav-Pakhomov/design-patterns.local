<?php

declare(strict_types=1);

/**
 * Structural Patterns: Decorator
 * ICoffee interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Decorator\Coffee\ObjectClass;

/**
 * Интерфейс аппарата с Кофе
 */
interface ICoffee
{

	public function getCost(): int;

	public function getDescription(): string;
}
