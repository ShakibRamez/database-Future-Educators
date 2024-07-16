<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);

$sql = "SELECT * FROM transactions";
$result = $conn->query($sql);

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
    <title>Transaction</title>
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
        <form action="searchcategory.php" method="get">
          <div class="row">
        <div class="col-md-3 mb-3 mt-3 ">
          <input type="text" class="form-control" name="search_category" placeholder="Search Your Category"  >
        </div>
        <div class="col-md-2 mt-3">
          <input type="submit" class="btn btn-primary" value="Search">
          </div>
        </form>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header f-flex"><h3>Transaction Form</h3>
              <a href="form.php" class="btn btn-primary">Add Transaction</a>
            
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
                  <th>Amount</th>
                  <th>Date Time</th>
                  <th>Salary ID</th>
                </tr>
              </thead>
              <tbody>
                <?php $counter = 0; ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?php echo ++$counter; ?></td>
                  <td><?php echo $row["amount"]?></td>
                  <td><?php echo $row["date_time"]?></td>
                  <td><?php echo $row["salary_id"]?></td>
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
