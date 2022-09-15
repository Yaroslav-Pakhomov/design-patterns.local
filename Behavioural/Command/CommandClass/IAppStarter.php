<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Command
 * IAppStarter class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 26.08.2022
 */

namespace DesignPatterns\Behavioural\Command\CommandClass;

/**
 * Интерфейс для классов-команд, которые
 * запускают приложения
 */
interface IAppStarter
{
	public function startApp(): void;
}
