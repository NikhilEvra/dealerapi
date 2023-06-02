<?php

// echo date('d-m-Y', strtotime('+1 year'));
// $monthDay = date('m/d');
// $year = date('Y')+1;
// $oneYearFuture = "".$monthDay."/".$year."";
// echo"The date one year in the future is: ".$oneYearFuture."";
$d = '2023-05-12';
// $now = date('2023-05-11'); 
// $oneYearLaterFromNow = date('Y-m-d', strtotime('+1 year'));
$oneYearLaterFromAnyDate = date('Y-m-d', strtotime('+5 year', strtotime($d)));

echo $oneYearLaterFromAnyDate;
?>