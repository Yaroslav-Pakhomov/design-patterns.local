<?php

declare(strict_types=1);

/**
 * Creation Patterns: Abstract Factory
 * MechanicalTransmission class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 21.08.2022
 */

namespace DesignPatterns\Creational\AbstractFactory\ObjectClass\Diesel;

use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\ITransmission;

/**
 * Реализация интерфейса ITransmission
 * для механической коробки передач
 */
class MechanicalTransmission implements ITransmission
{
	protected string $transmissionType = "Mechanic";

	public function getTransmissionType(): string
	{
		return $this->transmissionType;
	}
}
