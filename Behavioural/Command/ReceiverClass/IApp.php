<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Command
 * IApp interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 26.08.2022
 */

namespace DesignPatterns\Behavioural\Command\ReceiverClass;

/**
 * Интерфейс приложения
 */
interface IApp
{

	/**
	 * В нашем примере у приложения будет только один метод
	 */
	public function start(string $user): void;
}
