<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Template Method
 * IEBrowser class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 01.09.2022
 */

namespace DesignPatterns\Behavioural\TemplateMethod\TemplateMethodClass;

/**
 * Internet Explorer был условным монополистом,
 * до появления альтернатив. Замашки монополиста
 * никуда не делись, поэтому и качество "на уровне"
 */
class IEBrowser extends AbstractWebBrowser
{

	public function __construct()
	{
		$this->browserName = "Internet Explorer";
	}

	protected function openSomeSite(): void
	{
		echo $this->getName() . " - открывает сайт медленно и разрушительно...<br>";
	}

	protected function showLayout(): void
	{
		echo $this->getName() . " - показывает невероятно плохие CSS и макет в целом...<br>";
	}

	/**
	 * В Интернет Эксплорер перегрузим hook()
	 * для того чтобы переопределить его
	 * реализацию.
	 */
	protected function hook(): void
	{
		echo $this->getName() . " - просят меня о том, чего я не хочу, и замедляет работу моего компьютера...<br>";
	}
}
