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
        <h2 class="text-center">Please Edit and Save</h2>
        <div class="card mb-2 " style="width: 60%; margin: 0 auto;">
        <form method = "POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>First name</label>
                <input name="fst_name" type="text" class="form-control" value="<?php echo $_GET['fn'];?>">
                </div>
                <div class="form-group col-md-6">
                <label>Last name</label>
                <input name="lst_name" type="text" class="form-control" value="<?php echo $_GET['ln'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Student Id</label>
                <input name="stu_id" type="text" class="form-control" value="<?php echo $_GET['si'];?>">
                </div>
                <div class="form-group col-md-6">
                <label>Semester</label>
                <input name="semester" type="text" class="form-control" value="<?php echo $_GET['se'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Department</label>
                <input name="dept" type="text" class="form-control" value="<?php echo $_GET['dp'];?>">
                </div>
                <div class="form-group col-md-6">
                <label>Mejor Subject</label>
                <input name="mejor_sub" type="text" class="form-control" value="<?php echo $_GET['ms'];?>">
                </div>
            </div>
            <div class="form-group col-md-12">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo $_GET['ad'];?>">
            </div>
            <input name="submit" value="Submit" style="margin-left: 15px;" type="submit" class="btn btn-primary">
        </form>

        <?php 
        if(isset($_POST['submit'])){
            $fst_name = $_POST['fst_name'];
            $lst_name = $_POST['lst_name'];
            $stu_id = $_POST['stu_id'];
            $semester = $_POST['semester'];
            $dept = $_POST['dept'];
            $mejor_sub = $_POST['mejor_sub'];
            $add = $_POST['address'];

            $con = mysqli_connect('localhost', 'root', '', 'practice_php');
            $quary = "UPDATE self_practice_2 SET first_name='$fst_name', last_name='$lst_name',semester='$semester', department='$dept', mejor_subject='$mejor_sub', address='$add' where stu_id='$stu_id' ";
            $data = mysqli_query($con,$quary);

            if($data){
                echo "<script>alert('Data updated')</script>";
                echo "<script>window.open('data_table.php', '_self')</script>";
            }else{
                echo "Failed to update";
            }
        }


        ?>
        </div>
        

    </div>
</body>
</html>