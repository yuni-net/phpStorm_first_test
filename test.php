<?php
/**
 * Created by PhpStorm.
 * User: yuni.net.liberty
 * Date: 2015/06/13
 * Time: 16:42
 */


require_once('bubble_sort.php');

function main()
{
    $array = [5, 4, 3, 2, 1];
    bubble_sort($array);
    print_r($array);
}

main();