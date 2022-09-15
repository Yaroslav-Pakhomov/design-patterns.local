<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Visitor
 * Imp class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 02.09.2022
 */

namespace DesignPatterns\Behavioural\Visitor\ObjectClass;

use DesignPatterns\Behavioural\Visitor\VisitorClass\IGloryKiller;

/**
 * Имп
 */
class Imp extends AbstractDemon
{
	public function __construct()
	{
		$this->demonType = "Imp";
	}

	/**
	 * Если вы обратили внимание, то Импа
	 * Палач Рока разрывает пополам.
	 */
	public function beingTearedApart(): void
	{
		echo '"' . $this->demonType . '" был разорван на две части!<br>';
	}

	public function gloryDeath(IGloryKiller $doomSlayer): void
	{
		$doomSlayer->killImp($this);
	}
}