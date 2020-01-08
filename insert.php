<?php 

require('connecting.php');
session_start();

//################## SYNCRONOUS ####################

function insertC($conn)
{
	if(isset($_POST['cname']) and isset($_POST['caddr']) )
	{
		// assigning values
		$name=$_POST['cname'];
		$address=$_POST['caddr'];
		$phone=$_POST['cphone'];
		$password=$_POST['cpassword'];
		$user=$_POST['cuser'];
		
		$sql="INSERT INTO customer (name,address,phone,password,user) VALUES ('$name','$address','$phone','$password','$user')";
		
		
		//#################### 	TECHNIQUE 1 ###################
			if ($conn->query($sql) === FALSE)
			    die('Could not enter data: ' . mysqli_error($conn));
			else
				echo "Successfully inserted";
	}
else
	echo "no input";
}


function insertE($conn)

{
	if(isset($_POST['ename']) and isset($_POST['esalary']) )
	{     	// assigning values
		$name=$_POST['ename'];
		$salary=$_POST['esalary'];
		$phone=$_POST['ephone'];
		
		$sql="INSERT INTO employees (name,salary,phone) VALUES ('$name','$salary','$phone')";
				//#################### 	TECHNIQUE 1 ###################
			if ($conn->query($sql) === FALSE)
			    die('Could not enter data: ' . mysqli_error($conn));
			else
				echo "Successfully inserted";
		}
else
	echo "no input";
}

function insertP($conn)

{
	if(isset($_POST['pname']) and isset($_POST['pprice']) )
	{     	// assigning values
		$name=$_POST['pname'];
		$brand=$_POST['pbrand'];
		$price=$_POST['pprice'];
		
		$sql="INSERT INTO product (name,brand,price) VALUES ('$name','$brand','$price')";
				//#################### 	TECHNIQUE 1 ###################
			if ($conn->query($sql) === FALSE)
			    die('Could not enter data: ' . mysqli_error($conn));
			else
				echo "Successfully inserted";
		}
else
	echo "no input";
}

//##################### ASYNCRONOUS ##################

function insertTC($conn)
{
    if(isset($_POST['cname']) and isset($_POST['caddr']) )
    {
        // assigning values
        $name=$_POST['cname'];
        $address=$_POST['caddr'];
        $phone=$_POST['cphone'];
        $password=$_POST['cpassword'];
        $user=$_POST['cuser'];
        
        $sql="INSERT INTO temp_customer (name,address,phone,password,user) VALUES ('$name','$address','$phone','$password','$user')";
        
        
        //####################  TECHNIQUE 1 ###################
            if ($conn->query($sql) === FALSE)
                die('Could not enter data: ' . mysqli_error($conn));
    }
else
    echo "no input";
}

function customerComit($conn)
{
        // assigning values;
        
        $sql="INSERT INTO customer (name,address,phone,password,user) SELECT name,address,phone,password,user FROM temp_customer";
        
            if ($conn->query($sql) === FALSE)
                die('Could not update data: ' . mysqli_error($conn));
            else
            {
                $sql="DELETE FROM temp_customer";
        
                if ($conn->query($sql) === FALSE)
                    die('Could not clear data: ' . mysqli_error($conn));
            }

}
//#################### 	TECHNIQUE 2 ###################		

		// $retval = mysqli_query($conn, $sql  );
         
  //           if(! $retval ) {
  //              die('Could not enter data: ' . mysqli_error($conn));
  //           }
         
  //           echo "Entered data successfully\n";

 //#################### TECHNIQUE 3 ##############
    /*$sql=$conn->prepare("INSERT INTO customer (name,address,phone,password,user) VALUES (?,?,?,?,?)");
    $sql-> bind_param("ssdds",$name,$address,$phone,$password,$user);
    $sql->execute();
*/
	//$result = mysqli_query($conn,$sql);


