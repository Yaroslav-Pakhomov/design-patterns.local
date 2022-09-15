<?php

declare(strict_types=1);

/**
 * Structural Patterns: Facade
 * Computer class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Structural\Facade\Computer\ObjectClass;


class Computer
{
	public function getElectricShock(): void
	{
		echo "Ouch!";
	}

	public function makeSound(): void
	{
		echo "Beep beep!";
	}

	public function showLoadingScreen(): void
	{
		echo "Loading..";
	}

	public function bam(): void
	{
		echo "Ready to be used!";
	}

	public function closeEverything(): void
	{
		echo "Bup bup bup buzzzz!";
	}

	public function sooth(): void
	{
		echo "Zzz";
	}

	public function pullCurrent(): void
	{
		echo "Haah!";
	}
}
