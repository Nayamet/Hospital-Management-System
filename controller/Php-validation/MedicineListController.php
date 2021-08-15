<?php 

    require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');
    // require "../model/DbRead.php";
    // require "C:/xampp/htdocs/Hospital/model/DbRead.php";

    $medicineName=empty($_GET['medicineName']) ? "" : $_GET['medicineName'];
    if(empty($medicineName))
    {
        $medicineList= getAllMedicine();
    }
    else{
        $medicineList= getMedicine($medicineName);
        
    }
    $arr = array();
    for($i=0 ; $i < count($medicineList); $i++)
    {
        array_push($arr,array('medicine_id'=>$medicineList[$i]["medicine_id"],
        'medicine_name'=>$medicineList[$i]["medicine_name"],
        'medicine_perUnitPrice'=>$medicineList[$i]["medicine_perUnitPrice"],
        'medicine_quantity'=>$medicineList[$i]["medicine_quantity"]));
        
    }
    echo json_encode($arr);

?>