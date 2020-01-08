<?php 

require('connecting.php');
session_start();

function updateE($conn)

{
	if(isset($_POST['ename']) and isset($_POST['esalary']) )
	{     	// assigning values
		$name=$_POST['ename'];
		$salary=$_POST['esalary'];
		$phone=$_POST['ephone'];
		$id=$_POST['id'];
		
		$sql="UPDATE employees SET name='$name',salary='$salary',phone='$phone' WHERE e_id='$id'";
		//#################### 	TECHNIQUE 1 ###################
			if ($conn->query($sql) === FALSE)
			    die('Could not enter data: ' . mysqli_error($conn));
			else
				echo "Successfully Updated";
		}
else
	echo "no input";
}


                if($_SESSION['db']=='cartme')
        		{
        			$conn=connect_hq();
        			updateE($conn);
        			echo "<br>Emplyees record in HQ";
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

 ?>