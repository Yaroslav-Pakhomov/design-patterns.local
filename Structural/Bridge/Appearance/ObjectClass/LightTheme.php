<?php

declare(strict_types=1);

/**
 * Structural Patterns: Bridge
 * LightTheme class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Bridge\Appearance\ObjectClass;

/**
 * Светлая тема
 */
class LightTheme implements ITheme {

    public function getColor(): string {
        return 'Off white';
    }
}
