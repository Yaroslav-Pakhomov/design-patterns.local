<?php

declare(strict_types=1);

/**
 * Structural Patterns: Facade
 * CarElectronics class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 22.08.2022
 */

namespace DesignPatterns\Structural\Facade\ObjectClass;

/**
 * Электроника автомобиля
 */
class CarElectronics {

    private string $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function getAllSystemsOn(): void {
        echo 'Все системы электроники "' . $this->type . '" включены. <br>';
    }

    /**
     * Метод подготавливает запускаемый двигатель, т.е. включает
     * топливный насос и подает напряжение на катушках
     */
    public function prepareEngineStart(CarEngine $carEngine): void {
        $carEngine->turnFuelPumpOn();
        $carEngine->makeSparkles();
    }
}
