<?php

declare(strict_types=1);

/**
 * Structural Patterns: Decorator
 * INotifier interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Decorator\ObjectClass;

/**
 * Интерфейс уведомителя, который должны реализовывать
 * как расширяемый шаблоном класс, так и непосредственно
 * декораторы
 */
interface INotifier {

    public function notify($message): string;
}
