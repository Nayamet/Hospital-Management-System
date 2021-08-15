<?php 

    require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');
    // require "../model/DbRead.php";
    // require "C:/xampp/htdocs/Hospital/model/DbRead.php";

    $cabinNo=empty($_GET['cabinNo']) ? "" : $_GET['cabinNo'];
    if(empty($cabinNo))
    {
        $cabinList= getAllCabin();
    }
    else{
        $cabinList= getCabin($cabinNo);
        
    }
    $arr = array();
    for($i=0 ; $i < count($cabinList); $i++)
    {
        array_push($arr,array('cabin_id'=>$cabinList[$i]["cabin_id"],
        'cabin_no'=>$cabinList[$i]["cabin_no"],
        'cabin_type'=>$cabinList[$i]["cabin_type"],
        'cabin_perDayRent'=>$cabinList[$i]["cabin_perDayRent"],
        'cabin_bookingBy'=>$cabinList[$i]["cabin_bookingBy"],
        'cabin_doctorId'=>$cabinList[$i]["cabin_doctorId"]
    ));
        
    }
    echo json_encode($arr);

?>