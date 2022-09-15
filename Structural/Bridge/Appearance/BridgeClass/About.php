<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * About class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\Appearance\BridgeClass;

use DesignPatterns\Structural\Bridge\Appearance\ObjectClass\ITheme;

/**
 * Cтраница "О нас", реализует
 * интерфейс IWebPage
 */
class About implements IWebPage
{

	protected ITheme $theme;

	/**
	 * Принимает объект, класс которого
	 * реализует интерфейс ITheme
	 */
	public function __construct(ITheme $theme)
	{
		$this->theme = $theme;
	}

	public function getContent(): string
	{
		return "Страница About page в теме " . $this->theme->getColor() . '.';
	}
}
