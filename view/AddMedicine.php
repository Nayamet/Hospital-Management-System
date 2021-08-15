<?php 
    //require "../controller/php-validation/AddMedicineController.php";
    require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/controller/php-validation/AddMedicineController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/AddMedicine.css">
    <script src="js/AddMedicine.js"></script>
    <title>Add Medicine</title>
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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" name="amForm" method="POST" onsubmit="return isvalid()">
            <div class="fdiv">
                <h2>ADD MEDICINE</h2>
                <hr style="width:50%">
                <br>
                <label for="medicineName">Medicine Name : </label>
                <input type="text" name="medicineName" id="medicineName"><span id="medicineNameErr" style="color : red;"><?php echo $medicineNameErr; ?></span>
                <br><br>
                <label for="medicinePerUnitPrice">Medicine Per Unit price : </label>
                <input type="number" name="medicinePerUnitPrice" id="medicinePerUnitPrice"><span id="medicinePerUnitPriceErr" style="color : red;"><?php echo $medicinePerUnitPriceErr; ?></span>
                <br><br>
                <label for="medicineQuantity">Medicine Quantity : </label>
                <input type="number" name="medicineQuantity" id="medicineQuantity"><span id="medicineQuantityErr" style="color : red;"><?php echo $medicineQuantityErr; ?></span>
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