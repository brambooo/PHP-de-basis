<?php

// We gaan hier verschillende variabelen casten naar een ander type

// String naar een int casten
$intAsString = '5';
$castedToInt = intval($intAsString);
echo $castedToInt;

echo '</br></br>';

$int = 5;
$castedToString = strval($int);
echo is_string($castedToString);  // 1 is true

// Dit idee kunnen we voor alle verschillende datatypes doen zoals: intval, doubleval, floatval, strval...

// Andere manieren om te casten
$money = '500.50';
$moneyToFloat = (float) $money . '</br>';
echo 'is dit een float? ' .   is_float($moneyToFloat);

