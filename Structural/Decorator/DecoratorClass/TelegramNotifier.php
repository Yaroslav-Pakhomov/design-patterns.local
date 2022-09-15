<?php

declare(strict_types=1);

/**
 * Structural Patterns: Decorator
 * TelegramNotifier class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Decorator\DecoratorClass;

/**
 * Декоратор - уведомление Телеграмм
 */
class TelegramNotifier extends BasicNotifier
{

	public function notify($message): string
	{
		return "Telegram " . parent::notify($message);
	}
}
