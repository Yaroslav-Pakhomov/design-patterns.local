<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Mediator
 * AdminUser class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 29.08.2022
 */

namespace DesignPatterns\Behavioural\Mediator\ObjectClass;

/**
 * Это обычный пользователь
 */
class RegularUser extends AbstractUser
{

	/**
	 * Обозначаем пользователя его типом
	 */
	public function __construct(string $name)
	{
		$this->name = '[Обычный пользователь]_' . $name;
	}
}
