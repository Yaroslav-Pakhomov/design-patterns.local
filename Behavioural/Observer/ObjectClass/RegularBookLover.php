<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Observer
 * RegularBookLover class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\Observer\ObjectClass;


/**
 * Обычный книголюб, который
 * знает что хочет
 */
class RegularBookLover extends AbstractBookLover
{

	/**
	 * Если у магазина, на который подписан книголюб
	 * появляется новая книга - пробегаем по присланному
	 * магазином списку и сверяемся со списком желаемого
	 * Если есть совпадения - покупаем книжку и вычеркиваем
	 * из списка
	 */
	public function notify($books): void
	{
		foreach ($books as $book) {
			foreach ($this->waitingList as $waitingBook) {
				if ($book === $waitingBook) {
					// Ключ элемента искомой книги
					$bookLookKey = array_search($book, $this->waitingList, TRUE);

					// Удаляем из списка ожидания
					unset($this->waitingList[ $bookLookKey ]);

					echo 'Привет! "' . $book . '" уже в магазине! ' . $this->getName() . ' забронировал её для приобретения!<br><br>';
				}
			}
		}
	}
}
