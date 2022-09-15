<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Visitor
 * Cacodemon class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 02.09.2022
 */

namespace DesignPatterns\Behavioural\Visitor\ObjectClass;

use DesignPatterns\Behavioural\Visitor\VisitorClass\IGloryKiller;

/**
 * Какодемон - летающий мясной шар,
 * плюющийся какой-то дрянью
 */
class Cacodemon extends AbstractDemon
{
	public function __construct()
	{
		$this->demonType = "Cacodemon";
	}

	/**
	 * Какодемон умирает именно так!
	 */
	public function beingExplodeByGrenade(): void
	{
		echo '"' . $this->demonType . '" - проглотил гранату и взорвался!<br>';
	}

	public function gloryDeath(IGloryKiller $doomSlayer): void
	{
		$doomSlayer->killCacodemon($this);
	}
}