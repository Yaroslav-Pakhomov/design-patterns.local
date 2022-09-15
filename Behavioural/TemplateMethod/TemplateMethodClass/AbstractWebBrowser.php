<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Template Method
 * AbstractWebBrowser class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 01.09.2022
 */

namespace DesignPatterns\Behavioural\TemplateMethod\TemplateMethodClass;

/**
 * Абстрактный класс веб браузера
 */
abstract class AbstractWebBrowser
{
	protected string $browserName;

	/**
	 * В конструкторе будем жестко фиксировать
	 * имя браузера, который мы запустили
	 */
	protected function getName(): string
	{
		return $this->browserName;
	}

	/**
	 * Наш основной алгоритм
	 */
	final public function surf(): void
	{
		$this->openBrowser();
		$this->openSomeSite();
		$this->showLayout();
		$this->closeBrowser();
		$this->hook();
	}

	/**
	 * Открытие браузера, в целом, ни чем не примечательно
	 */
	protected function openBrowser(): void
	{
		echo $this->getName() . " - браузер запущен.<br>";
	}

	/**
	 * Закрытие браузера так же вряд ли будет вызывать
	 * серьезные проблемы
	 */
	protected function closeBrowser(): void
	{
		echo $this->getName() . " браузер закрыт.<br>";
	}

	/**
	 * Хотя и закрытие может вызвать проблемы
	 * В этом методе и заключается
	 * "уникальное" исполнения для
	 * каждого класса.
	 */
	protected function hook(): void
	{
		//
	}

	/**
	 * А вот на этапе открытия сайтов могут быть сюрпризы
	 */
	abstract protected function openSomeSite(): void;

	/**
	 * Сюрпризы могут быть и в отображении
	 */
	abstract protected function showLayout(): void;

}
