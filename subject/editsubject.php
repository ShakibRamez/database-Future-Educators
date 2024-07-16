<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);

$id = $_GET["id"];
$sql = "SELECT * FROM subjects where id = $id";
$sql_cat = "SELECT * FROM category";

$result = $conn->query($sql);
$result_cat = $conn->query($sql_cat);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header">Edit Subject Form</div>
                    <div class="card-body">
                        <?php
                            if(isset($_GET["status"])&& $_GET["status"] == "success"):
                        ?>
                         <div class="alert alert-success">
                            Has Been edited
                        </div>
                        <?php 
                        endif
                        ?>
                       
                        <form action="update.php" method="post">
                            <div class="mt-3">
                                <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                            </div>
                            <div class="mt-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $row["name"] ?>">
                            </div>
                            <div class="mt-3">
                                <label for="">description</label>
                                <textarea name="description" class="form-control" ><?php echo $row["description"] ?></textarea>
                            </div>
                            <div class="mt-3">
                                <label for="">Category ID</label>
                                <select name="cat_subject_id" id="" class="form-control">
                                <?php while($row_cat = $result_cat->fetch_assoc()): ?>
                                    <option value="<?php echo $row_cat['id'];?>">  <?php echo $row_cat["name"];?> </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="mt-3">
                                <input type="submit" class="btn btn-success" value="Edit">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="../boorstrap/js/bootstrap.min.js"></script>
</body>
</html>