<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Strategy
 * TextRenderer class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 01.09.2022
 */

namespace DesignPatterns\Behavioural\Strategy\ObjectClass;

// Классы "Стратегии"
use DesignPatterns\Behavioural\Strategy\StrategyClass\BoldTextType;
use DesignPatterns\Behavioural\Strategy\StrategyClass\CursiveTextType;
use DesignPatterns\Behavioural\Strategy\StrategyClass\IRenderType;
use DesignPatterns\Behavioural\Strategy\StrategyClass\RegularTextType;

/**
 * Визуализатор текста
 * В конструкторе при инициализации объекта
 * "по дефолту" устанавливаем обычный шрифт
 * класс RegularTextType
 */
class TextRenderer
{
	/**
	 * В этой переменной храним объект класса "Стратегии"
	 */
	private IRenderType $renderType;

	public function __construct()
	{
		echo 'По умолчанию обычный шрифт.<br>';
		$this->renderType = new RegularTextType();
	}

	/**
	 * Непосредственная печать текста в браузере
	 * делегируется установленной на текущий момент
	 * "стратегии"
	 */
	public function print(string $text): void
	{
		$this->renderType->renderText($text);
	}

	/**
	 * Метод - переключатель классов "Стратегии", работающий по
	 * текстовому флагу, переданному в него.
	 * Если пользователь ошибся при вводе, то сообщаем ему
	 * что нужно передать в метод
	 */
	public function switchType(string $flag): void
	{
		switch ($flag):
			case "bold":
				$this->renderType = new BoldTextType();
				echo "Вы выбрали жирный шрифт.<br>";
				break;
			case "cursive":
				$this->renderType = new CursiveTextType();
				echo "Вы выбрали курсивный шрифт.<br>";
				break;
			case "regular":
				$this->renderType = new RegularTextType();
				echo "Вы выбрали обычный шрифт.<br>";
				break;
			default:
				echo 'Вам нужно установить жирный шрифт ("bold"), курсив ("cursive") или обычный ("regular").<br>';
		endswitch;
	}
}
