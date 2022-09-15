<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Strategy
 * BoldTextType class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 01.09.2022
 */

namespace DesignPatterns\Behavioural\Strategy\StrategyClass;

/**
 * Жирный шрифт
 */
class BoldTextType implements IRenderType
{

	/**
	 * Выводим жирный текст
	 */
	public function renderText(string $text): void
	{
		echo "<b>" . $text . "</b><br>";
	}
}
