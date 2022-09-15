<?php

declare(strict_types=1);

/**
 * Structural Patterns: Proxy
 * IChopper interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Proxy\ObjectClass;

/**
 * Рубящие инструменты объединим общим
 * интерфейсом!
 */
interface IChopper
{
	public function chop(string $material): void;
}
