<?php

// to use variable on multiple page
  session_start();
  include('connecting.php');

  if(isset($_POST["user"]) && isset( $_POST["pass"])) 
    {     
    	

        $user = $_POST["user"]; 
        $password = $_POST["pass"];

        $found=False;

        if (($user== 'admin') && ($password==123))
        {
        	
            $_SESSION['db']='cartme';
            $found=True;

            connect_hq();

            echo "Welcome to HQ";
        } 

        //Huba's connection

        elseif (($user== 'admin1') && ($password==123))
        {
            
            $_SESSION['db']='site1';
            $found=True;

            connect_site1();

            echo "Welcome to site1";
        }

        // yousra's dell  connection

        elseif (($user== 'admin2') && ($password==123))
        {
            
            $_SESSION['db']='site2';
            $found=True;

            connect_site2();
            echo "Welcome to site2";
        }

         else
        {
            echo '<br>Invalid user id or password<br>';
            echo '<a href="admin.html"> login again? </a>';
        }

                if (($found==True) && !($conn->connect_error))
                {
                         //require_once('distribution.php');
                            header('Location:distribution.php');
                        
                 }


     }

    else
    {
        echo "<br>enter both values";
        echo '<a href="admin.html"> login again? </a>';
    }



?>