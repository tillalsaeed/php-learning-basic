<?php

// Print current time stamp

echo time();

// Print date

echo date('Y-m-d H:i:s'); // Year, month, day, Hour, minute, second

echo date('Y-m-d H:i:s', time() - 60 * 60 * 24);
// https://php.net/manaul/en/function.date.php for

echo date('F j Y, H:i:s'); //

echo strtotime('+1 day'); //

// Parse the date.
$date = '2022-02-06 12:45:35';

$parseDate = date_parse($date);

var_dump($parseDate);

// Parse date format form

$date = '2022-02-06 12:45:35';
$parseDate = date_parse_from_format('F j Y, H:i:s', $date);

var_dump($parseDate);


