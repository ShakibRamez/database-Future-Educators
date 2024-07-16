<?php
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
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mt-3">
                                <label for="">description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="mt-3">
                                <label for="">Phone number</label> 
                                <input type="text" name="number" class="form-control">
                            </div>
                            <div class="mt-3">
                                <label for="">Date</label>
                                <input type="date" class="form-control" name="date">
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