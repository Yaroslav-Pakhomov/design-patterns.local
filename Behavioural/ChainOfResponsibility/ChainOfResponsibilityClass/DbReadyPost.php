<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Chain Of Responsibility
 * DbConnectedForPost class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 25.08.2022
 */

namespace DesignPatterns\Behavioural\ChainOfResponsibility\ChainOfResponsibilityClass;

use DesignPatterns\Behavioural\ChainOfResponsibility\ObjectClass\BlogPost;

/**
 * Второе звено нашей цепочки
 */
class DbReadyPost extends AbstractPreparedPost
{

	/**
	 * Все то же самое, но теперь проверяем подготовлен ли
	 * пост для записи в БД, если нет, то сообщаем об этом
	 */
	public function write(BlogPost $blogPost): void
	{
		if ($blogPost->flags["isDbReady"] === TRUE) {
			echo $blogPost->text . ' - был успешно записан в Базу данных!<br>';
		} else {
			echo 'ПРОВАЛ! Вам нужно сначала сделать htmlspecialchars() поста до отправки в БД или что-то в этом роде!! ' . $blogPost->text . ' не записан в Базу данных!<br>';
		}
	}
}
