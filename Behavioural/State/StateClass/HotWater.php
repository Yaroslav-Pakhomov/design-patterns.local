<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: State
 * HotWater class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\State\StateClass;

use DesignPatterns\Behavioural\State\ObjectClass\Kettle;
use JetBrains\PhpStorm\Pure;

/**
 * Горячая вода
 * Конструктор устанавливает температуру
 * горячей воды в 100 градусов.
 */
class HotWater extends AbstractWater
{

	#[Pure]
	public function __construct(Kettle $kettle)
	{
		parent::__construct($kettle);
		$this->waterTemp = 100;
	}

	/**
	 * Реакция на кипячение горячей воды - привычная,
	 * она вырубит чайник мгновенно
	 */
	public function reactToBoiling(): void
	{
		echo 'Вода "' . $this->waterTemp . 'C" градусов. Температура приведет к мгновенному выключению чайника. Подождите полчаса или что-то в этом роде...<br>';
	}
}