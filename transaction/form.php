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
                    <div class="card-header">Add Transaction Form</div>
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
                       
                        <form action="contransaction.php" method="post">
                            <div class="mt-3">
                                <label for="">Amount</label>
                                <input type="text" name="amount" class="form-control">
                            </div>
                            <div class="mt-3">
                                <label for="">Date Time</label>
                                <textarea name="date_time" class="form-control"></textarea>
                            </div>
                            <div class="mt-3">
                                <label for="">Salary ID</label> 
                                <input type="text" name="salary_id" class="form-control">
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