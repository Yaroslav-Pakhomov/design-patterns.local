<?php

declare(strict_types=1);

/**
 * Structural Patterns: Facade
 * ComputerFacade class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Structural\Facade\Computer\FacadeClass;

use DesignPatterns\Structural\Facade\Computer\ObjectClass\Computer;

class ComputerFacade
{
	protected Computer $computer;

	public function __construct(Computer $computer)
	{
		$this->computer = $computer;
	}

	public function turnOn(): void
	{
		$this->computer->getElectricShock();
		$this->computer->makeSound();
		$this->computer->showLoadingScreen();
		$this->computer->bam();
	}

	public function turnOff(): void
	{
		$this->computer->closeEverything();
		$this->computer->pullCurrent();
		$this->computer->sooth();
	}
}
