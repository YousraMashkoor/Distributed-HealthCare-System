<?php 

function connect_hq()
{
	
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='cartme';


	$conn = new mysqli("$servername","$username","$password","$dbname") or die("not connecting");
	if($conn->connect_error)
	{
		die("Connection failed".$conn->connect_error);
	}

	return $conn;


}

function connect_site1()
{
	$servername='192.168.1.148';
    $username='admin1';
    $password='123';
	$dbname='site1';


	$conn = new mysqli("$servername","$username","$password","$dbname") or die("not connecting");
	if($conn->connect_error)
	{
		die("Connection failed".$conn->connect_error);
	}

	return $conn;


}

function connect_site2()
{
	$servername='192.168.1.119';
    $username='admin2';
    $password='123';
	$dbname='site2';


	$conn = new mysqli("$servername","$username","$password","$dbname") or die("not connecting");
	if($conn->connect_error)
	{
		die("Connection failed".$conn->connect_error);
	}

	return $conn;

}




 ?>