<?php

$servername='localhost';
$username='root';
$password='';
$dbname='site2';
//connect to db
$conn = new mysqli("$servername","$username","$password","$dbname") or die("not connecting");

//***
if($conn->connect_error)
{
	die("Connection failed".$conn->connect_error);
}

//***8

if(isset($_POST["user"]) && isset( $_POST["pass"])) 
    {     
    	

        $user = $_POST["user"]; 
        $password = $_POST["pass"];

        $query = mysqli_query($conn,"SELECT * FROM admin WHERE user='$user' AND password='$password'");

        if(mysqli_num_rows($query)>0) 
        {
        	echo 'user exists';
        	header(location:admin.html);
        }
        else
        	{
        		echo '<br>Invalid user id or password<br>';
        		echo '<a href="admin.html"> login </a>';
        	}

     }

else
echo "<br>enter both values";

 ?>