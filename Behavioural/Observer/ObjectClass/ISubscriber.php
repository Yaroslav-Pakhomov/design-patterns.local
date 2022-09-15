<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Observer
 * ISubscriber interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\Observer\ObjectClass;

/**
 * Интерфейс подписчика
 */
interface ISubscriber
{
	public function getName(): string;

	public function notify($books): void;
}
