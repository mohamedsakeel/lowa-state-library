<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blank Page - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Filter.css">
</head>
	
<?php
if(!isset($_POST['Save'])){
?>
	
<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-book-open" style="filter: grayscale(0%) hue-rotate(0deg) invert(0%) saturate(0%);opacity: 1;"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Lowa Admin</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="table.php"><i class="fas fa-table"></i><span>Book Collections</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Uploadbook.php"><i class="fas fa-upload"></i><span>Upload a book</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Admin</span><img class="border rounded-circle img-profile" src="assets/img/avatars/icons8_administrator_male_96px_1.png"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div
                                            class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
            </div>
            </li>
            </ul>
        </div>
        </nav>
        <div class="container">
            <div>
                <h3>Upload a book</h3>
            </div>
        </div>
        <div class="container">
            <form method="post" action="Uploadbook.php" enctype="multipart/form-data">
                <div class="form-group"><input class="border-primary shadow-sm form-control" type="text" name="title" placeholder="Book title" autofocus="" required=""></div>
                <div class="col" style="padding: 0px;">
                    <div class="form-row">
                        <div class="col"><input class="border-primary form-control" type="text" placeholder="Authors Name" name="author" required=""></div>
                        <div class="col"><input class="border-primary form-control" type="text" inputmode="numeric" name="copies" required="" placeholder="Copies"></div>
                    </div>
                </div>
                <div class="form-group" style="margin: 0;padding: -30px;margin-top: 14px;">
                    <select class="custom-select border-primary" name="category">
                        <option>Select a category</option>
                        <option>Novel</option>
                        <option>Biography</option>
                        <option>Medical</option>
                        <option>Science &amp; Math</option>
                        <option>Computers &amp; Tech</option>
                        <option>Magazine</option>
                    </select></div>
                <div class="form-group" style="margin: 0;padding: -30px;margin-top: 14px;"><textarea class="border-primary form-control d-lg-flex justify-content-lg-center" placeholder="Description" name="description" spellcheck="true"></textarea></div><br><br>	
				
				<div class="form-group">
                    <div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Choose File</label>
                    
                    </div>
				</div>
				
                <div class="form-group text-center"><button class="btn btn-primary text-center" type="submit" name="Save" style="height: 47px;width: 89px;margin: 13px;">Save</button></div>
            </form>
        </div>
    </div>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright &copy; Brand 2019</span></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
<?php
}
else{
if(isset($_POST['Save'])){
//path to store the uploaded image
$target = "images from db/".basename($_FILES['image']['name']);
//connect to the database
$db = mysqli_connect("localhost","root","","lowa_state");
//get all the submitted data from the form
$title = $_POST['title'];
$author = $_POST['author'];
$copies = $_POST['copies'];
$image = $_FILES['image']['name'];
$description = $_POST['description'];
$category = $_POST['category'];
$sql = "Insert into books(title,author,copies,image,description,category)values('$title','$author','$copies','$image','$description','$category')";
mysqli_query($db,$sql);//store the submitted data into the database table.
//move the uploaded image into the images folder
if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
$redirectUrl = 'Uploadbook.php';
echo '<script type="application/javascript">
alert("success");
window.location.href = "'.$redirectUrl.'";</script>';
}else{
echo '<script type="application/javascript">
alert("There was a problem uploading image");
window.location.href = "'.$redirectUrl.'";</script>';
}
}
}
?>
</html>