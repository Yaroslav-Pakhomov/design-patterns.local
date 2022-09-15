<?php

declare(strict_types=1);

/**
 * Structural Patterns: Composite
 * NailInterface interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Structural\Composite\Nails;

/**
 * Интерфейс гвоздя - в данном случае в привязке к примеру
 * только один метод - получить цену
 */
interface INail
{
	public function getPrice(): int;
}
