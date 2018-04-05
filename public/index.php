<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 05/04/18
 * Time: 09:38
 */

require_once __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;


$hello = new Hello();
$hello2 = new SayHello();

echo $hello->talk().'<br/>';
echo $hello2->world();