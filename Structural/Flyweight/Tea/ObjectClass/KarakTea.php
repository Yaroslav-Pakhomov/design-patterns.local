<?php

declare(strict_types=1);

/**
 * Structural Patterns: Flyweight
 * KarakTea class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 25.08.2022
 */

namespace DesignPatterns\Structural\Flyweight\Tea\ObjectClass;


/**
 * Чай
 */
class KarakTea
{

	public string $teaParam;

	public function __construct(string $teaType)
	{
		$this->teaParam = $teaType;
	}
}
