<?php

declare(strict_types=1);

/**
 * Behavioural Patterns: Chain Of Responsibility
 * BlogPost class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 25.08.2022
 */

namespace DesignPatterns\Behavioural\ChainOfResponsibility\ObjectClass;

/**
 * Класс - запись в блоге, конструктор принимает три аргумента
 */
class BlogPost {

    /**
     * У объекта записи есть состояние - текст записи
     */
    public string $text;

    /**
     * Массив флагов, инициализируемых при создании
     */
    public array $flags = [];

    /**
     * @param string $text текст поста
     * @param bool $isSubmitted 1-ый флаг отправлено ли с помощью кнопки Submit
     * @param bool $isDbReady 2-ой флаг готова ли пост к записи в БД
     */
    public function __construct(string $text, bool $isSubmitted, bool $isDbReady) {
        $this->text = $text;
        $this->flags["isSubmitted"] = $isSubmitted;
        $this->flags["isDbReady"] = $isDbReady;
    }
}
