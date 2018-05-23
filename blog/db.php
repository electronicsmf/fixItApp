<?php

//Connection details
 require_once('login.php');

$conn = new mysqli($host,$user,$pass,$dbse);
if($conn->connect_error){
   echo "Connection failed" . $conn->connect_error;
   exit();
}

$query = "SELECT * FROM posts";
$result = $conn->query($query);

if($result->num_rows > 0){
   while($row = $result->fetch_assoc()){
   echo $row['id']. '<br>';
   echo $row['title'].'<br>';
   echo $row['content'].'<br>';
   echo $row['timestamp'].'<br>';
   } 
   }else{
  echo"No Data : (";
}


?>
