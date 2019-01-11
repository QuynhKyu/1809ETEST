<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 07/01/2019
 * Time: 6:30 CH
 */
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

if(isset($_REQUEST['thamso1']) && isset($_REQUEST['thamso2'])){
    echo 'tổng:'. $val = $_REQUEST['thamso1'] + $_REQUEST['thamso2'];
    echo '<br />';
    echo 'hiệu:'. $val1 = $_REQUEST['thamso1'] - $_REQUEST['thamso2'];
    echo '<br />';
    echo 'tích:'. $val2 = $_REQUEST['thamso1'] * $_REQUEST['thamso2'];
    echo '<br />';
    echo 'thương:'.$val3 = $_REQUEST['thamso1'] / $_REQUEST['thamso2'];
    echo '<br />';
} else{
    echo 'Lỗi: !';
}

