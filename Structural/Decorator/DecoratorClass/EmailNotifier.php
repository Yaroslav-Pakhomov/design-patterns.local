<?php

declare(strict_types=1);

/**
 * Structural Patterns: Decorator
 * EmailNotifier class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Decorator\DecoratorClass;

/**
 * Декоратор - уведомление по e-mail
 */
class EmailNotifier extends BasicNotifier {

    public function notify($message): string {
        return "Email " . parent::notify($message);
    }
}
