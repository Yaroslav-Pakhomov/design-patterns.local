<?php

declare(strict_types=1);

/**
 * Structural Patterns: Facade
 * Car class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Structural\Facade\FacadeClass;

use DesignPatterns\Structural\Facade\ObjectClass\CarElectronics;
use DesignPatterns\Structural\Facade\ObjectClass\CarEngine;
use JetBrains\PhpStorm\Pure;

/**
 * Собственно "фасад" автомобиля, методы которого
 * абстрагированы от сложности внутреннего устройства классов
 */
class CarFacade
{

	private CarEngine $carEngine;

	private CarElectronics $carElectronics;

	/**
	 * В конструкторе есть выбор: передать ли созданные ранее двигатель и электронику,
	 * либо вместе с объектом создать стандартные
	 *
	 * @param CarEngine|null      $carEngine
	 * @param CarElectronics|null $carElectronics
	 */
	#[Pure]
	public function __construct(CarEngine $carEngine = NULL, CarElectronics $carElectronics = NULL)
	{
		$this->carEngine = $carEngine ?: new CarEngine("\"Двигатель автомобиля по умолчанию\"");
		$this->carElectronics = $carElectronics ?: new CarElectronics("\"Автомобильная электроника по умолчанию\"");
	}

	/**
	 * Для запуска двигателя клиенту необходимо будет вызвать
	 * всего один метод, все остальное произойдет "под капотом"
	 */
	public function startTheCar(): void
	{
		$this->carEngine->start($this->carElectronics);
		$this->carElectronics->getAllSystemsOn();
	}
}
