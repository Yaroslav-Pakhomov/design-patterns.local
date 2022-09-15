<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Mediator
 * AbstractUser class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 29.08.2022
 */

namespace DesignPatterns\Behavioural\Mediator\ObjectClass;

use DesignPatterns\Behavioural\Mediator\MediatorClass\IMediator;

/**
 * Абстрактный класс пользователя чата
 */
abstract class AbstractUser
{
	/**
	 * Объект посредника для общения между пользователями
	 */
	protected object $mediator;

	/**
	 * Имя пользователя
	 */
	protected string $name;

	/**
	 * Установка посредника
	 */
	public function setMediator(IMediator $mediator): void
	{
		$this->mediator = $mediator;
	}

	/**
	 * Отправка сообщений будет происходить через посредника
	 */
	public function sendMessage(string $message): void
	{
		$this->mediator->sendMessage($this, $message);
	}

	public function getName(): string
	{
		return $this->name;
	}
}