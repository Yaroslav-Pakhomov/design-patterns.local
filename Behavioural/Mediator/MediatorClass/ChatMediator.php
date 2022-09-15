<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Mediator
 * AdminUser class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 29.08.2022
 */

namespace DesignPatterns\Behavioural\Mediator;

use DesignPatterns\Behavioural\Mediator\MediatorClass\IMediator;
use DesignPatterns\Behavioural\Mediator\ObjectClass\AbstractUser;
use DesignPatterns\Behavioural\Mediator\ObjectClass\AdminUser;
use DesignPatterns\Behavioural\Mediator\ObjectClass\RegularUser;

/**
 * Посредник - управляющий пользователями чата
 * В конструкторе обязательно определяем администратора чата,
 * записываем ссылку на него в свойство и назначен ему объект
 * посредника. Чат может быть и без обычных пользователей, но
 * админ быть обязан!
 */
class ChatMediator implements IMediator
{
	/**
	 * Администратор
	 */
	private AbstractUser $admin;

	/**
	 * Группа обычных пользователей
	 */
	private array $regularUsers = [];

	public function __construct(AdminUser $admin, RegularUser $regularUser = NULL)
	{
		$this->admin = $admin;
		$this->admin->setMediator($this);

		if ($regularUser !== NULL) {
			$this->regularUsers[ $regularUser->getName() ] = $regularUser;
			$this->regularUsers[ $regularUser->getName() ]->setMediator($this);
		}
	}

	/**
	 * Отправка сообщений: в зависимости от того кто отправляет, администратор
	 * будет снабжать сообщение ехидными комментариями
	 */
	public function sendMessage(AbstractUser $user, string $message): void
	{
		if ($user instanceof AdminUser) {
			echo $user->getName() . ' говорит: ' . $message . '<br><br>';
		}
		if ($user instanceof RegularUser) {
			echo $this->admin->getName() . ' - новое сообщение от: <br>';
			echo $user->getName() . ' говорит: ' . $message . '<br><br>';
		}
	}

	/**
	 * Добавление обычного пользователя так же вызывает токсичность админа.
	 * Второго админа чат вообще не пропустит.
	 */
	public function addUser(AbstractUser $user): void
	{
		if ($user instanceof AdminUser) {
			echo "Невозможно! Должен быть, единственный АДМИНИСТРАТОР!<br>";
		} elseif ($user instanceof RegularUser) {
			echo $this->admin->getName() . ': добавлен новый пользователь - "' . $user->getName() . '" в 4ат.<br><br>';

			$this->regularUsers[ $user->getName() ] = $user;
			$this->regularUsers[ $user->getName() ]->setMediator($this);
		}
	}

	/**
	 * Выводим список юзеров
	 */
	public function showUsers(): void
	{
		echo "Список пользователей<br><br>";

		echo "Админ: " . $this->admin->getName() . ' <br><br>';

		echo "Обычные пользователи:<br>";
		foreach ($this->regularUsers as $user) {
			echo $user->getName() . ' <br>';
		}

		echo '<br>';
	}
}
