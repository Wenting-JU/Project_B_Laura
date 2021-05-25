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
		<h6>New User Documentation</h6>
		<hr>
		
		<ul>
			<li><a href="#docIntro">Document Introduction</a></li>
			<li><a href="#devTeam">Development Team/Contigency Contact</a></li>
			<li><a href="#bugReport">Bug Reporting</a></li>
			<li><a href="#toolUsage">Tool Usage</a></li>
		</ul>
		<br>
		<br>
		
		<h5 id="docIntro">Document Introduction</h5><br>
		<section class="newudoc-form">
		<div class="newudoc-form-form">
		<form action="includes/new_udoc.php" method="post">	
		<h6>Context</h6><br>
		<textarea name ="context" id="context" rows="4" cols="70"></textarea><br><br>
		
		<h6>Purpose and Functionality</h6><br>
		<textarea name ="purposeFunctionality" id="purposeFunctionality" rows="4" cols="70"></textarea><br><br>
		
		<h6>Version</h6><br>
		<textarea name ="version" id="version" rows="4" cols="70"></textarea><br><br>
		
		<h6 id="devTeam">Development Team/Contigency Contact</h6><br>
		<textarea name ="devTeam" id="devTeam" rows="4" cols="70"></textarea><br><br>
	
		<h6 id="bugReport">Bug Reporting</h6><br>
		<textarea name ="bugReport" id="bugReport" rows="4" cols="70"></textarea><br><br>

		<h6>Usage</h5><br>
		<textarea name ="usage" id="usage" rows="4" cols="70"></textarea><br><br>
		
		<h6>Use Cases</h5><br>
		<textarea name ="UseCases" id="UseCases" rows="6" cols="70"></textarea><br><br>
		
		<h6>Recommended Uses</h6><br>
		<textarea name ="recUses" id="recUses" rows="4" cols="70"></textarea><br><br>
		
		<h6>Accessibility</h6><br>
		<textarea name ="accessibility" id="accessibility" rows="4" cols="70"></textarea><br><br>
		
		<button class="btn-secondary" onclick="cancel()">Cancel</button>
		<button type="submit" name="save">Save</button>
		<hr>
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