//EXECUTION ORDER for SYNCRONOUS

       if (isset($_POST['cinsert']))
        {
        	if($_SESSION['db']=='cartme')
        		{
        			$conn=connect_hq();
        			insertC($conn);
        			echo "<br>CUSTOMER record in HQ";
        		    // $conn=connect_site1();
        		    // insert($conn);
        		    // echo "<br>CUSTOMER record in SITE 1";
        		    
        
        		}
        	elseif($_SESSION['db']=='site1')
        		{
        			$conn=connect_site1();
        			insertC($conn);
        		    echo "<br>CUSTOMER record in SITE 1";
        			$conn=connect_hq();
        			insertC($conn);
        			echo "<br>CUSTOMER record in HQ";
        		}
        	elseif($_SESSION['db']=='site2')
        		{
        			$conn=connect_site2();
        			insertC($conn);
        		    echo "<br>CUSTOMER record in SITE 1";
        			$conn=connect_hq();
        			insertC($conn);
        			echo "<br>CUSTOMER record in HQ";
        		}
        	}


        elseif (isset($_POST['einsert']) )
        {
        	if($_SESSION['db']=='cartme')
        		{
        			$conn=connect_hq();
        			insertE($conn);
        			echo "<br>Employee record in HQ";
        		    // $conn=connect_site1();
        		    // insert($conn);
        		    // echo "<br>CUSTOMER record in SITE 1";
        		    
        
        		}
        	elseif($_SESSION['db']=='site1')
        		{
        			$conn=connect_site1();
        			insertE($conn);
        		    echo "<br>EMPLOYEE record in SITE 1";
        			$conn=connect_hq();
        			insertE($conn);
        			echo "<br>EMPLOYEE record in HQ";
        		}
        	elseif($_SESSION['db']=='site2')
        		{
        			$conn=connect_site2();
        			insertP($conn);
        		    echo "<br>EMPLOYEE record in SITE 1";
        			$conn=connect_hq();
        			insertP($conn);
        			echo "<br>EMPLOYEE record in HQ";
        		}
        	# code...
        }

        elseif (isset($_POST['pinsert']) )
        {
        	if($_SESSION['db']=='cartme')
        		{
        			$conn=connect_hq();
        			insertP($conn);
        			echo "<br>Product record in HQ";
        		    // $conn=connect_site1();
        		    // insert($conn);
        		    // echo "<br>CUSTOMER record in SITE 1";
        		    
        
        		}
        	elseif($_SESSION['db']=='site1')
        		{
        			$conn=connect_site1();
        			insertP($conn);
        		    echo "<br>PRODUCT record in SITE 1";
        			$conn=connect_hq();
        			insertP($conn);
        			echo "<br>PRODUCT record in HQ";
        		}
        	elseif($_SESSION['db']=='site2')
        		{
        			$conn=connect_site2();
        			insertP($conn);
        		    echo "<br>PRODUCT record in SITE 1";
        			$conn=connect_hq();
        			insertP($conn);
        			echo "<br>PRODUCT record in HQ";
        		}
        }


//################## EXECUTION ORDER for ASYNCRONOUS


        if (isset($_POST['tcinsert']))
        {
            if($_SESSION['db']=='cartme')
                {
                    $conn=connect_hq();
                    //insertC($conn);
                    insertTC($conn);
                    echo "<br>CUSTOMER record in HQ";
                    // $conn=connect_site1();
                    // insert($conn);
                    // echo "<br>CUSTOMER record in SITE 1";
                    
        
                }
            elseif($_SESSION['db']=='site1')
                {
                    $conn=connect_site1();
                    insertC($conn);
                    echo "<br>CUSTOMER record in SITE 1";
                    $conn=connect_hq();
                    insertC($conn);
                    echo "<br>CUSTOMER record in HQ";
                }
            elseif($_SESSION['db']=='site2')
                {
                    $conn=connect_site2();
                    insertC($conn);
                    echo "<br>CUSTOMER record in SITE 1";
                    $conn=connect_hq();
                    insertC($conn);
                    echo "<br>CUSTOMER record in HQ";
                }
        }

//###################  COMMIT ################

            if (isset($_POST['ccomit']))
        {
            if($_SESSION['db']=='cartme')
                {
                    $conn=connect_hq();
                    //insertC($conn);
                    customerComit($conn);
                    echo "<br>CUSTOMER record upto date in HQ";
                    // $conn=connect_site1();
                    // insert($conn);
                    // echo "<br>CUSTOMER record in SITE 1";
                    
        
                }
            elseif($_SESSION['db']=='site1')
                {
                    $conn=connect_site1();
                    insertC($conn);
                    echo "<br>CUSTOMER record in SITE 1";
                    $conn=connect_hq();
                    insertC($conn);
                    echo "<br>CUSTOMER record in HQ";
                }
            elseif($_SESSION['db']=='site2')
                {
                    $conn=connect_site2();
                    insertC($conn);
                    echo "<br>CUSTOMER record in SITE 1";
                    $conn=connect_hq();
                    insertC($conn);
                    echo "<br>CUSTOMER record in HQ";
                }
            }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>THANK YOU</title>
 </head>
 <body>
 <form action="form.php">
 	<input type="Submit" name="submit" value="BACK">
 </form>
 </body>
 </html>