<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Footer</title>
    <style>
        .f{
            display: flex;     
        }
        .contact{
            width:50%;
            text-align:center;
            margin-right:100px;
            font-size:20px;
             
        }
        .date{
            margin-left:50px;
            font-size:30px; 
            margin-top:20px;
        }
    </style>
</head>
<body>
        <div class="f">
           <div class="contact"><b>Contact Us :</b>
            <br>
            <i class="fa fa-phone" aria-hidden="true"></i> +999222
            <br>
            <i class="fa fa-envelope" aria-hidden="true"></i>azn@yahoo.com
            </div>
           <div class="date"> AZN Hospital &copy; 2000-<?php echo date("Y");?></div>
        </div>
</body>
</html>



