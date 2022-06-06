<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Practice-2</title>
</head>
<body style="background-color: #e0f1edcf;">
    <div class="container">
        <h2 class="text-center">Please Fillup This Form</h2>
        <div class="card mb-2 " style="width: 60%; margin: 0 auto;">
        <form method = "POST" autocomplete="off">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>First name</label>
                <input name="fst_name" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                <label>Last name</label>
                <input name="lst_name" type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Student Id</label>
                <input name="stu_id" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                <label>Semester</label>
                <input name="semester" type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Department</label>
                <input name="dept" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                <label>Mejor Subject</label>
                <input name="mejor_sub" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group col-md-12">
                <label>Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <input name="submit" value="Submit" style="margin-left: 15px;" type="submit" class="btn btn-primary">
        </form>

        <?php 
        if($_POST['submit']){
            $fst_name = $_POST['fst_name'];
            $lst_name = $_POST['lst_name'];
            $stu_id = $_POST['stu_id'];
            $semester = $_POST['semester'];
            $dept = $_POST['dept'];
            $mejor_sub = $_POST['mejor_sub'];
            $add = $_POST['address'];

            if($fst_name!= "" && $lst_name!="" && $stu_id!="" && $semester!="" && $dept!="" && $mejor_sub!="" && $add!=""){
                $con = mysqli_connect('localhost', 'root', '', 'practice_php');
                $quary = "INSERT INTO self_practice_2 VALUES('', '$fst_name', '$lst_name', '$stu_id', '$semester', '$dept', '$mejor_sub', '$add' )";
                $data = mysqli_query($con,$quary);
            }
            if($data){
                echo "<script>alert('Data updated')</script>";
                echo "<script>window.open('data_table.php', '_self')</script>";
            }else{
                echo "Failed to register";
            }

        }


        ?>
        </div>
        

    </div>
</body>
</html>