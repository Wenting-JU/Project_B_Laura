<?php

if (isset($_POST["save"])) {
  require_once "newfileconnect.php";
  // First we get the form data from the URL
//   $username = mysqli_real_escape_string($conn, $_POST["contributorName"]);
//   $projectname = mysqli_real_escape_string($conn, $_POST["projName"]);
//   $description = mysqli_real_escape_string($conn, $_POST["description"]);
  $FileName = $_POST["fileName"];
  $codeFunctionality = $_POST["codefunctionality"];
  $Dependencies = $_POST["dependencies"];
  $VariableFunction = $_POST["varFunctionNaming"];
  $Variable = $_POST["mainFile"];
  $Method = $_POST["methodFunctionComm"];
  $OtherComments = $_POST["otherComments"];
 
  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.inc.php

  
 

  // If we get to here, it means there are no user errors

  // Now we insert the user into the database
  $sql = "INSERT INTO newproject (FileNames,codeFunctionality,Dependencies,VariableFunction,Variable,Method,OtherComments) VALUES ('$FileName','$codeFunctionality','$Dependencies','$VariableFunction','$Variable','$Method','$OtherComments');";
  if ($conn->query($sql)===TRUE){
      echo "Record added successfully";
  }
  else{
      echo "ERROR".$sql."<br/>".$conn->error;
  }
} else {
	header("location: ../newPDocs.php");
}
