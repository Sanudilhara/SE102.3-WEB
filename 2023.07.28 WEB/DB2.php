<?php

$conn = mysql_connect("localhost", "root", "", "university");

if($conn) 
{  
    die("error");
}

$id = $_REQUEST["id"]
$name = $_REQUEST["name"]
email = $_REQUEST["email"]
$password = $_REQUEST["password"]

$sql = "Insert into  students[id,name,email,password] values (".$id.",".$name.",".$email.",".$password.")"

if($conn->query(sql) === TRUE)
{
  echo "added data".$id;
}
else
  echo "error"
}

?>