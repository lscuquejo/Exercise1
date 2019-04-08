<?php


function from($date)
{

    $date = "2011-04-25 00:00:00";

    $duration = "1000000000";

    //    $duration = "31-9-09 01:46:40";

    $dateInSec = strtotime($date);

    $newdate = $dateInSec + $duration;

    return date('Y-m-d H:i:s',$newdate);

//atempt1
//
//        $b = new DateTime("31-9-09 01:46:40");

//        $a = $date;\
//
//        //return $a+$b;
//
//        return $a->diff($b);


//atempt2

//        define("GIGASECOND", 1000000000);
//
//        $result = $date->getTimeStamp();
//
//        return $result + GIGASECOND;


//atempt3

//        $gigasecond = 1000000000;
//
//        $dateTS = $date->getTimeStamp();
//
//        $result = $dateTS + $gigasecond;
//
//        return (string)$result;


//atempt4

//        $newdate = strtotime ( '+1 year' , strtotime ( $date ) ) ;
//
//        $newdate = date ( 'Y-m-d H:i:s' , $newdate );
//
//        return $newdate;


}

