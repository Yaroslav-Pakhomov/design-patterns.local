<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: State
 * AbstractWater class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\State\StateClass;

use DesignPatterns\Behavioural\State\ObjectClass\Kettle;

/**
 * Родительский абстрактный класс воды,
 * реализующий интерфейс IWaterState
 */
abstract class AbstractWater implements IWaterState
{
	/**
	 * Температура воды
	 */
	protected int $waterTemp;

	/**
	 * Чайник, в котором находится вода
	 */
	protected Kettle $kettle;

	public function __construct(Kettle $kettle)
	{
		$this->kettle = $kettle;
	}

	public function getTemp(): int
	{
		return $this->waterTemp;
	}

	abstract public function reactToBoiling(): void;
}