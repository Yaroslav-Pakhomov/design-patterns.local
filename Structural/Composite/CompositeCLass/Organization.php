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


class Organization
{
	/**
	 * Список всех работников
	 */
	protected array $employees = [];

	/**
	 * Список всех отделов
	 */
	protected array $department = [];

	/**
	 * Список всех отделов
	 */
	// protected Department $departmentObj;

	/**
	 * Метод по добавлению работников
	 */
	public function addEmployee(IEmployee $employee): void
	{
		$this->employees[] = $employee;
	}

	public function getEmployees(): array
	{
		return $this->employees;
	}

	/**
	 * Получение общей ЗП организации
	 */
	public function getNetSalaries(): float
	{
		$netSalary = 0;

		foreach ($this->employees as $employee) {
			$netSalary += $employee->getSalary();
		}

		return $netSalary;
	}

	/**
	 * Добавление отдела в организацию
	 */
	public function setDepartment(string $name, IEmployee $employee): void
	{
		if (!isset($this->department[ $name ])) {
			$this->department[ $name ] = new Department($name);
		}
		$this->department[ $name ]->setEmployee($employee);
	}

	/**
	 * Получаем отдел из организации
	 */
	public function getDepartment(string $name): Department|string
	{
		return $this->department[ $name ] ?? ('Отдел "' . $name . '" не найден.');
	}


}
