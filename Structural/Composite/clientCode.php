<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

// Класс Компоновщик
use DesignPatterns\Structural\Composite\CompositeCLass\Organization;
use DesignPatterns\Structural\Composite\ObjectClass\Designer;
use DesignPatterns\Structural\Composite\ObjectClass\Developer;

// Классы сотрудников


// Подготовка сотрудников
$john = new Developer('Джон', 150000);
$jack = new Developer('Джек', 130000);
$jane = new Designer('Джейн', 120000);

// Добавляем их в организацию
$organization = new Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);
$organization->addEmployee($jack);

echo "Зарплатный фонд организации: " . $organization->getNetSalaries() . ' рублей.'; // Зарплатный фонд организации: 270 000 рублей.

echo '<br>';
echo '<br>';

$employees = $organization->getEmployees();

foreach ($employees as $employee) {
	echo $employee->getName() . '.<br>';
}


echo '<br>';
echo '<br>';

// Добавляем отдел и работников в него

$organization->setDepartment('Разработка', $john);
$organization->setDepartment('Разработка', $jack);
$organization->setDepartment('Дизайн', $jane);

$developDep = $organization->getDepartment('Разработка');

echo 'Общая ЗП отдела "' . $developDep->getName() . '":';
echo '<br>';
echo $developDep->getDepartmentNetSalaries();

echo '<br>';
echo '<br>';

if (is_object($developDep)) {
	$developDepEmployees = $developDep->getEmployees();
	$developDepName = $developDep->getName();

	echo $developDepName . ':';
	echo '<br>';

	foreach ($developDepEmployees as $developDepEmployee) {
		echo $developDepEmployee->getName() . '.<br>';
	}
}


echo '<br>';
echo '<br>';

$developDep = $organization->getDepartment('разработка');
echo $developDep;
echo '<br>';
echo '<br>';

$developDep = $organization->getDepartment('Дизайн');
echo '<br>';
echo '<br>';

echo 'Сотрудники отдела "' . $developDep->getName() . '":';
echo '<br>';
// print_r($developDep->getEmployees());
foreach ($developDep->getEmployees() as $developDepEmployee) {
	echo $developDepEmployee->getName() . '.<br>';
}

echo '<br>';
echo '<br>';

echo 'Общая ЗП отдела "' . $developDep->getName() . '":';
echo '<br>';
echo $developDep->getDepartmentNetSalaries();