<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

// Класс заместитель
use DesignPatterns\Structural\Proxy\ProxyClass\ChoppingProxy;

// Классы объектов
use DesignPatterns\Structural\Proxy\ObjectClass\IChopper;
use DesignPatterns\Structural\Proxy\ObjectClass\Machete;
use DesignPatterns\Structural\Proxy\ObjectClass\Axe;

// наберем сырья для тестирования наших классов
$bush = "Кустарник";
$tree = "Дерево";
$rope = "Веревка";

// Возьмем на вооружение наш ChoppingProxy, но и не забудем попробовать работать и просто топором Axe и мачете Machete
$chopperMan = new ChoppingProxy();
$axe = new Axe();
$machete = new Machete();

function chopSomething($material, IChopper $chopper) {
    $chopper->chop($material);
}
// И наблюдаем за тем, что рубить материалы подходящими для этого инструментами - очень удобно!
chopSomething($bush, $chopperMan);
echo '<br>';
echo '<br>';
chopSomething($tree, $chopperMan);
echo '<br>';
echo '<br>';
chopSomething($rope, $chopperMan);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// В экстренных случаях
chopSomething($rope, $machete);
echo '<br>';
echo '<br>';
chopSomething($bush, $axe);
echo '<br>';
echo '<br>';
