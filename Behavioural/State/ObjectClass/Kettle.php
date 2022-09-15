<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: State
 * Kettle class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\State\ObjectClass;

use DesignPatterns\Behavioural\State\StateClass\ColdWater;
use DesignPatterns\Behavioural\State\StateClass\IWaterState;
use JetBrains\PhpStorm\Pure;

/**
 * Чайник
 * В конструкторе инициализируем состояние чайника с холодной водой,
 * класс ColdWater, не забыв передать в его конструктор сам чайник
 */
class Kettle
{
	/**
	 * У чайника есть 2 состояния:
	 * горячая вода (HotWater),
	 * либо холодная (ColdWater)
	 */
	private IWaterState $waterState;

	#[Pure]
	public function __construct()
	{
		$this->waterState = new ColdWater($this);
	}

	/**
	 * Включение чайника, в зависимости от его состояния приведет
	 * или к мгновенному его выключению, или к смене холодного состояния
	 * на горячее
	 */
	public function turnOn(): void
	{
		echo 'Пытаюсь включить чайник...<br>';
		$this->waterState->reactToBoiling();
		echo 'Температура на экране чайника показывает: "' . $this->waterState->getTemp() . 'C" градусов. <br><br>';
	}

	/**
	 * Возможно кому-то в голову придет слить из чайника
	 * горячую воду и заменить ее холодной. Или наоборот,
	 * всякое случается
	 */
	public function changeWaterState(IWaterState $waterState): void
	{
		$this->waterState = $waterState;
	}

	/**
	 * Для того чтобы чайник по естественным причинам остыл,
	 * нужно подождать хотя бы 10 минут, чем и займется этот
	 * метод. Да, замечание: во вселенной программы, вода
	 * остывает на 79 градусов ровно за 10 минут.
	 */
	public function waitTenMinutes(): void
	{
		echo 'Итак, мы отправляемся на прогулку примерно на 10 минут...<br>';
		$this->waterState = new ColdWater($this);
		echo 'Похоже, вода стала прохладнее, температура: "' . $this->waterState->getTemp() . 'C" градусов. <br><br>';
	}
}