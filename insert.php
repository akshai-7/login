<?php

$con = new mysqli('localhost','root','','login');
if($con->connect_errno){
    echo  $con->connect_error;
    die();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="hero">
        
    <form action="insert.php" method="POST">
            <div class="input-group">
                <input type="text" name="name" required>
                <label for="name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="text" name="email" required>
                <label for="email">Email </label>
            </div>
            <div class="input-group">
                <input type="text" name="phone" required>
                <label for="phone">Phone </label>
            </div>
            

        
           <div class="btn"> <button type="submit" name="submit" >SUBMIT</button> </div>

<div class="container"> <?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];


    if( $name != "" && $email!= "" && $phone != "" )
     {
     $sql = "INSERT INTO user (username,email,phone) VALUES ('$name','$email',$phone)";
            if($con->query($sql))
            {
               echo "Data Stored" ;
               die();
            }
            else{
                echo "Insert Data Fail";
            }
        }
     else{
        echo "All feilds Required ";
         }
}
else{
echo "Please Enter All The Datas";
} 

?></div>

 </form>



</div>
    
</body>
</html>







