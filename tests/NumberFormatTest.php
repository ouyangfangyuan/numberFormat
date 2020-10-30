<?php
/**
 * Created by PhpStorm.
 * User: rc
 * Date: 2020/10/30
 * Time: 16:07
 */


require '../vendor/autoload.php';

use \numberFormat;

$number = '102400010';
echo numberFormat\NumberFormat::byte_format($number);