<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Command
 * TextEditorApp class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 26.08.2022
 */

namespace DesignPatterns\Behavioural\Command\ReceiverClass;

/**
 * Текстовый редактор
 */
class TextEditorApp implements IApp
{

	/**
	 * Любой пользователь может
	 * запустить приложение
	 */
	public function start(string $user): void
	{
		echo 'Текстовый редактор запущен пользователем "' . $user . '".<br>';
	}
}
