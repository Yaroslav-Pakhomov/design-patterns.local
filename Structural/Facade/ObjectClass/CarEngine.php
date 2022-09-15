<?php

declare(strict_types=1);

/**
 * Structural Patterns: Facade
 * CarEngine class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Structural\Facade\ObjectClass;

/**
 * Двигатель автомобиля
 */
class CarEngine
{

	private string $type;
	/**
	 * По умолчанию топливный насос находятся в состоянии покоя
	 */
	private bool $isFuelPumpOn = FALSE;
	/**
	 * По умолчанию катушки находятся в состоянии покоя
	 */
	private bool $isSparkles = FALSE;

	/**
	 * В конструкторе задаем двигателю тип
	 */
	public function __construct($type)
	{
		$this->type = $type;
	}

	/**
	 * Старт двигателя будет возможен только при помощи
	 * электроники двигателя, которая включит топливный насос
	 * и подаст напряжение на катушки зажигания
	 */
	public function start(CarElectronics $carElectronics): void
	{
		$carElectronics->prepareEngineStart($this);
		if ($this->isFuelPumpOn && $this->isSparkles) {
			echo 'Двигатель "' . $this->type . '" ЗАПУЩЕН.<br>';
		} else {
			echo 'Что-то пошло не так с двигателем...<br>';
		}
	}


	public function turnFuelPumpOn(): void
	{
		if (!$this->isFuelPumpOn) {
			$this->isFuelPumpOn = TRUE;
		}
	}

	public function makeSparkles(): void
	{
		if (!$this->isSparkles) {
			$this->isSparkles = TRUE;
		}
	}
}
