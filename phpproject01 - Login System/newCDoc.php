<?php
  include_once 'header.php';
?>
    <body>
          
<main>

	<div class="container">
		<br>
		<br>
		
		<div ><img src="img/GEF-icon.png" alt="GEF Consulting Inc."></div>
		<h1>DOC HUB</h1>
		<h5 id="projName">Project Name goes here</h5>
		<h6>New Code Documentation</h6>
		<hr>
		<br>
		
		<ul>
			<li><a href="#fileClassComments">File/Class Comments</a></li>
			<li><a href="#varFunctionNaming">Variable/Function Naming</a></li>
			<li><a href="#varDataStruct">Variable and Data Strucutre</a></li>
		</ul>
		<br>
		<br>
		
		<!-- if we want any of these to be required fields lmk (just add required into the opening tag) -->
		
		<h5 id="fileClassComments">File/Class Comments</h5>
			
		
		<br>
		<section class="newcdoc-form">
		<div class="newcdoc-form-form">
		<form action="includes/new_cdoc.php" method="post">	
		<h6>File Name</h6>
			<br>
		<textarea name ="fileName" id="fileName" rows="2" cols="70"></textarea>
			<br><br>
		<h6>Code Functionality</h6>
			<br>
		<textarea name ="codefunctionality" id="codefunctionality" rows="4" cols="70"></textarea>
			<br><br>
		<h6>Dependencies</h6><br>
		<textarea name ="dependencies" id="dependencies" rows="4" cols="70"></textarea><br><br>

		<h6 id="varFunctionNaming">Variable/Function Naming</h5><br>
		<textarea name ="varFunctionNaming" id="varFunctionNaming" rows="4" cols="70"></textarea><br><br>
		
		<h6 id="varDataStruct">Variable and Data Strucutre</h5><br>
		<textarea name ="mainFile" id="mainFile" rows="4" cols="70"></textarea><br><br>
		
		<h6>Method/Function Comments</h6><br>
		<textarea name ="methodFunctionComm" id="methodFunctionComm" rows="4" cols="70"></textarea><br><br>
		
		<h6>Other Comments</h6><br>
		<textarea name ="otherComments" id="otherComments" rows="4" cols="70"></textarea><br><br>
		
		<button class="btn-secondary" onclick="cancel()">Cancel</button>
		<button type="submit" name="save">Save</button>
		
		<br>
		</form>	
	    </div>
	    </section>
		

</main>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
    
    </body>
	<?php
  include_once 'footer.php';
?>