<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: State
 * IWaterState interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\State\StateClass;

/**
 * Интерфейс состояния воды
 */
interface IWaterState
{
	public function reactToBoiling(): void;
}