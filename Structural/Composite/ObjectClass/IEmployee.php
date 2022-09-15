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
 * Интерфейс для создания классов,
 * различных сотрудников
 */
interface IEmployee
{
	/**
	 * По умолчанию создаётся Имя и ЗП.
	 */
	public function __construct(string $name, float $salary);

	/**
	 * Получаем Имя.
	 */
	public function getName(): string;

	/**
	 * Устанавливаем ЗП.
	 */
	public function setSalary(float $salary);

	/**
	 * Получаем ЗП.
	 */
	public function getSalary(): float;

	/**
	 * Получаем роли.
	 */
	public function getRoles(): string;
}
