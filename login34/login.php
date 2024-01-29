<?php
    
$host ="localhost";
$user="root";
$password="";
$db_name ="register";
$con= mysqli_connect($host,$user,$password,$db_name);
    

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $Firstname = $_POST['Firstname'];
        $Password = $_POST['Password'];

        if( !empty($Password) && !empty($Firstname))
        {
            $log= "select * from form where Firstname = '$Firstname' and Password ='$Password'";
           $result= mysqli_query($con,$log);
           $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
           $count = mysqli_num_rows($result);

           if($count == 1){
            echo readfile("second.html");
           }
        else{
            echo"<h1>Please try again</h1>";
        }
        }
    else
    {
            echo "<script type='text/javascript'> alert('Please enter some valid Information ')</script>";
    }
    }
?>
