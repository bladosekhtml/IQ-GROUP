<?php
$dat = $_POST['data'];
$data = explode('-', $dat);
$year = (int)$data[2];
$month = (int)$data[1];
$yearDays = $year%4 === 0 ? 366 : 365;
$days = $yearDays === 365 ? [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31] : [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
$sum = (int)$_POST['sum'];
$term = (int)$_POST['term'];
$radio = $_POST['radio'];
$pay = $radio === 'false' ? 0 :(int)$_POST['pay'];
$percent  = 0.1;
for ($i = 1; $i <= $term * 12; $i++) {
   if ($month === 12) {
      $month = 0;
      $year++;
      $yearDays = $year%4 === 0 ? 366 : 365;
      $days = $yearDays === 365 ? [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31] : [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
   }
   $sum += ($sum + $pay) * $days[$month] * $percent / $yearDays;
   $month++;
}
echo $sum;
?>