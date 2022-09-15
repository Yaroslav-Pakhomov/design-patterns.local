<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Command
 * ApplicationInvoker class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 26.08.2022
 */

namespace DesignPatterns\Behavioural\Command\InvokerClass;

use DesignPatterns\Behavioural\Command\CommandClass\IAppStarter;

/**
 * Класс, отвечающий за действия с текстовым редактором
 */
class ApplicationInvoker
{

	/**
	 * В переменной будет содержаться Класс-команда,
	 * который реализует интерфейс IAppStarter
	 */
	private IAppStarter $starter;

	/**
	 * С помощью этого метода можно сменить "стартера" приложения,
	 * а зависимости от того - куда потянулся пользователь:
	 * в консоль или к ярлыку
	 */
	public function setStarter(IAppStarter $starter): void
	{
		$this->starter = $starter;
	}

	public function invokeTheApp(): void
	{
		$this->starter->startApp();
	}
}
