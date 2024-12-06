<?php
$datetime1 =  new DateTimeImmutable();
$datetime2 = new DateTimeImmutable ('2016/05/16');

$interval = date_diff($datetime2, $datetime1);


echo $interval->format('%R%a days');
?>


