<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Mediator
 * IMediator interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 29.08.2022
 */

namespace DesignPatterns\Behavioural\Mediator\MediatorClass;

use DesignPatterns\Behavioural\Mediator\ObjectClass\AbstractUser;

/**
 * Интерфейс посредника
 */
interface IMediator
{
	/**
	 * Отправка сообщения посредником
	 */
	public function sendMessage(AbstractUser $user, string $message): void;
}