<?php

declare(strict_types=1);

/**
 * Creation Patterns: Factory Method
 * AbstractTypographerFactory class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 20.08.2022
 */

namespace DesignPatterns\Creational\FactoryMethod\FactoryMethodClass;

use DesignPatterns\Creational\FactoryMethod\ObjectClass\IPrinter;

/**
 *  Супер-класс для реализации фабричного метода
 * его потомками
 */
abstract class AbstractTypographerFactory
{
	/**
	 * Абстрактный метод, реализация которого
	 * будет различаться у потомков.
	 * Возвращает объект класса, который реализует
	 * интерфейса IPrinter
	 */
	abstract protected function preparePrinter(): IPrinter;

	/**
	 * Абстрактный печатник сначала подготавливает принтер,
	 * затем передает ему команду печатать
	 */
	public function printImage(): string
	{
		return $this->preparePrinter()->print();
	}

	public function getPrinter(): string
	{
		return $this->preparePrinter()->printer;
	}
}
