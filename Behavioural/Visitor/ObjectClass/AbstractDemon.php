<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Visitor
 * AbstractDemon class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 02.09.2022
 */

namespace DesignPatterns\Behavioural\Visitor\ObjectClass;

use DesignPatterns\Behavioural\Visitor\VisitorClass\IGloryKiller;

/**
 * Абстрактный класс демона
 */
abstract class AbstractDemon
{
	/**
	 * У демона есть только название
	 * и способ эпично умереть!
	 */
	public string $demonType;

	/**
	 * Смерть демона - только от рук
	 * Палача Рока!
	 */
	abstract public function gloryDeath(IGloryKiller $doomSlayer): void;
}