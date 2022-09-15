<?php

declare(strict_types=1);

/**
 * Structural Patterns: Flyweight
 * CarVariation class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Flyweight\ObjectClass;

/**
 * Класс с повторяющимися свойствами автомобиля
 */
class CarVariation
{

	/**
	 * Цвет, повторяющееся св-во
	 */
	public string $color;

	/**
	 * Тип кузова, повторяющееся св-во
	 */
	public string $bodyType;

	/**
	 * Тип коробки передач, повторяющееся св-во
	 */
	public string $transmissionType;

	public function __construct(string $color, string $bodyType, string $transmissionType)
	{
		$this->color = $color;
		$this->bodyType = $bodyType;
		$this->transmissionType = $transmissionType;
	}

	/**
	 * Функция дл описания частей автомобиля с поправкой на то,
	 *  что вариация - часть целого. Соответственно в виде аргументов
	 * нужно передать владельца и производителя
	 */
	public function describeCarVariant($owner, $manufacturer): void
	{
		echo "Owner is: " . $owner . "<br>";
		echo "Manufacturer is: " . $manufacturer . "<br>";
		echo "Color is: " . $this->color . "<br>";
		echo "Body type is: " . $this->bodyType . "<br>";
		echo "Drive type is: " . $this->transmissionType . "<br>";
	}
}
