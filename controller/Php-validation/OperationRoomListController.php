<?php 

    require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');
    // require "../model/DbRead.php";
    // require "C:/xampp/htdocs/Hospital/model/DbRead.php";

    $otNo=empty($_GET['otNo']) ? "" : $_GET['otNo'];
    if(empty($otNo))
    {
        $otList= getAllOt();
    }
    else{
        $otList= getOt($otNo);
        
    }
    $arr = array();
    for($i=0 ; $i < count($otList); $i++)
    {
        array_push($arr,array('ot_id'=>$otList[$i]["ot_id"],
        'ot_roomNo'=>$otList[$i]["ot_roomNo"],
        'ot_roomType'=>$otList[$i]["ot_roomType"],
        'ot_perDayRent'=>$otList[$i]["ot_perDayRent"],
        'ot_bookingBy'=>$otList[$i]["ot_bookingBy"],
        'ot_doctorId'=>$otList[$i]["ot_doctorId"]
    ));
        
    }
    echo json_encode($arr);

?>