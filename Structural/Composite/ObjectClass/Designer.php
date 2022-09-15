<?php

declare(strict_types=1);

/**
 * Structural Patterns: Composite
 * NailInterface interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Composite\ObjectClass;

/**
 * Класс Designer для создания дизайнеров,
 * реализующий интерфейс IEmployee
 */
class Designer implements IEmployee
{
	protected string $name;
	protected float $salary;
	private string $roles = 'Designer';

	public function __construct(string $name, float $salary)
	{
		$this->name = $name;
		$this->salary = $salary;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setSalary(float $salary): void
	{
		$this->salary = $salary;
	}

	public function getSalary(): float
	{
		return $this->salary;
	}

	public function getRoles(): string
	{
		return $this->roles;
	}
}
