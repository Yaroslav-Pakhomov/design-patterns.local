<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * AquaTheme class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\Appearance\ObjectClass;

/**
 * Морская тема
 */
class AquaTheme implements ITheme
{

	public function getColor(): string
	{
		return 'Light blue';
	}
}
