<!--Splitting the header and footer into separate documents makes things easier!-->
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
            
              <div class="card" style="width:230px;">
                <img class="card-img-top" src="img/GEF-icon.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Current Projects</h5>
                  <p class="card-text"> This is where the current projects would be listed</p>
                  <a href="#" class="btn btn-primary"onclick="location.href = 'page1.php';">View Details</a>
                </div>
              </div>
              <div class="card" style="width:230px; display:inline-block;">
                <img class="card-img-top" src="img/GEF-icon.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Group Projects</h5>
                  <p class="card-text"> This is where the projects that the user is working on with other users would be listed. Consider listing with the collaborator user visible in this box</p>
                  <a href="#" class="btn btn-primary"onclick="location.href = 'page1.php';">View Details</a>
                </div>
            </div>
              </div>
              <p id="home_p"></p>
              
              
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
