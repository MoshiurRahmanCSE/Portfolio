<?php 
    session_start();
    include_once("../DB/connect.php");
    if(isset($_GET["id"])){
        $rId  = $_GET["id"];     
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li> -->
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Resume
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="resume.php">Resume Insert</a>
                                    <a class="nav-link" href="resumelist.php">Resume List</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Admin
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Logout</a>
                                            <?php
                                                $sql = "SELECT id, firstName, lastName, email, password FROM biodb";
                                                $result = mysqli_query($conn,$sql);
                                                // var_dump($result);
                                                // die();
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row    
                                                    while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                           
                                            <a class="nav-link" href="update.php?id=<?php echo $row["id"];?>">Upadate Profile</a>
                                            <a class="nav-link" href="password.php?id=<?php echo $row["id"];?>">Forgot Password</a>
                                            <?php }} ?>
                                            <a class="nav-link" href="register.php">Register</a> 
                                        </nav>
                                    </div>
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div> -->
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagescollapseLayouts" aria-expanded="false" aria-controls="pagescollapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagescollapseLayouts" aria-labelledby="heading" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="catinsert.php">Category Insert</a>
                                    <a class="nav-link" href="catlist.php">Category List</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagescollapseLayout" aria-expanded="false" aria-controls="pagescollapseLayout">
                                <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                                Service
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagescollapseLayout" aria-labelledby="heading" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="service.php">Service Insert</a>
                                    <a class="nav-link" href="servicelist.php">Service List</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagescollapseLayout1" aria-expanded="false" aria-controls="pagescollapseLayout1">
                                <div class="sb-nav-link-icon"><i class="fab fa-readme"></i></div>
                                Review / Testimonial
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagescollapseLayout1" aria-labelledby="heading" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="review.php">Review Insert</a>
                                    <a class="nav-link" href="reviewlist.php">Review List</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> -->
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Resume Information Update</h1>
                        <div class="col-md-12">
                            <div class="form">
                                <form method="POST" action="../DB/resumeupdateaction.php" enctype="multipart/form-data">  
                                    <div class="row">                                   
                                        <div class="col-md-12">
                                            <div class="input-field">
                                                <?php
                                                    $sql = "SELECT * FROM resumedb WHERE rId = $rId";
                                                    $res = mysqli_query($conn, $sql);
                                                    $row = mysqli_fetch_assoc($res);
                                                ?>                                          
                                                <div class="mb-3 row">
                                                    <label for="rHead" class="col-sm-2 col-form-label">Resume Head</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" name="rHead"  class="form-control" placeholder="Resume Head" value="<?php echo $row["rHead"];?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="rTitle" class="col-sm-2 col-form-label">Resume Title</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" name="rTitle"  class="form-control" placeholder="Resume Title" value="<?php echo $row["rTitle"];?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="rStartyear" class="col-sm-2 col-form-label">Start Date</label>
                                                    <div class="col-sm-10">
                                                    <input type="date" name="rStartyear"  class="form-control" placeholder="Start Date" value="<?php echo $row["rStartyear"];?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="rEndyears" class="col-sm-2 col-form-label">End Date</label>
                                                    <div class="col-sm-10">
                                                    <input type="date" name="rEndyears"  class="form-control" placeholder="End Date" value="<?php echo $row["rEndyears"];?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="rname" class="col-sm-2 col-form-label">Resume Name</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" name="rname"  class="form-control" placeholder="Resume Name" value="<?php echo $row["rname"];?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="rdetails" class="col-sm-2 col-form-label">Resume Details</label>
                                                    <div class="col-sm-10">
                                                    <textarea type="text" name="rdetails" class="form-control" placeholder="Resume Details" rows="3"><?php echo $row["rdetails"];?>"</textarea>
                                                    </div>
                                                </div>
                                                <div class="d-grid">
                                                    <input type="hidden" name="id" value="<?php echo $rId;?>">
                                                    <button type="submit" name="submit" class="submit">Update</button>
                                                </div>   
                                            </div>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script>
            $(document).ready(function() {
                $('#datatable').DataTable();
            } );
        </script>
    </body>
</html>