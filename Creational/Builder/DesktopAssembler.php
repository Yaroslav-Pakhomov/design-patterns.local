<?php

declare(strict_types=1);

/**
 * Creation Patterns: Builder
 * DesktopAssembler class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Creational\Builder;

// Сборка ПК по умолчанию
use DesignPatterns\Creational\Builder\BuilderClass\PowerfulDesktopBuilder;
use DesignPatterns\Creational\Builder\BuilderClass\SimpleDesktopBuilder;
use DesignPatterns\Creational\Builder\ObjectClass\IDesktopComputer;

// ПК с заданными конфигурациями


/**
 * Класс - фабрика, отвечающая за сборку
 * конкретного вида компьютера
 */
class DesktopAssembler
{
	public static function assembleSimpleDesktop(): IDesktopComputer
	{
		$builder = new SimpleDesktopBuilder();
		$builder->addSSDDrive();
		$builder->addVideoCard();
		return $builder->getReadyComputer();
	}

	public static function assemblePowerfulDesktop(): IDesktopComputer
	{
		$builder = new PowerfulDesktopBuilder();
		$builder->addSSDDrive();
		$builder->addVideoCard();
		return $builder->getReadyComputer();
	}
}
