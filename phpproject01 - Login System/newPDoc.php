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
		<h6>New Project Documentation</h6>
		<hr>
		<ul>
			<li><a href="#programDescription">Program Description</a></li>
			<li><a href="#repository">Repository</a></li>
			<li><a href="#directory">Directory Strucutre</a></li>
			<li><a href="#execution">Execution</a></li>
			<li><a href="#database">Database</a></li>
		</ul>
		<br>
		<br>
		
		<!-- if we want any of these to be required fields lmk (just add required into the opening tag) -->
		
		<h5 id="programDescription">Program Description</h5>
		<br>
		<section class="newpdoc-form">
		<div class="newpdoc-form-form">
		<form action="includes/new_pdoc.php" method="post">	
		<h6>Purpose</h6>
			<br>
		<textarea name="purpose" id="purpose" rows="4" cols="70"></textarea>
			<br><br>
		<h6>Functionality</h6>
			<br>
		<textarea name="functionality" id="functionality" rows="4" cols="70"></textarea>
			<br><br>
		<h6>Location</h6><br>
		<textarea name="location" id="location" rows="4" cols="70"></textarea><br><br>
		
		<h6>Tools and Languages</h6><br>
		<textarea name="toolsLanguage" id="toolsLanguage" rows="4" cols="70"></textarea><br><br>
		
		<h6>API's, Libraries and External Dependencies</h6><br>
		<textarea name="apiLibraries" id="apiLibraries" rows="4" cols="70"></textarea><br><br>
		
		<h6>Authors</h6><br>
		<textarea name="authors" id="authors" rows="4" cols="70"></textarea><br><br>
		
		<h6>Current Production Version and Release Notes</h6><br>
		<textarea name="version" id="version" rows="4" cols="70"></textarea><br><br>
	
		<h6>Owner and Collaborators</h6><br>
		<textarea name="owner" id="owner" rows="4" cols="70"></textarea><br><br>
		
		<h6>GitHub Access</h6><br>
		<textarea name="gitHub" id="gitHub" rows="4" cols="70"></textarea><br><br>
		
		<h6>Home Directory and Main File(s)</h6><br>
		<textarea name="mainFile" id="mainFile" rows="4" cols="70"></textarea><br><br>
		
		<h6>Subdirectories</h6><br>
		<textarea name="subDir" id="subDir" rows="4" cols="70"></textarea><br><br>
		
		<h6 id="execution">Execution</h5><br>
		<textarea name ="execution" id="execution" rows="4" cols="70"></textarea><br><br>
		
		<h6 id="database">Database</h5><br>
		<textarea name ="database" id="database" rows="4" cols="70"></textarea><br><br>
		
		<button class="btn-secondary" onclick="cancel()">Cancel</button>
		<button type="submit" name="save">Save</button>
		<br>
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