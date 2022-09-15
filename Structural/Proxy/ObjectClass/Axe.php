<?php

declare(strict_types=1);

/**
 * Structural Patterns: Proxy
 * Axe class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Proxy\ObjectClass;

/**
 * Топором очень сподручно рубить деревья
 */
class Axe implements IChopper
{

	public function chop(string $material): void
	{
		echo "Руби " . $material . " с Топором, как Викинг!";
	}
}
