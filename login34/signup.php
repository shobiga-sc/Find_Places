<?php
    
$host ="localhost";
$user="root";
$password="";
$db_name ="register";
$con= mysqli_connect($host,$user,$password,$db_name);
    

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        if(!empty($Email) && !empty($Password) && !is_numeric($Email))
        {
            $query ="insert into form(Firstname, Lastname, Email, Password) values('$Firstname','$Lastname','$Email','$Password')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
    else
    {
            echo "<script type='text/javascript'> alert('Please enter some valid Information ')</script>";
    }
    }
?>
