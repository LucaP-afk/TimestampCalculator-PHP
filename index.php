<?php

$month = ["Jaunary", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$year = [];
for($i = 1970; $i < 2031; $i++) {
    array_push($year, $i);
}


if(isset($_POST['submit']))
{
    $getyear = $_POST['year'];
    $getmonth = $_POST['month'];
    $getday = $_POST['day'];
    $gethour = $_POST['hour'];
    $getmin = $_POST['min'];
    $getsec = $_POST['sec'];

    $data = mktime($gethour, $getmin, $getsec, $getmonth, $getday, $getyear);

    if(($getmonth == 2 && $getyear % 4 != 0 && $getday > 28) ||
    ($getmonth == 2 && $getyear % 4 == 0 && $getday > 29) || 
    (($getmonth == 4 || $getmonth == 6 || $getmonth == 9 || $getmonth == 11) && $getday > 30)) {
        $result = '<div class="error">Error, ' . $getday . '/' . str_pad($getmonth, 2, '0', STR_PAD_LEFT) . '/' . $getyear . " doesn't exist!</div>";
    } else {
        $result = 'The timestamp corresponding to ' . str_pad($getday, 2, '0', STR_PAD_LEFT) . '/' . str_pad($getmonth, 2, '0', STR_PAD_LEFT) . '/' . $getyear . ' ' . str_pad($gethour, 2, '0', STR_PAD_LEFT) . ':' . str_pad($getmin, 2, '0', STR_PAD_LEFT) . ':' . str_pad($getsec, 2, '0', STR_PAD_LEFT) . ' is <b>' . $data . '</b>';
    }
}

require 'index.view.php';