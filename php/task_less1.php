<?php

// Работа светофора запрограммирована таким образом:
//1. с начала каждого часа, в течении трех минут горит зеленый сигнал,
//2. следующие две минуты горит красный,
//3. дальше в течении трех минут - зеленый и т. д.
  $time = date("i");
  $a = $time%5;
  echo $a <= 2 ? 'зелёный' . "\n" : 'Красный' . "\n";


// На садовом участке площадью 10 соток, разбили грядки 15 на 25 метров. Сколько м2 осталось незанято?
    $SuchSot = 10;
    $SuchMetrKv = $SuchSot*100;
//    echo $SuchMetrKv . "\n";
    $ogorod = 15 * 25;
//    echo $ogorod ."\n";
    $b = $SuchMetrKv % $ogorod;
    echo 'не занято ' . $b . ' м.кв.'. "\n";


//Нужно определить является ли треугольник, с указанными координатами, прямоугольным.
//В решении использовать только математические и логические операторы.
	$ax = 1;
	$ay = -4;
	$bx = 5;
	$by = -3;
	$cx = 2;
	$cy = 0;
//
	$ab = (int) sqrt (($bx - $ax) ** 2  + ($by - $ay) ** 2);
	$ac = (int) sqrt (($cx - $ax) ** 2  + ($cy - $ay) ** 2);
	$bc = (int) sqrt (($cx - $bx) ** 2  + ($cy - $by) ** 2);
//echo $ab . "\t" . $ac . "\t" . $bc . "\n";
//Pif
echo ($ab ** 2) + ($ac ** 2) == $bc ** 2 || ($ac ** 2) + ($bc ** 2) == $ab ** 2 || ($ab ** 2) + ($bc ** 2) == $ac** 2 ? 'прямоугольный' : "не прямоугольный";


