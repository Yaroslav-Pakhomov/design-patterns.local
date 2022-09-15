<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * Car class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\BridgeClass;

/**
 * Автомобиль, наследник Vehicle
 */
class Car extends AbstractVehicle
{
	/**
	 * Реализация абстрактного метода drive()
	 * в случае автомобиля
	 */
	public function drive(): void
	{
		echo $this->driver->getName() . " - установлен в автомобиле.<br>";
		$this->driver->startEngine();
		$this->driver->startDriving();
		echo '<br>';
	}
}
