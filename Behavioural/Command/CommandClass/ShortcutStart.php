<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Command
 * ShortcutStart class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 26.08.2022
 */

namespace DesignPatterns\Behavioural\Command\CommandClass;

use DesignPatterns\Behavioural\Command\ReceiverClass\IApp;

/**
 * Класс-команда для запуска программ путем клика
 * на иконку (ярлык) приложения.
 * Может запускать любое приложение,
 * реализующее интерфейс IApp и
 * с указанным именем пользователя.
 */
class ShortcutStart implements IAppStarter
{

	/**
	 * Объект любого приложение, реализующее интерфейс IApp
	 */
	private IApp $receiver;

	/**
	 * Имя пользователя.
	 */
	private string $user;

	public function __construct(IApp $receiver, string $user)
	{
		$this->receiver = $receiver;
		$this->user = $user;
	}

	/**
	 * Кликаем по иконке и сообщаем приложению, какой
	 * именно юзер это сделал!
	 */
	public function startApp(): void
	{
		echo 'Пользователь "' . $this->user . '" запустил приложение, нажав на значок приложения!<br>';
		$this->receiver->start($this->user);
	}
}
