<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);

$sql = "SELECT 
    teacher_date_time.id AS teacher_date_time_id,
    teacher_date_time.date_id AS teacher_date_time_date_id,
    teacher_date_time.teacher_id AS teacher_date_time_teacher_id,
    date_time.id AS date_time_id,
    date_time.start_time,
    date_time.end_time,
    date_time.start_date,
    date_time.end_date,
    teacher.name AS teacher_name
FROM 
    teacher_date_time
JOIN 
    date_time ON date_time.id = teacher_date_time.date_id
JOIN 
    teacher ON teacher.id = teacher_date_time.teacher_id;";


$result = $conn->query($sql);
// $resultteacher = $conn->($sqlteacher);

include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>

      #contents{
        height : 90vh;
        overflow: auto;
      }
      .left{
        height : 100vh;
        overflow: auto;

      }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../style.css" />
    <title>Teacher Date Time</title>
  </head>
  <body>
    <!-- section side bar -->
<div class="container-fluid" id="container">
        <div class="row">
            <div class="col-md-3 left" style="height: 100vh">
          <?php include('../navlink.php') ?>
        </div>
     <div class="col-md-9 row mt-5" id="contents">
     <div class="container" >
      <div class="row">
        <form action="searchdatetime.php" method="get">
          <div class="row">
        <div class="col-md-3 mb-3 mt-3 ">
          <input type="text" class="form-control" name="search_category" placeholder="Search Your Teacher Time"  >
        </div>
        <div class="col-md-2 mt-3">
          <input type="submit" class="btn btn-primary" value="Seacrh">
          </div>
        </form>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header f-flex"><h3>Teacher Date Timr Form</h3>
              <a href="form.php" class="btn btn-primary">Add Teacher Date Time</a>
            
            </div>
            <?php
                            if(isset($_GET["status"])&& $_GET["status"] == "success"):
                        ?>
                         <div class="alert alert-success">
                            Has Been Selected
                        </div>
                        <?php 
                        endif
                        ?>
            <?php
                            if(isset($_GET["status"])&& $_GET["status"] == "successupdate"):
                        ?>
                         <div class="alert alert-success">
                            Has Been Update
                        </div>
                        <?php 
                        endif
                        ?>
            <?php
                            if(isset($_GET["status"])&& $_GET["status"] == "successDelete"):
                        ?>
                         <div class="alert alert-danger">
                            Has Been Deleted
                        </div>
                        <?php 
                        endif
                        ?>

            <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Date ID</th>
                  <th>Teacher ID</th>
                </tr>
              </thead>
              <tbody>
                <?php $counter = 0; ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?php echo ++$counter; ?></td>
                  <td><?php echo $row["date_id"]?></td>
                  <td><?php echo $row["teacher_id"]?></td>
                  <td class="d-flex" style="gap:10px;">
                    <a href="editcategory.php?id=<?php echo $row ["id"];    ?>" class="btn btn-success">Edit</a>
                    <a href="deletecategory.php?id=<?php echo $row ["id"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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
