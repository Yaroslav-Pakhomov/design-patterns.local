<?php

declare(strict_types=1);

/**
 * Structural Patterns: Flyweight
 * TeaMaker class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 25.08.2022
 */

namespace DesignPatterns\Structural\Flyweight\Tea\ObjectClass;


/**
 * Работает как производитель и сохраняет чай
 */
class TeaMaker
{

	protected array $availableTea = [];

	public function make(string $teaType)
	{
		if (empty($this->availableTea[ $teaType ])) {
			$this->availableTea[ $teaType ] = new KarakTea($teaType);
		}

		return $this->availableTea[ $teaType ];
	}
}
