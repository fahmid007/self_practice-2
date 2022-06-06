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
    <title>Data_Table</title>

    <style>
        table, th, td {
            text-align: center;
        }
    </style>
</head>
<body style="background-color: #e0f1edcf;">
    <div class="container">
    <h2 class="text-center">Student's Details Table</h2>
    <table class="table table-bordered">
      <tr>
        <th>Serial no.</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Student Id</th>
        <th>Semester</th>
        <th>Department</th>
        <th>Mejor Subject</th>
        <th>Address</th>
        <th>Operation</th>
      </tr>
    
    <?php
        $sn = 1;

        $con = mysqli_connect('localhost', 'root', '', 'practice_php');
        $quary = "SELECT * FROM self_practice_2";
        $data = mysqli_query($con,$quary);

        while($result = mysqli_fetch_assoc($data)){
            echo "<tr>
                    <td>".$sn++."</td>
                    <td>".$result['first_name']."</td>
                    <td>".$result['last_name']."</td>
                    <td>".$result['stu_id']."</td>
                    <td>".$result['semester']."</td>
                    <td>".$result['department']."</td>
                    <td>".$result['mejor_subject']."</td>
                    <td>".$result['address']."</td>
                    <td><a class='btn btn-primary' href='update_form.php?fn=$result[first_name]&ln=$result[last_name]&si=$result[stu_id]&se=$result[semester]&dp=$result[department]&ms=$result[mejor_subject]&ad=$result[address] '>".Edit."</a></td>
                 </tr>";
        }
     ?>
  </table>
    </div>
    
</body>
</html>