<?php 

require('connecting.php');
session_start();

function deleteE($conn)

{
	if(isset($_POST['id']) )
	{     	// assigning values
		$id=$_POST['id'];
		
		$sql="DELETE FROM employees WHERE e_id='$id'";
		//#################### 	TECHNIQUE 1 ###################
			if ($conn->query($sql) === FALSE)
			    die('Could not enter data: ' . mysqli_error($conn));
			else
				echo "Successfully Deleted";
		}
else
	echo "no input";
}


                if($_SESSION['db']=='cartme')
        		{
        			$conn=connect_hq();
        			deleteE($conn);
        			echo "<br>Emplyees record in HQ";
        		    // $conn=connect_site1();
        		    // insert($conn);
        		    // echo "<br>CUSTOMER record in SITE 1";
        		    
        
        		}
        	elseif($_SESSION['db']=='site1')
        		{
        			$conn=connect_site1();
        			deleteE($conn);
        		    echo "<br>EMPLYEES record in SITE 1";
        			$conn=connect_hq();
        			deleteE($conn);
        			echo "<br>EMPLYEES record in HQ";
        		}
        	elseif($_SESSION['db']=='site2')
        		{
        			$conn=connect_site2();
        			deleteE($conn);
        		    echo "<br>DELETE record in SITE 1";
        			$conn=connect_hq();
        			deleteE($conn);
        			echo "<br>DELETE record in HQ";
        		}

 ?>