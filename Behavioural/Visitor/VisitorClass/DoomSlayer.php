<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Visitor
 * DoomSlayer class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 02.09.2022
 */

namespace DesignPatterns\Behavioural\Visitor\VisitorClass;

use DesignPatterns\Behavioural\Visitor\ObjectClass\Cacodemon;
use DesignPatterns\Behavioural\Visitor\ObjectClass\Imp;

/**
 * Великий и ужасный палач рока, "посетитель"
 * демонов, желающих умереть эпично
 */
class DoomSlayer implements IGloryKiller
{
	/**
	 * Какодемона - взрываем
	 */
	public function killCacodemon(Cacodemon $cacodemon): void
	{
		echo 'Атака Doomslayer ' . $cacodemon->demonType . '<br>';
		$cacodemon->beingExplodeByGrenade();
	}

	/**
	 * Импа - разрываем
	 */
	public function killImp(Imp $imp): void
	{
		echo 'Атака Doomslayer ' . $imp->demonType . '<br>';
		$imp->beingTearedApart();
	}
}