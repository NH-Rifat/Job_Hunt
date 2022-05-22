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
<header class="header">
		<div class="section">
			<div class="header_container">
				<nav class="navbar">
					<h2 class="logo">
						<a href="#">
							<img src="./images/ASSET-USER-ADMIN.png" alt="">
						</a>
					</h2>
					<ul>
						<li><a href="../../Admin/index.php">Home</a></li>
						<li><a href="../../Admin/index.php">Profile</a></li>
						<li><a href="#" style="color: white;">Job seeker</a></li>
						<li><a href="../../Admin/index.php">Recruiter</a></li>
						<li><a href="../../Admin/skill_test/index.php">Skill Test</a></li>
						<li><a href="../../Admin/trash_item/index.php">Trash</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
    <!-- End header -->
    <div class="wrapper">
        <div class="container">
            <div class="profile_sec" >
                <div class="heading">
                    <h2>Admin</h2>
                </div>
                <div class="profile">
                    <img src="../job seeker/images/undraw_male_avatar_323b.svg" alt="">
                    <h2>MD.Hasan Rifat</h2>
                    <h3>Software Engineer</h3>
                </div>
                <div class="bio">
                    <div class="location">
                        <i class="fa fa-globe"></i>
                        <p>Bangladesh</p>
                    </div>
                    <div class="city">
                        <i class="fa fa-street-view"></i>
                        <p>Dhaka,Bangladesh</p>
                    </div>
                    <div class="git">
                        <i class="fa fa-github"></i>
                        <p>HasanRifat</p>
                    </div>
                    <div class="linkedin">
                        <i class="fa fa-linkedin"></i>
                        <p>Hasan-Rifat</p>
                    </div>
                    <div class="twitter">
                        <i class="fa fa-twitter"></i>
                        <p>Hasan_Rifat</p>
                    </div>
                    <div class="github">
                        <i class="fa fa-github-alt"></i>
                        <p><a href="#">https://hasanRifat.github.io</a></p>
                    </div>
                    <div class="contact">
                        <i class="fa fa-envelope"></i>
                        <p>contact@hasan.com</p>
                    </div>
                </div>
            </div>
            <div class="pending_request">
                <div class="heasing">
                    
                    <h1>Pending Request .....<button class="view_seeker" onclick="showSeeker()">View</button></h1>
                    <div id="seeker_info"></div>
                    
                </div>
            </div>
        </div>
    </div>
    <script>
    function showSeeker(){
        var xmlhttp= new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                document.getElementById("seeker_info").innerHTML=this.responseText;
            }
        }

        // Must change this path 
        xmlhttp.open("GET","http://localhost/The_Hunt/Admin/job%20seeker/second_index.php",true);
        xmlhttp.send();
    }
    </script>
</body>
</html>
