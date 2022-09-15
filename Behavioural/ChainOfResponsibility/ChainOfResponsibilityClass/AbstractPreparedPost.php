<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Chain Of Responsibility
 * PreparedPost class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 25.08.2022
 */

namespace DesignPatterns\Behavioural\ChainOfResponsibility\ChainOfResponsibilityClass;

use DesignPatterns\Behavioural\ChainOfResponsibility\ObjectClass\BlogPost;

/**
 * Абстрактный класс для записи блога
 */
abstract class AbstractPreparedPost
{

	/**
	 * Защищённая переменная для сохранения следующего шага
	 * (я догадываюсь что в рамках примера она кажется лишней,
	 * но не упомянуть ее будет некорректно)
	 */
	protected object $nextStep;

	/**
	 * Абстрактный метод "записать" - будет реализовываться по разному у потомков
	 */
	abstract public function write(BlogPost $blogPost): void;
}
