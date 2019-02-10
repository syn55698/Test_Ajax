<?php

header('Access-Control-Allow-Origin:*');//允许所有来源访问 
//header('Access-Control-Allow-Method:POST,GET');//允许访问的方式



$data               = json_encode(array("foo" => "bar"));
/*
//echo ();
//$sss = 'go('.(json_encode(array('name' =>'ssss')).')';
//echo json_encode(array('name' =>'ssss'));echo ($sss);
*/
//echo ('go('.json_encode(array('name' =>'ssss')).')');

// 成功，資料 : http://jsnwork.kiiuo.com/archives/1577/php-jquery-ajax-%E8%B7%A8%E7%B6%B2%E5%9F%9F%E5%8F%96%E5%BE%97%E9%81%A0%E7%AB%AF-json-%E6%88%96-jsonp-%E8%A8%AD%E8%A8%88/
echo "{$_GET['callback']}($data)";
