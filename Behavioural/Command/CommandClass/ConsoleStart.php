<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Command
 * ConsoleStart class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 26.08.2022
 */

namespace DesignPatterns\Behavioural\Command\CommandClass;

use DesignPatterns\Behavioural\Command\ReceiverClass\IApp;

/**
 * Класс-команда для запуска программ
 * через консоль.
 * Может запускать любое приложение,
 * реализующее интерфейс IApp и
 * с указанным именем пользователя.
 */
class ConsoleStart implements IAppStarter
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
	 * То же, что и с ярлыком, но команда
	 * поступила из терминала
	 */
	public function startApp(): void
	{
		echo 'Пользователь "' . $this->user . '" запустил приложение с помощью консольной команды!<br>';
		$this->receiver->start($this->user);
	}
}
