<?php

declare(strict_types=1);

/**
 * Structural Patterns: Flyweight
 * TeaShop class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 25.08.2022
 */

namespace DesignPatterns\Structural\Flyweight\Tea\FlyweightClass;

use DesignPatterns\Structural\Flyweight\Tea\ObjectClass\TeaMaker;

/**
 * Кафе, где принимаются и выполняются заказы
 */
class TeaShop
{

	protected array $orders;

	protected TeaMaker $teaMaker;

	public function __construct(TeaMaker $teaMaker)
	{
		$this->teaMaker = $teaMaker;
	}

	public function takeOrder(string $teaType, int $table): void
	{
		$this->orders[ $table ] = $this->teaMaker->make($teaType);
	}

	public function serve(): void
	{
		foreach ($this->orders as $table => $teaType) {
			echo "Принести чай \"" . $teaType->teaParam . "\", столик# " . $table . '. <br><br>';
		}
	}
}
