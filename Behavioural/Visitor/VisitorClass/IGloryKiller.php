<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Visitor
 * IGloryKiller interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 02.09.2022
 */

namespace DesignPatterns\Behavioural\Visitor\VisitorClass;

use DesignPatterns\Behavioural\Visitor\ObjectClass\Cacodemon;
use DesignPatterns\Behavioural\Visitor\ObjectClass\Imp;

/**
 * Интерфейс нашего Палача Рока, а по
 * совместительствую "посетителя" демонов.
 * Так как демонов мы придумали пока еще только двоих,
 * и методов в интерфейсе будет на этих двух
 */
interface IGloryKiller
{

	public function killCacodemon(Cacodemon $cacodemon);

	public function killImp(Imp $imp);
}