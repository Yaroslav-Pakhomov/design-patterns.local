<?php

declare(strict_types=1);

/**
 * Structural Patterns: Proxy
 * Machete class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Proxy\ObjectClass;

/**
 * Мачете - отличный рубящий инструмент, но
 * для своих целей, само собой
 */
class Machete implements IChopper
{

	public function chop(string $material): void
	{
		echo "Руби " . $material . " с Мачете, как бразильский Бандидо!";
	}
}
