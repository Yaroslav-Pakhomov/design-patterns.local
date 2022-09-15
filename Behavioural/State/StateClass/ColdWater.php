<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: State
 * ColdWater class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\State\StateClass;

use DesignPatterns\Behavioural\State\ObjectClass\Kettle;
use JetBrains\PhpStorm\Pure;

/**
 * Холодная вода
 * Конструктор устанавливает
 * температуру 20 градусов
 */
class ColdWater extends AbstractWater
{
	#[Pure]
	public function __construct(Kettle $kettle)
	{
		parent::__construct($kettle);
		$this->waterTemp = 20;
	}

	/**
	 * Холодная вода будет реагировать на нагревание бурлением,
	 * а по истечении 5 минут кипения, сменит "состояние" чайника
	 * на горячую воду
	 */
	public function reactToBoiling(): void
	{
		echo 'Вода начинает закипать, потому что температура "' . $this->waterTemp . 'C" градусов. Итак, мы ждем около 5 минут и...<br>';
		$this->kettle->changeWaterState(new HotWater($this->kettle));
	}
}