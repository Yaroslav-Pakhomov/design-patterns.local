<?php

declare(strict_types=1);

/**
 * Structural Patterns: Decorator
 * BasicNotifier class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Decorator\DecoratorClass;

use DesignPatterns\Structural\Decorator\ObjectClass\INotifier;

/**
 * Базовый класс декораторов для
 * SimpleNotification
 */
class BasicNotifier implements INotifier
{

	/**
	 * В базовом объекте декоратора должен быть
	 * объект класса SimpleNotification, так как
	 * именно его функционал мы и расширяем
	 * в потомках - вполне может присутствовать и
	 * потомок
	 */
	protected INotifier $notifier;

	public function __construct(INotifier $notifier)
	{
		$this->notifier = $notifier;
	}

	/**
	 * Родительский класс - обращается к SimpleNotification,
	 * в потомках это может быть и любая другая "обертка"
	 */
	public function notify($message): string
	{
		return $this->notifier->notify($message);
	}
}
