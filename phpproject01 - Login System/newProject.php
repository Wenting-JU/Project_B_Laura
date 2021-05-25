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
		<hr>
		<br>
        <section class="new_project-form">
		<div class="new_project-form-form">
		<form action="includes/new_project.php" method="post">
		<label for="contributorName">Contributor name:</label><br>
		<input type="text" name="contributorName" id="contributorName" width="50"><br>

		<label for="projName">Project name:</label><br>
		<input type="text" name="projName" id="projName" width="50"><br>
		
		<label for="description">Desciption:</label><br>
		<textarea name="description" id="description" rows="4" cols="50"></textarea><br>
		
		
		<button type="button" name="cancel" onclick="cancel()">Cancel</button>
			
		<button type="submit" name="submit">Save</button>
		</form>	
		</div>
        <button class="btn-secondary" onclick="newDocs()">Add Documents</button>
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