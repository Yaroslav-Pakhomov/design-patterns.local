<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Strategy
 * CursiveTextType class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 01.09.2022
 */

namespace DesignPatterns\Behavioural\Strategy\StrategyClass;

/**
 * Наклонный шрифт (курсив)
 */
class CursiveTextType implements IRenderType
{

	/**
	 * Выводим курсив
	 */
	public function renderText(string $text): void
	{
		echo "<i>" . $text . "</i><br>";
	}
}
