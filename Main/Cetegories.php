<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Lowa state University |Online Library | Categories</title>
    <meta property="og:type" content="website">
    <meta name="description" content="Its an online platform for the university students to View availabilty, Reserve and Return the books by their own accounts.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Animate.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-1.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-info shadow navbar-fixed-top navigation-clean-button">
        <div class="container-fluid">
            <div><a class="navbar-brand" href="index.php"><span><img class="img-fluid border rounded shadow" src="assets/img/Lowa%20state%20logo%20-%20Copy.png" width="50" height="50" href="index.php">LOWA State Library</span> </a><button data-toggle="collapse" class="navbar-toggler"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav nav-right">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home </a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="Cetegories.php">Categories</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="Cetegories.php">All</a><a class="dropdown-item" role="presentation" href="Cetegories.php">Novels</a><a class="dropdown-item" role="presentation" href="Cetegories.php">Biographies</a>
                            <a
                                class="dropdown-item" role="presentation" href="Cetegories.php">Computer &amp; Tech</a><a class="dropdown-item" role="presentation" href="Cetegories.php">Medical</a><a class="dropdown-item" role="presentation" href="Cetegories.php">Science &amp; Math</a><a class="dropdown-item" role="presentation"
                                    href="Cetegories.php">Magazines</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../Admin Console/index.php">Admin Console</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
        		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
    <div class="container-fluid">
        <h3>All books by category</h3>
        <p class="text-center text-white bg-secondary border rounded shadow" style="font-size: 18px;">Novels<a href="#"></a></p>
    </div>
    <div class="container-fluid d-lg-flex justify-content-lg-center">
        <div class="table-responsive d-lg-flex justify-content-xl-center" style="width: 1314px;">
<?php
if(!isset($_POST['Search'])){
$query = "select * from books WHERE category='Novel'";
$search_result = filterTable($query);
}

function filterTable($query){
$connect = mysqli_connect("localhost","root","","lowa_state");
$filter_Result = mysqli_query($connect,$query);
$count=mysqli_num_rows($filter_Result);
if($count == 0){
$redirectUrl = 'Cetegories.php';
echo '<script type="application/javascript">
alert("not found");
window.location.href = "'.$redirectUrl.'";
</script>';
$query = "select * from books";
$search_result = filterTable($query);
}
return $filter_Result;
}
?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 57px;">ID</th>
                        <th style="width: 94px;"></th>
                        <th style="width: 394px;">Title</th>
                        <th style="width: 200px;">Author</th>
                        <th style="width: 79px;">Status</th>
                        <th class="text-center" style="width: 56px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td class="text-center"><img class="img-fluid border rounded shadow-lg" style="width: 69px;"<?php echo"<img src='../Admin Console/images from db/".$row['image']."'>"; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td class="text-left text-success"><?php echo $row['_status']; ?></td>
                        <td class="text-center"><a href="#"><i class="fas fa-shopping-basket" data-toggle="tooltip" data-bs-tooltip="" title="Click to reserve this book" style="font-size: 21px;color: rgb(6,115,17);filter: blur(0px);"></i></a></td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-fluid">
        <p class="text-center text-white bg-secondary border rounded shadow" style="font-size: 18px;">Biography<a href="#"></a></p>
    </div>
    <div class="container-fluid d-lg-flex justify-content-lg-center">
        <div class="table-responsive d-lg-flex justify-content-lg-center" style="width: 1314px;">
<?php
if(!isset($_POST['Search'])){
$query = "select * from books WHERE category='Biography'";
$search_result = filterTable1($query);
}

