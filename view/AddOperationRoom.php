<?php 
    //require "../controller/php-validation/AddOperationRoomController.php";
    require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/controller/php-validation/AddOperationRoomController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/AddOperationRoom.css">
    <script src="js/AddOperationRoom.js"></script>
    <title>Add Operation Room</title>
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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" name="aotForm" method="POST" onsubmit="return isvalid()">
            <div class="fdiv">
            <h2>ADD OPERATION ROOM</h2>
                <hr style="width:60%">
                <br>
                <label for="otNo">Operation Room No : </label>
                <input type="number" name="otNo" id="otNo"><span id="otNoErr" style="color : red;"><?php echo $otNoErr; ?></span>
                <br><br>
                <label for="otType">Operation Room Type : </label>
                <select name="otType" id="otType" >
                            
                            <option value="">Select</option>
                            <option value="General">General</option>
                            <option value="Orthopedic">Orthopedic</option>
                            <option value="Cardiac">Cardiac</option>
                </select>
                <span id="otTypeErr" style="color : red;"><?php echo $otTypeErr; ?></span>
                <br><br>
                <label for="otPerDayRent">Operation room per day rent : </label>
                <input type="number" name="otPerDayRent" id="otPerDayRent"><span id="otPerDayRentErr" style="color : red;"><?php echo $otPerDayRentErr; ?></span>
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