<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * AbstractVehicle class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\BridgeClass;

use DesignPatterns\Structural\Bridge\ObjectClass\IDriver;

/**
 * Верховный класс иерархии "абстракций"
 * для нашего примера "Моста"
 */
abstract class AbstractVehicle
{

	/**
	 * В автомобиль мы можем поместить водителя
	 */
	protected IDriver $driver;

	/**
	 * Водитель должен быть инициализирован в классе по принципу
	 * Инверсии зависимости (Dependency inversion) за счёт
	 * внедрения зависимости (Dependency Injection - DI)
	 * путем агрегации в конструкторе
	 */
	public function __construct(IDriver $driver)
	{
		$this->driver = $driver;
	}

	/**
	 * Добавим возможность сменить водителя, если
	 * в его манере езды нас что-то не устроит
	 */
	public function changeDriver(IDriver $driver): void
	{
		$this->driver = $driver;
	}

	/**
	 * Реализацию этого метода оставим потомкам
	 */
	abstract public function drive(): void;
}
