<?php

declare(strict_types=1);

/**
 * Structural Patterns: Decorator
 * SMSNotifier class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Decorator\DecoratorClass;

/**
 * Декоратор - уведомление СМС
 */
class SMSNotifier extends BasicNotifier
{

	public function notify($message): string
	{
		return "SMS " . parent::notify($message);
	}
}
