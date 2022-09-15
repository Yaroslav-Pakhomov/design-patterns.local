<?php

declare(strict_types=1);

/**
 * Structural Patterns: Decorator
 * SimpleNotification class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Decorator\ObjectClass;

/**
 * Класс простого уведомления, который мы прокачаем
 * декораторами
 */
class SimpleNotification implements INotifier
{

	public function notify($message): string
	{
		return "[" . $message . "]";
	}
}
