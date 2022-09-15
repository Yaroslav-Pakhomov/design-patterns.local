<?php

declare(strict_types=1);

/**
 * Creation Patterns: Singleton\Multiton
 * Singleton class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Creational\Singleton\SingletonClass;

/**
 * Класс - одиночка, с реализованной возможностью
 * его наследования
 */
class Singleton
{
	/**
	 * Объявляем массив с нашими "Одиночками"
	 */
	private static array $instances = [];

	private static Singleton $singleInstance;

	/**
	 * Перекрываем работу конструктора
	 */
	protected function __construct()
	{
	}

	/**
	 * "Фабричный" метод синглтона, проверяющий
	 * есть ли в массиве "одиночек" объект класса,
	 * который вызывает данный метод
	 */
	public static function getInstance(): Singleton
	{
		// Присваиваем переменной имя класса, из которого вызывается метод
		// он будет ключом в массиве
		$class = static::class;
		// Проверяем по ключу, не лежит ли в "пулле" одиночек
		// такой класс, если есть - возвращаем
		if (!isset(self::$instances[ $class ])) {
			// Добавляем в массив экземпляр этого класса
			// с ключом и так же возвращаем
			self::$instances[ $class ] = new static();
		}

		// Возвращаем элемент массива, в котором
		// находится вызываемый объект
		return self::$instances[ $class ];
	}

	/**
	 * "Простая реализация" синглтона, для демонстрации того,
	 * что в таком случае - от имени какого бы потомка мы не
	 * создавали синглтон, создаваться и храниться в статической
	 * переменной будет только базовый класс, соответственно
	 * доступ будет исключительно к методам базового класса
	 */
	public static function getSingleInstance(): Singleton
	{
		// Проверяем установлен ли объект в переменной
		if (!isset(self::$singleInstance)) {
			// Устанавливаем
			self::$singleInstance = new static();
		}

		// Возвращаем объект
		return self::$singleInstance;
	}

	/**
	 * В этой части класса расположены методы, которые благодаря
	 * реализации метода getInstance() могут и будут отличаться у всех
	 * потомков.
	 */
	public function printName(): void
	{
		echo static::class . "<br>";
	}

	public function singletonLogic(): void
	{
		echo "Вот некоторая бизнес-логика класса Singleton!<br>";
	}
}
