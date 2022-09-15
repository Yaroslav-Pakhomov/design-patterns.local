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
 * Администратор чата
 */
class AdminUser extends AbstractUser
{

	/**
	 * Администратора одаряем подписью
	 */
	public function __construct(string $name)
	{
		$this->name = '[Администратор]_' . $name;
	}
}
