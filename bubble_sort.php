<?php
/**
 * Created by PhpStorm.
 * User: yuni.net.liberty
 * Date: 2015/06/13
 * Time: 15:53
 */


function trade(&$one, &$ano)
{
    list($one, $ano) = array($ano, $one);
}

function bubble_sort(&$array)
{
    $unsettled_num = count($array);
    $unsettled_final_No = $unsettled_num - 1;
    while($unsettled_final_No > 0)
    {
        for($focus = 0; $focus < $unsettled_final_No; $focus += 1)
        {
            if($array[$focus] > $array[$focus + 1])
            {
                trade($array[$focus], $array[$focus + 1]);
            }
        }
        $unsettled_final_No -= 1;
    }
}