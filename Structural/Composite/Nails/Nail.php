<?php

declare(strict_types=1);

/**
 * Structural Patterns: Composite
 * Nail class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Structural\Composite\Nails;

/**
 * Это гвоздь, у него есть конструктор, в котором задается цена
 * Это всё о гвозде
 */
class Nail implements INail
{
	private int $price;

	public function __construct(int $price)
	{
		$this->price = $price;
	}

	public function getPrice(): int
	{
		return $this->price;
	}
}
