<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\Strategy\ObjectClass\TextRenderer;

$textWriter = new TextRenderer();
$textWriter->print("Это обычный текст.");
echo '<br>';
echo '<br>';

$textWriter->switchType("bold");
$textWriter->print("Это выделенный жирным шрифтом текст.");
echo '<br>';
echo '<br>';

$textWriter->switchType("cursive");
$textWriter->print("Это текст, написанный курсивом.");
echo '<br>';
echo '<br>';

$textWriter->switchType("extra bold");
echo '<br>';
echo '<br>';
