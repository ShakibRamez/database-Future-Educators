<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);

$sql = "SELECT students.id, students.name, students.last_name, students.phone_number, students.date_start, students.teacher_id, teacher.name as teacher_id  from students JOIN teacher on teacher.id = students.teacher_id;";
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
    <title>Student Form</title>
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
     <div class="container" >
      <div class="row">
      <form action="searchcategory.php" method="get">
          <div class="row">
        <div class="col-md-3 mb-3 mt-3 ">
          <input type="text" class="form-control" name="search_category" placeholder="Search Your Student"  >
        </div>
        <div class="col-md-2 mt-3">
          <input type="submit" class="btn btn-primary" value="Search">
          </div>
        </form>
        <div class="col-md-12" style="overflow: auto;">
          <div class="card">
            <div class="card-header f-flex"><h3>Students Form</h3>
              <a href="form.php" class="btn btn-primary">Add Student</a>
            
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
                  <th>Name</th>
                  <th>Last Name</th>
                  <th>Phone Number</th>
                  <th>Date Start</th>
                  <th>Teacher</th>
                </tr>
              </thead>
              <tbody>
                <?php $counter = 0; ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                <td><?php echo ++$counter; ?></td>
                  <td><?php echo $row["name"]?></td>
                  <td><?php echo $row["last_name"]?></td>
                  <td><?php echo $row["phone_number"]?></td>
                  <td><?php echo $row["date_start"]?></td>
                  <td><?php echo $row["teacher_id"]?></td>
                  <td class="d-flex" style="gap:10px;">
                    <a href="editstudent.php?id=<?php echo $row ["id"];    ?>" class="btn btn-success">Edit</a>
                    <a href="deletestudent.php?id=<?php echo $row ["id"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
