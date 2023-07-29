<?php

$conn = mysql_connect("localhost", "root", "", "university");

if($conn) 
{  
    die(");
}

$sql = "select * from students";
$result = $conn->query($sql);

if($result->num_row>0) 
{
    while($row = $result->fatch_assoc())
  {
    echo "ID; ".$row["id"]."Name; ".$row["name"]."<br>";
  }
}
else
{
    echo "No Data"
}

?>
