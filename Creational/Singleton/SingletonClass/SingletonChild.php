<?php

declare(strict_types=1);

/**
 * Creation Patterns: Singleton\Multiton
 * SingletonChild class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Creational\Singleton\SingletonClass;

/**
 * Наследник одиночки с перегруженным методом
 * singletonLogic()
 */
class SingletonChild extends Singleton
{

	public function singletonLogic(): void
	{
		echo "А вот некоторая бизнес-логика дочернего элемента Singleton!<br>";
	}
}
