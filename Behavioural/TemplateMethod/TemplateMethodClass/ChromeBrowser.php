<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Template Method
 * ChromeBrowser class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 01.09.2022
 */

namespace DesignPatterns\Behavioural\TemplateMethod\TemplateMethodClass;

/**
 * Гугл хром, за редким исключением,
 * всегда был отличным интернет-обозревателем
 */
class ChromeBrowser extends AbstractWebBrowser
{
	public function __construct()
	{
		$this->browserName = "Google Chrome";
	}

	protected function openSomeSite(): void
	{
		echo $this->getName() . " - открывается быстро, и все в порядке.<br>";
	}

	protected function showLayout(): void
	{
		echo $this->getName() . " - не показывает ничего особенного.<br>";
	}
}
