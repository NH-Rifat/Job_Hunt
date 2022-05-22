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
    <link rel="stylesheet" href="./approve1.css">
</head>
<body>
    <div class="wrapper">
            <div class="pending_request">
                <!--table for pending request  -->
                <div class="request">
                    <table class="table table-bordered">
                        <tr>
                            <th>Recruiter ID</th>
                            <th>Recruiter name</th>
                            <th>Company name</th>
                            <th>Approval</th>
                            <th>Cancel</th>
                        </tr>
                        <?php
                            $query = "SELECT * FROM `job_recruiter` WHERE status = 'pending';";
                            $result = mysqli_query($conn,$query);
                            #$Pending = mysqli_fetch_array($result);
                            if($result->num_rows>0){
                                while($rd = mysqli_fetch_assoc($result)){
                                    $recruiter_id = $rd['recruiter_id'];
                                    $recruiter_first_name = $rd['first_name'];
                                    $recruiter_last_name = $rd['last_name'];
                                    $company = $rd['company_name'];
                        ?>
                        <tr>
                            <td><?php echo $recruiter_id;?></td>
                            <td><?php echo $recruiter_first_name . ' ' . $recruiter_last_name;?></td>
                            <td><?php echo $company;?></td>
                            <td><a href="approve.php?id=<?php echo $recruiter_id; ?>"class="btn btn-info" name="approve">Approve</a></td>
                            <td><a href="delete.php?id=<?php echo $recruiter_id; ?>"class="btn btn-danger">Cancel</a></td>
                        </tr>
                        <?php
                            }
                        }else{
                            //echo "No Data to Show";
                        }
                        ?>
                    </table>
                </div>
                <!-- End table -->
            </div>
    </div>
</body>
</html>

