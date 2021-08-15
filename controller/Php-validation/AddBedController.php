<?php 
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');

    $cabinNo=$cabinType=$cabinPerDayRent="";
    $cabinNoErr=$cabinTypeErr=$cabinPerDayRentErr="";
    $successfulMessage=$errorMessage="";
    $flag=false;

    if($_SERVER['REQUEST_METHOD']==='POST')
    {
        if(empty($_POST['cabinNo']))
        {
            $cabinNoErr="* Cabin no can not empty ";
            $flag=true;
        }
        // if($_POST['cabinNo']<0)
        // {
        //     $cabinNoErr="* Cabin no can not be a negative number ";
        //     $flag=true;
        // }
        if(empty($_POST['cabinType']))
        {
            $cabinTypeErr="* Cabin type can not empty ";
            $flag=true;
        }
        
        if(empty($_POST['cabinPerDayRent']))
        {
            $cabinPerDayRentErr="* Cabin Per Day Rent can not empty ";
            $flag=true;
        }
        // if($_POST['cabinPerDayRent']<0)
        // {
        //     $cabinPerDayRentErr="* Cabin Per Day Rent can not be a negative number ";
        //     $flag=true;
        // }
        if(!$flag)
        {
            $cabinNo=test_input($_POST['cabinNo']);
            $cabinType=test_input($_POST['cabinType']);
            $cabinPerDayRent=test_input($_POST['cabinPerDayRent']);

            $result=addcabin($cabinNo,$cabinType,$cabinPerDayRent);
            
            if($result)
            {
                $successfulMessage= " Cabin Added ";
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