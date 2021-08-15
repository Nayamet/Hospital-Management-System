<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/BedList.css">
    <script src="../view/js/BedList.js"></script>
    <title>Bed List</title>
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
                    <h1>Bed list</h1>
                    <hr>
                </div>
                <div class="search">
                    <form action="../controller/php-validation/BedListController.php" method="GET" name="blForm" 
                    onsubmit="getData(this);return false;">
                    <input type="number" name="cabinNo" id="cabinNo">
                    <input type="submit" value="search">
                    </form>
                    

                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Cabin Id</th>
                                <th>Cabin No</th>
                                <th>Cabin Type</th>
                                <th>Per Day Rent</th>
                                <th>Booking By(patient id)</th>
                                <th>Incharge(doctor id)</th>
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