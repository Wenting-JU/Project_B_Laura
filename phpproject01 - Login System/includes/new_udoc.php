<?php

if (isset($_POST["save"])) {
  require_once "newfileconnect.php";
  // First we get the form data from the URL
//   $username = mysqli_real_escape_string($conn, $_POST["contributorName"]);
//   $projectname = mysqli_real_escape_string($conn, $_POST["projName"]);
//   $description = mysqli_real_escape_string($conn, $_POST["description"]);
  $Context = $_POST["context"];
  $userPurpose = $_POST["purposeFunctionality"];
  $Version = $_POST["version"];
  $DevelopmentTeam = $_POST["devTeam"];
  $BugReporting = $_POST["bugReport"];
  $Usage = $_POST["usage"];
  $UseCases = $_POST["UseCases"];
  $RecommendedUses = $_POST["recUses"];
  $Accessibility = $_POST["accessibility"];
 
  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.inc.php

  
 

  // If we get to here, it means there are no user errors

  // Now we insert the user into the database
  $sql = "INSERT INTO newproject (Context,userPurpose,Versions,DevelopmentTeam,BugReporting,Usages,UseCases,RecommendedUses,Accessibility) VALUES ('$Context','$userPurpose','$Version','$DevelopmentTeam','$BugReporting','$Usage','$UseCases','$RecommendedUses','$Accessibility');";
  if ($conn->query($sql)===TRUE){
      echo "Record added successfully";
  }
  else{
      echo "ERROR".$sql."<br/>".$conn->error;
  }
} else {
	header("location: ../newUDocs.php");
}
