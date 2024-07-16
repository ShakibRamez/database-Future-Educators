<?php
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <title>Document</title>
    <style>
      .container {
        height: 100vh;
        width: 100%;
      }
      .container .row {
        align-items: center;
        justify-content: center;
      }
    </style>
  </head>
  <body>
      <form action="loginsave.php" method="post">
      <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <h3>Login Form</h3>
          <div class="col-md-8">
            <label for="">Name</label>
            <input type="text" name="username" class="form-control" />
          </div>
          <!-- <div class="col-md-8">
            <label for="">Email</label>
            <input type="email" class="form-control" />
          </div> -->
          <div class="col-md-8">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" />
          </div>
          <button class="btn btn-primary mt-2">Submit</button>
        </div>
      </div>
    </div>
      </form>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
