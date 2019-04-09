<?php

function from($date)
{

    $d = clone($date);

    $gigasecond = new DateInterval("PT1000000000S");

    return $d->add($gigasecond);

}

//attempt1
//
//        $b = new DateTime("31-9-09 01:46:40");

//        $a = $date;\
//
//        //return $a+$b;
//
//        return $a->diff($b);


//attempt2

//        define("GIGASECOND", 1000000000);
//
//        $result = $date->getTimeStamp();
//
//        return $result + GIGASECOND;


//attempt3

//        $gigasecond = 1000000000;
//
//        $dateTS = $date->getTimeStamp();
//
//        $result = $dateTS + $gigasecond;
//
//        return (string)$result;


//attempt4

//        $newdate = strtotime ( '+1 year' , strtotime ( $date ) ) ;
//
//        $newdate = date ( 'Y-m-d H:i:s' , $newdate );
//
//        return $newdate;



//attempt5
//const GIGA_SECOND = 1000000000;
//
//function from($date)
//{
//    //    $duration = "31-9-09 01:46:40";
//
//    var_dump($date);
//
//    $newdate = $date + GIGA_SECOND;
//
//    return new DateTimeImmutable($newdate);



//attempt6
//
//if ($date->date == "2015-01-24 00:00:00.000000"){
//
//  $gigasecondfake = new DateInterval("PT123123123123S");
//
//return $date->add($gigasecondfake);
//
////} else {
//
//$gigasecond = new DateInterval("PT1000000000S");
//
//return $date->add($gigasecond);
//
////}

