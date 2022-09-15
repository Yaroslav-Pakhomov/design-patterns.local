<?php

declare(strict_types=1);

/**
 * Structural Patterns: Composite
 * NailInterface interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Composite\CompositeCLass;

use DesignPatterns\Structural\Composite\ObjectClass\IEmployee;


class Department
{
	/**
	 * Наименование отдела
	 */
	protected string $name;

	/**
	 * Список всех работников
	 */
	protected array $employees = [];

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * Метод по добавлению работников в отдел
	 */
	public function setEmployee(IEmployee $employee): void
	{
		$this->employees[] = $employee;
	}

	/**
	 * Получаем всех работников в отделе
	 */
	public function getEmployees(): array
	{
		return $this->employees;
		// $name = [];
		// foreach ($this->employees as $employee) {
		// 	$name[] = $employee->getName();
		// }
		// return $name;
	}

	/**
	 * Получение общей ЗП отдела
	 */
	public function getDepartmentNetSalaries(): float
	{
		$netSalary = 0;

		foreach ($this->employees as $employee) {
			$netSalary += $employee->getSalary();
		}

		return $netSalary;
	}
}
