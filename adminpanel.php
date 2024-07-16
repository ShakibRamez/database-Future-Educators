<?php


    include('session.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Admin Panel</title>
  </head>
  <body>
    <!-- section side bar -->
    <div class="container-fluid" id="container">
        <div class="row">
            <div class="col-md-3 left" style="height: 100vh">
          
          <?php include('navlinkadmin.php') ?>
        </div>
        <div class="col-md-9 row mt-5">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Categories</h3>
                    </div>
                    <div class="card-body">
                        <p>It has 13 Category</p>
                        <a href="" class="btn btn-primary">Show Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Subjects</h3>
                        
                    </div>
                    <div class="card-body">
                        <p>It has 35 Subjects </p>
                        <a href="" class="btn btn-primary">Show Details</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Students</h3>
                    </div>
                    <div class="card-body">
                        <p>It has 100 Students </p>
                        <a href="" class="btn btn-primary">Show Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Teachers</h3>
                    </div>
                    <div class="card-body">
                        <p>It has 20 Teachers </p>
                        <a href="" class="btn btn-primary">Show Details</a> 
                    </div>
                </div>
            </div>
         
      </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
