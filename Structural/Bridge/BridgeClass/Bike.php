<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * Bike class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\BridgeClass;

/**
 * Мотоцикл, наследник Vehicle
 */
class Bike extends AbstractVehicle
{
	/**
	 * Реализация абстрактного метода drive()
	 * в случае мотоцикла
	 */
	public function drive(): void
	{
		echo $this->driver->getName() . " - установить на велосипед.<br>";
		$this->driver->startEngine();
		$this->driver->crash();
		echo '<br>';
	}
}
