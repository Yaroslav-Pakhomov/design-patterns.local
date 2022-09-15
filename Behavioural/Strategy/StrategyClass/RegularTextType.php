<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Strategy
 * RegularTextType class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 01.09.2022
 */

namespace DesignPatterns\Behavioural\Strategy\StrategyClass;

/**
 * Обычная толщина текста
 */
class RegularTextType implements IRenderType
{

	/**
	 * Выводим обычный текст
	 */
	public function renderText(string $text): void
	{
		echo $text . "<br>";
	}
}
