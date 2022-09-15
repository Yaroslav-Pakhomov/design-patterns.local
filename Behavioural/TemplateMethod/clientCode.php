<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\TemplateMethod\TemplateMethodClass\ChromeBrowser;
use DesignPatterns\Behavioural\TemplateMethod\TemplateMethodClass\IEBrowser;


$ie = new IEBrowser();
$ie->surf();

echo '<br>';
echo '<br>';

$chrome = new ChromeBrowser();
$chrome->surf();
