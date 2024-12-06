<?php
  
$year = date("2016");
$month = date("2");
$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

echo "Number of days in the current month: $days";
?>