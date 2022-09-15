<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * ITheme interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\Appearance\ObjectClass;

/**
 * Интерфейс Тем
 */
interface ITheme
{

	public function getColor(): string;
}
