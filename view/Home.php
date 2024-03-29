<?php 
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');
$doctorList= getAllDoctor();
$totalDoctor=count($doctorList);
$cabinList= getAllCabin();
$totalCabin=count($cabinList);
$patientList= getAllPatient();
$totalPatient=count($patientList);
$otList= getAllOt();
$totalOt=count($otList);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../view/css/Home.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        
        <div class="headdiv">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Header.php');?>
        
        </div>
        <div class="bodydiv">
        
            <div class="left"><?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/SideBar.php');?></div>
            <div class="right"> 
                <div class="upper">
                    <div class="doctorlist">
                        
                        <i class="fa fa-user-md" aria-hidden="true"></i>  Total Doctor:
                        <br><?php echo $totalDoctor;?>
                    </div>
                    <div class="patientlist">
                    <i class="fa fa-wheelchair" aria-hidden="true"></i>  Total Patient :
                        <br><?php echo $totalPatient;?>
                    </div>
                </div>
                <div class="lower">
                    <div class="bedlist">
                    <i class="fa fa-bed" aria-hidden="true"></i>
                        Total Bed : <br><?php echo $totalCabin;?>
                    </div>
                    <div class="otlist">
                    <i style="color:red" class="fa fa-bed" aria-hidden="true"></i>
                        Total Operation Room : <br><?php echo $totalOt;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerdiv">
       <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Footer.php');?>
        </div>
        
    </div>
    
</body>
</html>