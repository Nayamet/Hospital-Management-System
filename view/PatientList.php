<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/PatientList.css">
    <script src="../view/js/PatientList.js"></script>
    <title>Patient List</title>
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
                    <h1>Patient list</h1>
                    <hr>
                </div>
                <div class="search">
                    <form action="../controller/php-validation/PatientListController.php" method="GET" name="plForm" 
                    onsubmit="getData(this);return false;">
                    <input type="text" name="username" id="username" placeholder="search by patient username">
                    <input type="submit" name="search" value="search">
                    </form>
                    

                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Date of birth</th>
                                <th>Phone Number</th>
                                <th>Username</th>
                                <th>Password</th>
                                
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