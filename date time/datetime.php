<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);

$sql = "SELECT date_time.id, date_time.start_time, date_time.end_time, date_time.start_date, date_time.end_date, date_time.subject_id, subjects.name as sub_name  from date_time JOIN subjects on subjects.id = date_time.subject_id;";

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
<!-- section side bar -->
<div class="container-fluid" id="container">
        <div class="row">
            <div class="col-md-3 left" style="height: 100vh">
                <!-- <div class="image text-center mt-3" > <img src="_f9b019de-0331-4101-a1d7-b4f6daf63040.jpeg" alt="" style="width: 50%; height: 150px;"></div> -->
          <?php include('../navlink.php') ?>
        </div>
    <div class="col-md-9 row mt-5">
        <div class="container">
        <div class="row">
        <form action="searchcategory.php" method="get">
          <div class="row">
        <div class="col-md-3 mb-3 mt-3 ">
          <input type="text" class="form-control" name="search_category" placeholder="Search Your Date"  >
        </div>
        <div class="col-md-2 mt-3">
          <input type="submit" class="btn btn-primary" value="Search">
          </div>
        </form>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Date Time Form</h3>
                    <a href="form.php" class="btn btn-primary">Add DAte & Time</a></div>
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
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Subject ID</th>
                </tr>
              </thead>
              <tbody> 
                <?php $counter = 0; ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?php echo ++$counter; ?></td>
                  <td><?php echo $row["start_time"]?></td>
                  <td><?php echo $row["end_time"]?></td>
                  <td><?php echo $row["start_date"]?></td>
                  <td><?php echo $row["end_date"]?></td>
                  <td><?php echo $row["sub_name"]?></td>
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