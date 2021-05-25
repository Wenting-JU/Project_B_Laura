<?php

if (isset($_POST["save"])) {
  require_once "newfileconnect.php";
  // First we get the form data from the URL
//   $username = mysqli_real_escape_string($conn, $_POST["contributorName"]);
//   $projectname = mysqli_real_escape_string($conn, $_POST["projName"]);
//   $description = mysqli_real_escape_string($conn, $_POST["description"]);
  $purpose = $_POST["purpose"];
  $functionality = $_POST["functionality"];
  $location = $_POST["location"];
  $toolsLanguage= $_POST["toolsLanguage"];
  $apiLibraries = $_POST["apiLibraries"];
  $authors = $_POST["authors"];
  $version = $_POST["version"];
  $owner = $_POST["owner"];
  $gitHub = $_POST["gitHub"];
  $mainFile = $_POST["mainFile"];
  $subDir = $_POST["subDir"];
  $execution = $_POST["execution"];
  $database = $_POST["database"];
  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.inc.php

  
 

  // If we get to here, it means there are no user errors

  // Now we insert the user into the database
  $sql = "INSERT INTO newproject (Purpose, Functionality,Locations,Tools,API,Authors,Current,Owners, GitHub, Home,Subdirectories, Execution,Data_base) VALUES ('$purpose','$functionality','$location','$toolsLanguage','$apiLibraries','$authors','$version','$owner','$gitHub','$mainFile','$subDir','$execution',$database);";
  if ($conn->query($sql)===TRUE){
      echo "Record added successfully";
  }
  else{
      echo "ERROR".$sql."<br/>".$conn->error;
  }
} else {
	header("location: ../newPDocs.php");
}
