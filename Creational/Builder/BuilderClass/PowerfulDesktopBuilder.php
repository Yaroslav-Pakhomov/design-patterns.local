<?php

declare(strict_types=1);

/**
 * Creation Patterns: Builder
 * PowerfulDesktopBuilder class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Creational\Builder\BuilderClass;

// Сборка ПК по умолчанию
use DesignPatterns\Creational\Builder\ObjectClass\DesktopComputer;
use DesignPatterns\Creational\Builder\ObjectClass\IDesktopComputer;

/**
 * Вариация "Строителя" для сборки мощного компьютера,
 * реализующая интерфейс IDesktopBuilder
 */
class PowerfulDesktopBuilder implements IDesktopBuilder
{

	/**
	 * Объект компьютера по умолчанию
	 */
	private object $computer;

	public function __construct()
	{
		$this->computer = new DesktopComputer();
	}

	/**
	 * Метод для обнуления "сборки" если нужно собрать еще
	 * один компьютер, или что-то пошло не так
	 */
	public function resetBuilder(): void
	{
		$this->computer = new DesktopComputer();
	}

	/**
	 * Для мощного ПК нужен большой и быстрый твердотельный
	 * накопитель
	 */
	public function addSSDDrive(): void
	{
		$this->computer->addComponent("Гигантский твердотельный накопитель емкостью 1 ТБ.");
	}

	/**
	 * Видеокарта, конечно, мощная
	 */
	public function addVideoCard(): void
	{
		$this->computer->addComponent("Майнинг монстр RTX8000.");
	}

	public function getReadyComputer(): IDesktopComputer
	{
		return $this->computer;
		$this->resetBuilder();
	}
}
