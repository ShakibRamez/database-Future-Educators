<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);

$sql = "SELECT salary.id, salary.salary, salary.teacher_id, teacher.name as teacher_name  from salary JOIN teacher on teacher.id = salary.teacher_id;";
$result = $conn->query($sql);

include('../session.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../style.css" />
    <title>Subject</title>
  </head>
  <body>
<div class="container-fluid" id="container">
        <div class="row">
            <div class="col-md-3 left" style="height: 100vh">
          <?php include('../navlink.php') ?>
        </div>
    <div class="col-md-9 row mt-5">
        <div class="container">
        <div class="row">
        <form action="searchcategory.php" method="get">
          <div class="row">
        <div class="col-md-3 mb-3 mt-3 ">
          <input type="text" class="form-control" name="search_category" placeholder="Search Your Salary"  >
        </div>
        <div class="col-md-2 mt-3">
          <input type="submit" class="btn btn-primary" value="Search">
          </div>
        </form>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Salary Form</h3>
                    <a href="form.php" class="btn btn-primary">Add Salary</a></div>
                    <?php
                            if(isset($_GET["status"])&& $_GET["status"] == "success"):
                        ?>
                         <div class="alert alert-success">
                            Has Been Selected
                        </div>
                        <?php 
                        endif
                        ?>
                    <div class="card-body">
                    <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Salary</th>
                  <th>Teacher ID</th>
                </tr>
              </thead>
              <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?php echo $row["id"]?></td>
                  <td><?php echo $row["salary"]?></td>
                  <td><?php echo $row["teacher_name"]?></td>
                  <td class="d-flex" style="gap:10px;">
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
                
                </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
         
    </div>
</div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>