function filterTable1($query){
$connect = mysqli_connect("localhost","root","","lowa_state");
$filter_Result = mysqli_query($connect,$query);
$count=mysqli_num_rows($filter_Result);
if($count == 0){
$redirectUrl = 'Cetegories.php';
echo '<script type="application/javascript">
alert("not found");
window.location.href = "'.$redirectUrl.'";
</script>';
$query = "select * from books";
$search_result = filterTable1($query);
}
return $filter_Result;
}
?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 57px;">ID</th>
                        <th style="width: 94px;"></th>
                        <th style="width: 394px;">Title</th>
                        <th style="width: 200px;">Author</th>
                        <th style="width: 79px;">Status</th>
                        <th class="text-center" style="width: 56px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td class="text-center"><img class="img-fluid border rounded shadow-lg" style="width: 69px;"<?php echo"<img src='../Admin Console/images from db/".$row['image']."'>"; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td class="text-left text-success"><?php echo $row['_status']; ?></td>
                        <td class="text-center"><a href="#"><i class="fas fa-shopping-basket" data-toggle="tooltip" data-bs-tooltip="" title="Click to reserve this book" style="font-size: 21px;color: rgb(6,115,17);filter: blur(0px);"></i></a></td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-fluid">
        <p class="text-center text-white bg-secondary border rounded shadow" style="font-size: 18px;">Medical<a href="#"></a></p>
    </div>
    <div class="container-fluid d-lg-flex justify-content-lg-center">
        <div class="table-responsive d-lg-flex justify-content-lg-center" style="width: 1314px;">
<?php
if(!isset($_POST['Search'])){
$query = "select * from books WHERE category='Medical'";
$search_result = filterTable2($query);
}

function filterTable2($query){
$connect = mysqli_connect("localhost","root","","lowa_state");
$filter_Result = mysqli_query($connect,$query);
$count=mysqli_num_rows($filter_Result);
if($count == 0){
$redirectUrl = 'Cetegories.php';
echo '<script type="application/javascript">
alert("not found");
window.location.href = "'.$redirectUrl.'";
</script>';
$query = "select * from books";
$search_result = filterTable2($query);
}
return $filter_Result;
}
?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 57px;">ID</th>
                        <th style="width: 94px;"></th>
                        <th style="width: 394px;">Title</th>
                        <th style="width: 200px;">Author</th>
                        <th style="width: 79px;">Status</th>
                        <th class="text-center" style="width: 56px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td class="text-center"><img class="img-fluid border rounded shadow-lg" style="width: 69px;"<?php echo"<img src='../Admin Console/images from db/".$row['image']."'>"; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td class="text-left text-success"><?php echo $row['_status']; ?></td>
                        <td class="text-center"><a href="#"><i class="fas fa-shopping-basket" data-toggle="tooltip" data-bs-tooltip="" title="Click to reserve this book" style="font-size: 21px;color: rgb(6,115,17);filter: blur(0px);"></i></a></td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-fluid">
        <p class="text-center text-white bg-secondary border rounded shadow" style="font-size: 18px;">Computers &amp; Tech</p>
    </div>
    <div class="container-fluid d-lg-flex justify-content-lg-center">
        <div class="table-responsive d-lg-flex justify-content-lg-center" style="width: 1314px;">
<?php
if(!isset($_POST['Search'])){
$query = "select * from books WHERE category='Computers & Tech'";
$search_result = filterTable4($query);
}

function filterTable4($query){
$connect = mysqli_connect("localhost","root","","lowa_state");
$filter_Result = mysqli_query($connect,$query);
$count=mysqli_num_rows($filter_Result);
if($count == 0){
$redirectUrl = 'Cetegories.php';
echo '<script type="application/javascript">
alert("not found");
window.location.href = "'.$redirectUrl.'";
</script>';
$query = "select * from books";
$search_result = filterTable4($query);
}
return $filter_Result;
}
?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 57px;">ID</th>
                        <th style="width: 94px;"></th>
                        <th style="width: 394px;">Title</th>
                        <th style="width: 200px;">Author</th>
                        <th style="width: 79px;">Status</th>
                        <th class="text-center" style="width: 56px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td class="text-center"><img class="img-fluid border rounded shadow-lg" style="width: 69px;"<?php echo"<img src='../Admin Console/images from db/".$row['image']."'>"; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td class="text-left text-success"><?php echo $row['_status']; ?></td>
                        <td class="text-center"><a href="#"><i class="fas fa-shopping-basket" data-toggle="tooltip" data-bs-tooltip="" title="Click to reserve this book" style="font-size: 21px;color: rgb(6,115,17);filter: blur(0px);"></i></a></td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-fluid">
        <p class="text-center text-white bg-secondary border rounded shadow" style="font-size: 18px;">Magazines</p>
    </div>
    <div class="container-fluid d-lg-flex justify-content-lg-center">
        <div class="table-responsive d-lg-flex justify-content-lg-center" style="width: 1314px;">
