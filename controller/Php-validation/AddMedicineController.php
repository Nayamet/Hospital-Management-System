<?php 
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');

    $medicineName=$medicinePerUnitPrice=$medicineQuantity="";
    $medicineNameErr=$medicinePerUnitPriceErr=$medicineQuantityErr="";
    $successfulMessage=$errorMessage="";
    $flag=false;

    if($_SERVER['REQUEST_METHOD']==='POST')
    {
        if(empty($_POST['medicineName']))
        {
            $medicineNameErr="* Medicine Name can not empty ";
            $flag=true;
        }
        if(empty($_POST['medicinePerUnitPrice']))
        {
            $medicinePerUnitPriceErr="* Medicine unit price can not empty ";
            $flag=true;
        }
        if($_POST['medicinePerUnitPrice']<0)
        {
            $medicinePerUnitPriceErr="* Medicine unit price can not be a negative number ";
            $flag=true;
        }
        if(empty($_POST['medicineQuantity']))
        {
            $medicineQuantityErr="* Medicine quantity can not empty ";
            $flag=true;
        }
        if($_POST['medicineQuantity']<0)
        {
            $medicineQuantityErr="* Medicine quantity can not be a negative number ";
            $flag=true;
        }
        if(!$flag)
        {
            $medicineName=test_input($_POST['medicineName']);
            $medicinePerUnitPrice=test_input($_POST['medicinePerUnitPrice']);
            $medicineQuantity=test_input($_POST['medicineQuantity']);

            $result=addMedicine($medicineName,$medicinePerUnitPrice,$medicineQuantity);
            
            if($result)
            {
                $successfulMessage= " Medicine Added ";
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