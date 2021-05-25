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
		<hr>
		
		<div class="row">
			<div class="col">
				<h5>Project Documentation</h5><br><br>
				<button class="btn-secondary" onclick="newPDoc()">Add new</button>
				<button class="btn-secondary" onclick="editPDoc()">Edit</button>
			</div>
			<div class="col">
				<h5>Code Documentation</h5><br><br>
				<button class="btn-secondary" onclick="newCDoc()">Add new</button>
				<button class="btn-secondary" onclick="editCDoc()">Edit</button>
			</div>
			<div class="col">
				<h5>User Documentation</h5><br><br>
				<button class="btn-secondary" onclick="newUDoc()">Add new</button>
				<button class="btn-secondary" onclick="editUDoc()">Edit</button>
			</div>
				
		
		
	</div>

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