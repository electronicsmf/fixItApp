<!DOCTYPE html>
<?php

//Connection details
 require_once('login.php');

$conn = new mysqli($host,$user,$pass,$dbse);
if($conn->connect_error){
   echo "Connection failed" . $conn->connect_error;
   exit();
}

?>
<html>
<head>
     <title>My Blog</title>
	 <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
     <!-- Custom styles for this template -->
	 <link rel="stylesheet" href="styles.css/style.css" type="text/css"/>
</head>
<body>
	  <nav>
	      <div class="container">
	           <div class="logo">
		            <a href="index.php">My Blog</a>
		       </div>
	           <ul>
			       <li><a href="#">Home</a></li>
			       <li><a href="#">Contact</a></li>
				   <li><a href="admin.php">Admin Login</a></li>
               </ul>					 
	      </div>  
	  </nav>
	  <div class="container">
	       <div class="row">
		       <div class="col-md-8">
 	                <h1>Best Videos To Repair your Television</h1>
			        <small>Best Blog of 2017</small>
     	            <hr>
			        <div class="card-mb-4">
			            <iframe width="560" height="315" src="https://www.youtube.com/embed/Z1DEkSguWtg" frameborder="0" allowfullscreen></iframe>
						<div class="card-body">
					         <?php
                                 $query = "SELECT * FROM posts where id=1";
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
					     </div>
					 </div>
					 <div class="card-mb-4">
					     <iframe width="560" height="315" src="https://www.youtube.com/embed/IZQRVqtIfns" frameborder="0" allowfullscreen></iframe>
						 <div class="card-body">
					          <?php
			                      $query = "SELECT * FROM posts where id=2";
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
						 </div>		
					 </div>
					 <div class="card-mb-4">
					     <iframe width="560" height="315" src="https://www.youtube.com/embed/AUm9AVvZo9k" frameborder="0" allowfullscreen></iframe>
						 <div class="card-body">
						 	  <?php
			                       $query = "SELECT * FROM posts where id=4";
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
					    </div>
				     </div>
			   </div><!--end-col-md-8-->
			   <!--sidebar Widget Column-->
               <div class="col-md-4">
			        <!--search widget--->
					<div class="card-md-4">
					     <h5 class="card-header">Search</h5>
						 <div class="card-body">
						      <div class="input-group">
			                       <input type="text" class="form-control" placeholder="Search For ..."/>
								   <span class="input-group-btn">
                                   <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
							  </div>
			             </div>
			   
			        </div>
			   </div>
			</div><!--row-->
       </div><!--contianer-->	   
</body>
</html>