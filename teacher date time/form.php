<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);

$sqldatetime = "SELECT * FROM date_time";
$sqlteacher = "SELECT * from teacher";

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
                    <div class="card-header">Add Category Form</div>
                    <div class="card-body">
                        <?php
                            if(isset($_GET["status"])&& $_GET["status"] == "success"):
                        ?>
                         <div class="alert alert-success">
                            Has Been Selected
                        </div>
                        <?php 
                        endif
                        ?>
                       
                        <form action="concategory.php" method="post">
                            <div class="mt-3">
                                <label for="">Date ID</label>
                                 <select name="cat_subject_id" id="" class="form-control">
                                <?php while($rowdatetime = $resultdatetime->fetch_assoc()): ?>
                                    <option value="<?php echo $rowdatetime['id'];?>"> </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="">Teacher ID</label>
                                <input name="teacher_date_time_id" class="form-control">
                            </div>
                            <div class="mt-3">
                                <input type="submit" class="btn btn-success" value="save">
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