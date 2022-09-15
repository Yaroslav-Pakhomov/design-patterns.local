<?php

declare(strict_types=1);

/**
 * Structural Patterns: Proxy
 * ChoppingProxy class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Proxy\ProxyClass;

use DesignPatterns\Structural\Proxy\ObjectClass\Axe;
use DesignPatterns\Structural\Proxy\ObjectClass\IChopper;
use DesignPatterns\Structural\Proxy\ObjectClass\Machete;

/**
 * Объект - заместитель для рубящих инструментов
 */
class ChoppingProxy implements IChopper
{

	/**
	 * В зависимости от того что перед нами,
	 * выбираем подходящий инструмент.
	 */
	public function chop($material): void
	{
		if ($material === "Кустарник") {
			$chopper = new Machete();
			$chopper->chop($material);
		} elseif ($material === "Дерево") {
			$chopper = new Axe();
			$chopper->chop($material);
		} else {
			echo "Похоже " . $material . " отличается от деревьев или кустов, у вас нет подходящего инструмента...";
		}
	}
}
