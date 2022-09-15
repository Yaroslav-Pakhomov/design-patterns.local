<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Strategy
 * IRenderType interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 01.09.2022
 */

namespace DesignPatterns\Behavioural\Strategy\StrategyClass;

/**
 * Интерфейс типа ввода текста
 */
interface IRenderType
{

	/**
	 * Метод, выводящий текст на экран
	 */
	public function renderText(string $text): void;
}
