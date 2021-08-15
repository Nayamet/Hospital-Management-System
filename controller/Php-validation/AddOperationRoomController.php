<?php 
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');

    $otNo=$otType=$otPerDayRent="";
    $otNoErr=$otTypeErr=$otPerDayRentErr="";
    $successfulMessage=$errorMessage="";
    $flag=false;

    if($_SERVER['REQUEST_METHOD']==='POST')
    {
        if(empty($_POST['otNo']))
        {
            $otNoErr="* Operation room no can not empty ";
            $flag=true;
        }
        // if($_POST['cabinNo']<0)
        // {
        //     $cabinNoErr="* Cabin no can not be a negative number ";
        //     $flag=true;
        // }
        if(empty($_POST['otType']))
        {
            $otTypeErr="* Operation room type can not empty ";
            $flag=true;
        }
        
        if(empty($_POST['otPerDayRent']))
        {
            $otPerDayRentErr="* Operation room Per Day Rent can not empty ";
            $flag=true;
        }
        // if($_POST['cabinPerDayRent']<0)
        // {
        //     $cabinPerDayRentErr="* Cabin Per Day Rent can not be a negative number ";
        //     $flag=true;
        // }
        if(!$flag)
        {
            $otNo=test_input($_POST['otNo']);
            $otType=test_input($_POST['otType']);
            $otPerDayRent=test_input($_POST['otPerDayRent']);

            $result=addot($otNo,$otType,$otPerDayRent);
            
            if($result)
            {
                $successfulMessage= " Operation room Added ";
            }
            else
            {
                $errorMessage="Failed";
            }
        }

    }
    function test_input($data)
    {
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }



?>