<?php
if(!isset($_POST['Search'])){
$query = "select * from books WHERE category='Magazine'";
$search_result = filterTable5($query);
}

function filterTable5($query){
$connect = mysqli_connect("localhost","root","","lowa_state");
$filter_Result = mysqli_query($connect,$query);
$count=mysqli_num_rows($filter_Result);
if($count == 0){
$redirectUrl = 'Cetegories.php';
echo '<script type="application/javascript">
alert("not found");
window.location.href = "'.$redirectUrl.'";
</script>';
$query = "select * from books";
$search_result = filterTable5($query);
}
return $filter_Result;
}
?>
           <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 57px;">ID</th>
                        <th style="width: 94px;"></th>
                        <th style="width: 394px;">Title</th>
                        <th style="width: 200px;">Author</th>
                        <th style="width: 79px;">Status</th>
                        <th class="text-center" style="width: 56px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td class="text-center"><img class="img-fluid border rounded shadow-lg" style="width: 69px;"<?php echo"<img src='../Admin Console/images from db/".$row['image']."'>"; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td class="text-left text-success"><?php echo $row['_status']; ?></td>
                        <td class="text-center"><a href="#"><i class="fas fa-shopping-basket" data-toggle="tooltip" data-bs-tooltip="" title="Click to reserve this book" style="font-size: 21px;color: rgb(6,115,17);filter: blur(0px);"></i></a></td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-fluid">
        <p class="text-center text-white bg-secondary border rounded shadow" style="font-size: 18px;">Science &amp; Math</p>
    </div>
    <div class="container-fluid d-lg-flex justify-content-lg-center">
        <div class="table-responsive d-lg-flex justify-content-lg-center" style="width: 1314px;">
<?php
if(!isset($_POST['Search'])){
$query = "select * from books WHERE category='Science & Math'";
$search_result = filterTable6($query);
}

function filterTable6($query){
$connect = mysqli_connect("localhost","root","","lowa_state");
$filter_Result = mysqli_query($connect,$query);
$count=mysqli_num_rows($filter_Result);
if($count == 0){
$redirectUrl = 'Cetegories.php';
echo '<script type="application/javascript">
alert("not found");
window.location.href = "'.$redirectUrl.'";
</script>';
$query = "select * from books";
$search_result = filterTable6($query);
}
return $filter_Result;
}
?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 57px;">ID</th>
                        <th style="width: 94px;"></th>
                        <th style="width: 394px;">Title</th>
                        <th style="width: 200px;">Author</th>
                        <th style="width: 79px;">Status</th>
                        <th class="text-center" style="width: 56px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td class="text-center"><img class="img-fluid border rounded shadow-lg" style="width: 69px;"<?php echo"<img src='../Admin Console/images from db/".$row['image']."'>"; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td class="text-left text-success"><?php echo $row['_status']; ?></td>
                        <td class="text-center"><a href="#"><i class="fas fa-shopping-basket" data-toggle="tooltip" data-bs-tooltip="" title="Click to reserve this book" style="font-size: 21px;color: rgb(6,115,17);filter: blur(0px);"></i></a></td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>
