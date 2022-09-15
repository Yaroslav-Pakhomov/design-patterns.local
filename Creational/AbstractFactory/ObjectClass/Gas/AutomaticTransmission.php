<?php

declare(strict_types=1);

/**
 * Creation Patterns: Abstract Factory
 * AutomaticTransmission class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 21.08.2022
 */

namespace DesignPatterns\Creational\AbstractFactory\ObjectClass\Gas;

use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\ITransmission;

/**
 * Реализация интерфейса ITransmission
 * для коробки-автомат
 */
class AutomaticTransmission implements ITransmission
{
	protected string $transmissionType = "Automatic";

	public function getTransmissionType(): string
	{
		return $this->transmissionType;
	}
}
