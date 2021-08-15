<?php 
//require "../controller/Php-validation/MedicineListController.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/MedicineList.css">
    <script src="../view/js/MedicineList.js"></script>
    <title>Medicine List</title>
</head>
<body>
    <div class="container">
        
        <div class="headdiv">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Header.php');?>
        </div>
        <div class="bodydiv">
        
            <div class="left"><?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/SideBar.php');?></div>
            <div class="right"> 
                <div class="content">
                <div class="head">
                    <h1>Medicine list</h1>
                    <hr>
                </div>
                <div class="search">
                    <form action="../controller/php-validation/MedicineListController.php" method="GET" name="mlForm" 
                    onsubmit="getData(this);return false;">
                    <input type="text" name="medicineName" id="medicineName">
                    <input type="submit" value="search">
                    </form>
                    

                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Medicine Name</th>
                                <th>Medcine per unit price</th>
                                <th>Medicine Quantity</th>
                            </tr>
                        </thead>
                        <tbody id="data">
                            
                        </tbody>
                    </table>
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