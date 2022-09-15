<?php

declare(strict_types=1);

/**
 * Creation Patterns: Builder
 * DesktopBuilder interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Creational\Builder\BuilderClass;

// Сборка ПК по умолчанию
use DesignPatterns\Creational\Builder\ObjectClass\IDesktopComputer;

/**
 * Интерфейс сборщика компьютера, собственно
 * "Строителя"
 */
interface IDesktopBuilder
{

	/**
	 * Метод для "обнуления" строителя
	 */
	public function resetBuilder(): void;

	/**
	 * Добавляем видеокарту
	 */
	public function addVideoCard(): void;

	/**
	 * Твердотельный накопитель
	 */
	public function addSSDDrive(): void;

	/**
	 * Отдаем готовый ПК на выдачу
	 */
	public function getReadyComputer(): IDesktopComputer;
}
