<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * IWebPage interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\Appearance\BridgeClass;

use DesignPatterns\Structural\Bridge\Appearance\ObjectClass\ITheme;

/**
 * Интерфейс страниц сайта
 */
interface IWebPage
{

	/**
	 * Принимает объект, класс которого
	 * реализует интерфейс ITheme
	 */
	public function __construct(ITheme $theme);

	public function getContent(): string;
}
