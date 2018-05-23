 <!DOCTYPE html>
 <?php
      //Connection details
$host = 'localhost';
$user = 'root';
$pass = '';
$dbse= 'blog';

  $conn = new mysqli($host,$user,$pass,$dbse);
  if($conn->connect_error){
  echo "Connection failed" . $conn->connect_error;
  exit();
}
?>
<html> 
<head>  
      <title>Admin Page</title>
</head>	  
<body bgcolor="skyblue">	  
	  <form action="admin.php" method="post" enctype="multipart/form-data">
	     <table align="center" width="700" border="2" bgcolor="orange">
	            <tr align="center">
				    <td colspan="7"><h2>INSERT NEW POST</h2></td>
				</tr>
				<tr>
				    <td align="right"><b>Post Title :</b></td>
				    <td><input type="text" size="60" name="title"/></td>
				</tr>
				<tr>
				    <td align="right"><b>Post Description</b></td>
					<td><textarea cols="20" rows="10" name="content"></textarea></td>
				</tr>
				<tr align="center">
				    <td colspan="7"><input type="submit" value="ADD RECORD"/></td>
				</tr>
		 </table>	
	  </form>
</body>	  
</html>
<?php
  if(isset($_POST['title'])&&
     isset($_POST['content']))
  {
   $title = $_POST['title'];	
   $content = $_POST['content'];	
   $query   = "INSERT INTO posts(title,content)VALUES 
   ('$title','$content')";
   $result  = $conn->query($query);  
} 


?>