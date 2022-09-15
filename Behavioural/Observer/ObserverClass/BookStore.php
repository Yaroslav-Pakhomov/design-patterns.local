<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Observer
 * BookStore class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\Observer\ObserverClass;

use DesignPatterns\Behavioural\Observer\ObjectClass\ISubscriber;

/**
 * BookStore интернет - магазин,
 * реализующий шаблон Наблюдатель IObserver
 * В полях класса содержатся 2 массива:
 * подписчики на обновления каталога и
 * собственно каталог, в данном случае - книжный
 */
class BookStore implements IObserver
{

	/**
	 * Подписчики на обновления книжного каталога
	 */
	private array $subscribers = [];

	/**
	 * Книжный каталог
	 */
	private array $books = [];

	public function __construct(array $startBooksPull)
	{
		$this->books = array_merge($this->books, $startBooksPull);
	}

	public function updateCatalog(string $item): void
	{
		$this->books[] = $item;
		echo '"' . $item . '" добавлено в каталог книг!<br><br>';

		$this->notifySubscribers();
	}

	public function addSubscribe(ISubscriber $subscriber): void
	{
		$this->subscribers[ $subscriber->getName() ] = $subscriber;
		$subscriber->notify($this->books);
	}

	public function unsetSubscribe(ISubscriber $subscriber): void
	{
		unset($this->subscribers[ $subscriber->getName() ]);
	}

	public function notifySubscribers(): void
	{
		foreach ($this->subscribers as $subscriber) {
			$subscriber->notify($this->books);
		}
	}
}
