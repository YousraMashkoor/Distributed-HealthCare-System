<!DOCTYPE html>
<html>
<head>
	<title>Asyncronous Replication</title>
</head>
<body>

<?php
require('connecting.php');
session_start();

function check($conn)
{
	$sql="SELECT * FROM temp_customer";
        if ($result=$conn->query($sql))
        {
        	if ($result->fetch_object())
        	{
        		echo "<form action=\"insert.php\" method=\"POST\"><input type=\"SUBMIT\" name=\"ccomit\" value=\"PENDING UPDATES\"></form>";
        	}
        }

    		
}

	if($_SESSION['db']=='cartme')
		echo "<h1> WELCOME TO HQ</h1>";
	elseif($_SESSION['db']=='site1')
		echo "<h1> WELCOME TO SITE1</h1>";
	elseif($_SESSION['db']=='site2')
		echo "<h1> WELCOME TO SITE2</h1>";
?>

<h1>ASYNCRONOUS REPLICATION</h1>
<fieldset>
<form action="insert.php" method="post">
		<h1><legend>Customer:</legend><br></h1>
		Full Name:<br>
		<input type="text" name="cname" required><br><br>
		User Name:<br>
		<input type="text" name="cuser" required><br><br>
		Address:<br>
		<input type="text" name="caddr" required><br><br>
		Phone:<br>
		<input type="number" name="cphone" required><br><br>
		Password:<br>
		<input type="Password" name="cpassword" required><br><br>
		<br>
		<input type="submit" name="tcinsert" value="Insert"><br><br>
</form>
<?php 
$conn=connect_hq();
check($conn)
?>



</body>
</html>