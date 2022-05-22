<?php
    require_once('../../db/dbh.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- font awesome cdn-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="./approved1.css">
</head>
<body>
    <div class="pending_request">
        <!--table for pending request  -->
        <div class="request">
            <table class="table table-bordered">
                <tr style="color:white; text-align:center;">
                    <th>Job Seeker ID</th>
                    <th>NAME</th>
                    <th>Contact</th>
                    <th>Approval</th>
                    <th>Cancel</th>
                </tr>
                <?php
                    $query = "SELECT * FROM `job_seeker` WHERE status = 'pending';";
                    $result = mysqli_query($conn,$query);
                    #$Pending = mysqli_fetch_array($result);
                    if($result->num_rows>0){
                        while($rd = mysqli_fetch_assoc($result)){
                            $job_seeker_id = $rd['job_seeker_id'];
                            $job_seeker_name = $rd['user_name'];
                            $contact = $rd['contact'];
                ?>
                <tr style="color:white; text-align:center;">
                    <td><?php echo $job_seeker_id; ?></td>
                    <td><?php echo $job_seeker_name; ?></td>
                    <td><?php echo $contact; ?></td>
                    <td><a href="approve.php?id=<?php echo $job_seeker_id; ?>"class="btn btn-info" name="approve">Approve</a></td>
                    <td><a href="delete.php?id=<?php echo $job_seeker_id; ?>"class="btn btn-danger">Cancel</a></td>
                </tr>
                <?php
                    }
                }
                ?>
            </table>
        </div>
        
</body>
</html>
