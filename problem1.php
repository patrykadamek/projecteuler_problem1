<?php
/**
 * Created by PhpStorm.
 * User: patrykadamek
 * Date: 2019-10-04
 * Time: 10:53
 */

$sum=0;

for($i=1; $i<1000; $i++){
    ($i % 3 == 0) || ($i % 5 == 0) ? $sum += $i : null;
}

echo $sum.PHP_EOL;