<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Chain Of Responsibility
 * SubmittedPost class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 25.08.2022
 */

namespace DesignPatterns\Behavioural\ChainOfResponsibility\ChainOfResponsibilityClass;

use DesignPatterns\Behavioural\ChainOfResponsibility\ObjectClass\BlogPost;

/**
 * Класс - начало нашей короткой цепочки обязанностей
 * направленной на достижения поста базы данных.
 */
class SubmittedPost extends AbstractPreparedPost
{

	/**
	 * Метод принимает в виде аргумента объект BlogPost
	 * и если флаг "isSubmitted" - истинный, то
	 * передает дальнейшее управление цепочкой классу
	 * DbReadyPost. В противном случае - сообщаем
	 * писателю о том, что нужно нажать кнопку "Отправить".
	 */
	public function write(BlogPost $blogPost): void
	{
		if ($blogPost->flags["isSubmitted"] === TRUE) {
			$this->nextStep = new DbReadyPost();
			$this->nextStep->write($blogPost);
		} else {
			echo 'ПРОВАЛ! Сначала вам нужно отправить сообщение! Нажмите кнопку "Отправить"!!! ' . $blogPost->text . ' не записан в Базу данных!<br>';
		}
	}
}
