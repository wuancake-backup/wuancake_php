<?php
$foo="Bob";
$bar=&$foo;

$bar="My name is Tom";
echo "$bar";            //输出My name is Tom
echo "$foo";            //输出My name is Tom


$bar="My name is Bob";
echo "$bar";            //输出My name is Bob
echo "$foo";            //输出My name is Bob
/**
 * Created by PhpStorm.
 * User: fyhqq
 * Date: 2016/1/12
 * Time: 22:22
 */