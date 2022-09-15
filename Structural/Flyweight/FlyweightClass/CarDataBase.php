<?php

declare(strict_types=1);

/**
 * Structural Patterns: Flyweight
 * CarDataBase class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Flyweight\FlyweightClass;

use DesignPatterns\Structural\Flyweight\ObjectClass\CarVariation;
use DesignPatterns\Structural\Flyweight\ObjectClass\CertainCar;

/**
 * "База данных" автомобилей
 */
class CarDataBase
{

	/**
	 * Массив с вариациями машин
	 */
	private array $carVariations = [];

	/**
	 * Массив с "готовыми" машинами
	 */
	private array $certainCars = [];

	/**
	 * Метод проверяет добавлена ли такая же вариацию ранее.
	 * Если ответ положительный, то в переменной сохраняем
	 * ссылку на созданную вариацию. Создаем и пишем в
	 * "базу" конкретную машину.
	 * В противно случае - создаем новую.
	 *
	 * @param string $owner владелец
	 * @param string $manufacturer производителя
	 * @param string $color цвет
	 * @param string $bodyType тип кузова
	 * @param string $transmissionType тип трансмиссии
	 */
	public function addCar(string $owner,
		string $manufacturer,
		string $color,
		string $bodyType,
		string $transmissionType): void
	{
		$carVariation = $this->getCarVariation($color, $bodyType, $transmissionType);

		if ($carVariation === NULL) {
			$carVariation = new CarVariation($color, $bodyType, $transmissionType);
			$this->carVariations[] = $carVariation;
		} else {
			$this->certainCars[] = new CertainCar($owner, $manufacturer, $carVariation);
		}
	}

	/**
	 * Метод проверяет - есть ли в "базе" вариаций совпадения
	 */
	private function getCarVariation(string $color, string $bodyType, string $transmissionType): ?CarVariation
	{
		foreach ($this->carVariations as $i => $carVariation) {
			if ($carVariation->color === $color && $carVariation->bodyType === $bodyType && $carVariation->transmissionType === $transmissionType) {
				return $this->carVariations[ $i ];
			}
		}

		return NULL;
	}

	/**
	 * Выводим список конкретных автомобилей и их описание
	 */
	public function printCertainCars(): void
	{
		echo "<b>Определенные Автомобили:</b><br><br>";

		foreach ($this->certainCars as $certainCar) {
			$certainCar->describeCertainCar();
			echo "<br>";
		}

		echo "<br>";
	}

	/**
	 * Список вариаций автомобилей
	 */
	public function printCarVariations(): void
	{
		echo "<b>Варианты автомобилей:</b><br><br>";

		foreach ($this->carVariations as $carVariation) {
			$carVariation->describeCarVariant("Нет владельца", "Нет производителя");
			echo "<br>";
		}

		echo "<br>";
	}
}
