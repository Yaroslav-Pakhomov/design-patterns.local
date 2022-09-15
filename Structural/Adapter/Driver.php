<?php

declare(strict_types=1);

/**
 * Structural Patterns: Adapter
 * Driver class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Adapter\ObjectClass;

/**
 * Наш нежный водитель, скрупулезно относящийся к тому,
 * передвижению на каком транспорте его принуждают!
 */
class Driver
{
	/**
	 * Демонстрация того, как транспорт едет
	 * А если транспорт не тот, то не едет
	 *
	 * @param object $vehicle объект, который реализует интерфейс IFourWheelsVehicle.
	 * Можно заменить определения аргумента на (FourWheelsVehicle $vehicle),
	 * чтобы избавить от лишней проверки.
	 */

	public static function showRide(object $vehicle): string
	{
		if ($vehicle instanceof IFourWheelsVehicle) {
			return $vehicle->ride();
		}

		return "Ты пытаешься вызвать ride() " . get_class($vehicle) . ". У него нет метода ride()! Вам нужен адаптер, чтобы показать, как вы на нем ездите!";
	}
}
