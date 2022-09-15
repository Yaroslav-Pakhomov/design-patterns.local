<?php

declare(strict_types=1);

/**
 * Structural Patterns: Composite
 * NailBox class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Structural\Composite\Nails;

/**
 * Коробка с гвоздями, которая, в итоге, вызовом одного метода позволить
 * посчитать всю сумму гвоздей внутри себя, независимо
 * от того сколько в ней гвоздей и коробок
 */
class NailBox implements INail
{
	/**
	 * Контейнер для гвоздей и других коробок
	 */
	private array $container = [];
	private int $price = 0;

	public function getPrice(): int
	{
		return $this->price;
	}

	public function getContainer(): array
	{
		return $this->container;
	}

	/**
	 * Метод, добавляющий в коробку гвоздь или коробку с гвоздями
	 * Метод увеличивает стоимость этой коробки на стоимость
	 * добавленных в него гвоздей
	 */
	public function addItem(INail $nailOrNails): void
	{
		$this->price += $nailOrNails->getPrice();
		$this->container[] = $nailOrNails;
	}
}
