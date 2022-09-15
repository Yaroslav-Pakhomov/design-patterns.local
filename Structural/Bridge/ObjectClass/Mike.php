<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * Mike class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\ObjectClass;

/**
 * Водитель - Майк, не самый хороший
 * водитель
 */
class Mike implements IDriver
{

	private string $name = "Mike";

	public function startEngine(): void
	{
		echo "Вррум-вррум.<br>";
	}

	public function startDriving(): void
	{
		echo "О боже, я не знаю, что делать!<br>";
	}

	public function crash(): void
	{
		echo "Да, получил то, что ожидал...<br>";
	}

	public function getName(): string
	{
		return $this->name;
	}
}
