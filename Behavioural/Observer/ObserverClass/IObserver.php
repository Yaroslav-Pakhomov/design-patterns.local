<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Observer
 * IObserver interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 31.08.2022
 */

namespace DesignPatterns\Behavioural\Observer\ObserverClass;

use DesignPatterns\Behavioural\Observer\ObjectClass\ISubscriber;

/**
 * Интерфейс наблюдателя
 */
interface IObserver
{

	/**
	 * Добавляем новые книги в каталог и уведомляем об этом всех подписчиков
	 */
	public function updateCatalog(string $item): void;

	/**
	 * Добавление подписчика и отправка
	 * списка доступных книг
	 */
	public function addSubscribe(ISubscriber $subscriber): void;

	/**
	 * Удаление подписки на обновление каталога
	 */
	public function unsetSubscribe(ISubscriber $subscriber): void;

	/**
	 * Вспомогательный метод при обновлении каталога
	 * отправляет уведомление подписчику.
	 * Перебираем каждого из подписчиков, обращая их внимание
	 * на обновление каталога
	 */
	public function notifySubscribers(): void;
}
