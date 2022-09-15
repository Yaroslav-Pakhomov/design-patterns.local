<?php

declare(strict_types=1);

/**
 * Creation Patterns: Simple Factory
 * CarEngineFactory class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 20.08.2022
 */

namespace DesignPatterns\Creational\SimpleFactory\SimpleFactoryClass;

use DesignPatterns\Creational\SimpleFactory\ObjectClass\CarEngine;
use DesignPatterns\Creational\SimpleFactory\ObjectClass\IVehicleEngine;

/**
 * Простая фабрика для создания двигателей
 */
class CarEngineFactory
{
	/**
	 * @param string $type Фабрика, в зависимости от переданного параметра, производит
	 * или дизельный или бензиновый двигатель. Клиенту же, нет необходимости
	 * разбираться в том, какое количество цилиндров и максимальное количество
	 * оборотов у выбранного типа двигателя
	 */
	public function makeCarEngine(string $type): IVehicleEngine|string
	{
		// Объект, который реализует Интерфейс IVehicleEngine. Создает двигатель.
		$engine = new CarEngine();

		switch ($type):
			case "GAS":
				// Если заказчику нужен бензиновый двигатель, делаем шести цилиндровый
				// мотор с максимальным количеством оборотов в минуту в 9000
				$engine->setFuelType('ГАЗ');
				$engine->setCylindersAmount(6);
				$engine->setMaxRPM(9000);
				return $engine;
			case "DIESEL":
				// С дизелем все понятно - 4000 и цилиндров всего 4.
				$engine->setFuelType('ДИЗЕЛЬ');
				$engine->setCylindersAmount(4);
				$engine->setMaxRPM(4000);
				return $engine;
			default:
				// И давайте, на всякий случай, осадим заказчика, если он хочет
				// чего-то, что наша фабрика производить не в состоянии!
				return "Неправильный тип двигателя! Наш завод может производить только ГАЗОВЫЕ или ДИЗЕЛЬНЫЕ двигатели!<br>";
		endswitch;
	}
}
