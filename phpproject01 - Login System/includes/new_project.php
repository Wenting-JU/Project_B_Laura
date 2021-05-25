<?php

if (isset($_POST["submit"])) {
  require_once "newfileconnect.php";
  // First we get the form data from the URL
//   $username = mysqli_real_escape_string($conn, $_POST["contributorName"]);
//   $projectname = mysqli_real_escape_string($conn, $_POST["projName"]);
//   $description = mysqli_real_escape_string($conn, $_POST["description"]);
  $username = $_POST["contributorName"];
  $projectname = $_POST["projName"];
  $description = $_POST["description"];
  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.inc.php

  
 

  // If we get to here, it means there are no user errors

  // Now we insert the user into the database
  $sql = "INSERT INTO newproject (usersName, Project_name, descr) VALUES ('$username','$projectname','$description');";
  if ($conn->query($sql)===TRUE){
      echo "Record added successfully";
  }
  else{
      echo "ERROR".$sql."<br/>".$conn->error;
  }
} else {
	header("location: ../newProject.php");
}
