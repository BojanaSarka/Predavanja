<?php

$i=2;
$i++;
echo $i; //3

echo $i++; //3

echo $i; //4

echo ++$i; //5

++$i;
$i++;
echo --$i; //6

echo "<hr />";
//zadatak

$i=2; $j=1;

$j = ++$i + --$j; //$i=3, $j=3

$i = $j-- + $i++; //$i=6, $j=2

echo $i++ . " : " . --$j;
