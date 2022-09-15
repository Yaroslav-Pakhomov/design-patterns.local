<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * DarkTheme class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\Appearance\ObjectClass;

/**
 * Тёмная тема
 */
class DarkTheme implements ITheme
{

	public function getColor(): string
	{
		return 'Dark Black';
	}
}
