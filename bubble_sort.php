<?php
/**
 * Created by PhpStorm.
 * User: yuni.net.liberty
 * Date: 2015/06/13
 * Time: 15:53
 */

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
                list($array[$focus], $array[$focus + 1]) = array($array[$focus + 1], $array[$focus]);
            }
        }
        $unsettled_final_No -= 1;
    }
}