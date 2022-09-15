<?php

declare(strict_types=1);

/**
 * Creation Patterns: Builder
 * SimpleDesktopBuilder class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Creational\Builder\BuilderClass;

// Сборка ПК по умолчанию
use DesignPatterns\Creational\Builder\ObjectClass\DesktopComputer;
use DesignPatterns\Creational\Builder\ObjectClass\IDesktopComputer;

/**
 * Вариация "Строителя" для сборки простенького компьютера,
 * реализующая интерфейс IDesktopBuilder
 */
class SimpleDesktopBuilder implements IDesktopBuilder
{
	/**
	 * Объект компьютера по умолчанию
	 */
	private object $computer;

	public function __construct()
	{
		$this->computer = new DesktopComputer();
	}

	public function resetBuilder(): void
	{
		$this->computer = new DesktopComputer();
	}

	/**
	 * Для простенького ПК достаточно и 120гб SSD
	 * чисто для системы
	 */
	public function addSSDDrive(): void
	{
		$this->computer->addComponent("Небольшой твердотельный накопитель емкостью 120 Гб.");
	}

	/**
	 * И обычной видеокарты
	 */
	public function addVideoCard(): void
	{
		$this->computer->addComponent("Простая видеокарта Radeon емкостью 1 Гб.");
	}

	public function getReadyComputer(): IDesktopComputer
	{
		return $this->computer;
		$this->resetBuilder();
	}
}
