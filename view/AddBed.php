<?php 
    //require "../controller/php-validation/AddBedController.php";
    require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/controller/php-validation/AddBedController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/AddBed.css">
    <script src="js/AddBed.js"></script>
    <title>Add Bed</title>
</head>
<body>
    <div class="container">
        
        <div class="headdiv">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Header.php');?>
        </div>
        <div class="bodydiv">
        
            <div class="left"><?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/SideBar.php');?></div>
            <div class="right">
            <div class="main">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" name="abedForm" method="POST" onsubmit="return isvalid()">
            <div class="fdiv">
                <h2>ADD BED</h2>
                <hr style="width:50%">
                <br>
                <label for="cabinNo">Cabin No : </label>
                <input type="number" name="cabinNo" id="cabinNo"><span id="cabinNoErr" style="color : red;"><?php echo $cabinNoErr; ?></span>
                <br><br>
                <label for="cabinType">Cabin Type : </label>
                <select name="cabinType" id="cabinType" >
                            
                            <option value="">Select</option>
                            <option value="Non-Ac">Non-Ac</option>
                            <option value="Ac">Ac</option>
                </select>
                <span id="cabinTypeErr" style="color : red;"><?php echo $cabinTypeErr; ?></span>
                <br><br>
                <label for="cabinPerDayRent">Cabin per day rent : </label>
                <input type="number" name="cabinPerDayRent" id="cabinPerDayRent"><span id="cabinPerDayRentErr" style="color : red;"><?php echo $cabinPerDayRentErr; ?></span>
                <br><br>
                <input class="am-btn" type="submit" value="Add">
                <span id="successfulMessage" style="color : red;"><?php echo $successfulMessage; ?></span>
                <span id="errorMessage" style="color : red;"><?php echo $errorMessage; ?></span>
                
            </div>
            

        </form>
    </div>   
            
            </div>
        </div>
        <div class="footerdiv">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Footer.php');?>
        </div>
        
    </div>
    
</body>
</html>