<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * John class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\ObjectClass;

/**
 * Водитель - Джон, со своим особым отношением
 * к вождению
 */
class John implements IDriver
{

	private string $name = "John";

	public function startEngine(): void
	{
		echo "Бубубубубу.<br>";
	}

	public function startDriving(): void
	{
		echo "Сцепление - 1-е - ускорение<br>";
	}

	public function crash(): void
	{
		echo "Невозможно.<br>";
	}

	public function getName(): string
	{
		return $this->name;
	}
}
