
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>SideBar</title>
</head>
<body>
    
        <nav class="sidebar">
            
            <ul>
                <li>
                    <a href="Home.php">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="doc-btn" href="#">
                        <i class="fa fa-user-md" aria-hidden="true"></i>
                        Doctor 
                        <span class="fas fa-caret-down first"></span>
                        
                    </a>
                    <ul class="doc-show">
                        <li><a href="AddDoctor.php">Add Doctor</a></li>
                        <li><a href="DoctorList.php">View Doctor List</a></li>
                    </ul>

                </li>
                <li>
                    <a class="pat-btn" href="#">
                        <i class="fa fa-wheelchair" aria-hidden="true"></i>
                        Patient
                        <span class="fas fa-caret-down second"></span>
                    
                    </a>
                    <ul class="pat-show">
                        <li><a href="AddPatient.php">Add Patient</a></li>
                        <li><a href="PatientList.php">View Patient List</a></li>
                        <li><a href="#">Delete Patient</a></li>
                    </ul>
                </li>
                <li>
                    <a class="bed-btn" href="#">
                        <i class="fa fa-bed" aria-hidden="true"></i>
                        Bed Manager
                        <span class="fas fa-caret-down third"></span>
                        
                    </a>
                    <ul class="bed-show">
                        <li><a href="AddBed.php">Add Bed</a></li>
                        <li><a href="BedList.php">View Bed List</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a class="ot-btn" href="#">
                    <i style="color:red" class="fa fa-bed" aria-hidden="true"></i>
                        Operation Room Manager
                        <span class="fas fa-caret-down fourth"></span>
                        
                    </a>
                    <ul class="ot-show">
                        <li><a href="AddOperationRoom.php">Add Operation Room</a></li>
                        <li><a href="OperationRoomList.php">View Operation Room</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a class="md-btn" href="#">
                        <i class="fa fa-medkit" aria-hidden="true"></i>
                        Medicine Shop
                        <span class="fas fa-caret-down fourth"></span>
                        
                    </a>
                    <ul class="md-show">
                        <li><a href="AddMedicine.php">Add Medicine</a></li>
                        <li><a href="MedicineList.php">View Medicine Details</a></li>
                    </ul>
                </li>
                <li>
                    <a class="tt-btn" href="#">
                    <i class="fa fa-money" aria-hidden="true"></i>
                        Patient total cost
                        <span class="fas fa-caret-down fourth"></span>
                        
                    </a>
                    
                </li>
            </ul>
        </nav>
        <script>
            $('.doc-btn').click(function()
            {
                $('nav ul .doc-show').toggleClass("show");
            });
            $('.pat-btn').click(function()
            {
                $('nav ul .pat-show').toggleClass("show1");
            });
            $('.bed-btn').click(function()
            {
                $('nav ul .bed-show').toggleClass("show2");
            });
            $('.ot-btn').click(function()
            {
                $('nav ul .ot-show').toggleClass("show3");
            });
            $('.md-btn').click(function()
            {
                $('nav ul .md-show').toggleClass("show4");
            });
        </script>
        
    
</body>
</html>