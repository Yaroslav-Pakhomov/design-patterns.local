<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Memento
 * ISnapShot class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\Memento\MementoClass;

/**
 * Интерфейс для объекта - снимка
 */
interface ISnapShot
{

	/**
	 * Метод, возвращающий имя снепшота, состоящее
	 * из его даты и собственно строки
	 */
	public function getName(): string;

	/**
	 * Метод, возвращающий значение строки, которая будет
	 * перезаписывать поле класса StringObject
	 */
	public function getString(): string;

	/**
	 * Метод, возвращающий дату создания строки
	 */
	public function getDate(): string;
}
