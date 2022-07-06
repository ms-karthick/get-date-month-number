<?php

$ddate = "2022-07-06";
$date  = new DateTime($ddate);
$week  = $date->format("W");
echo "Week Number: $week"."<br>";


// $date_string = "2022-07-06";
// echo "week number:" .date('W', strtotime($date_string))."<br>";

echo "Week Number Of Year " .date("W", strtotime("2022-07-06")) ."<br>";




function weekOfMonth($date){
    $firstOfMonth = strtotime(date("Y-m-01", $date));
    return weekOfYear($date) - weekOfYear($firstOfMonth) + 1;
}


function weekOfYear($date){
    $weekOfYear = intval(date("W", $date));

    if(date('n', $date) == "1" && $weekOfYear > 51){
         return 0;
    }
    else if(date('n',$date) == '12' && $weekOfYear == 1)
    {
        return 53;
    }
    else
    {
        return $weekOfYear;
    }

}

$date = strtotime("2022-07-06");
echo "Week Number Of In Month " .WeekOfMonth($date);