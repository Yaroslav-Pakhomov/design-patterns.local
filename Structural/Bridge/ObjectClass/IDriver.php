<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * IDriver interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\ObjectClass;

/**
 * Интерфейс водителя
 */
interface IDriver
{

	public function getName(): string;

	public function startEngine(): void;

	public function startDriving(): void;

	public function crash(): void;
}
