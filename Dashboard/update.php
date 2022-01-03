<?php
    session_start();
    include_once("../DB/connect.php");
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "SELECT * FROM biodb WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);  
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
        <title>Update - SB Admin</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Account</h3></div>
                                        <div class="card-body">
                                            <form method="POST" action="../DB/updateaction.php" enctype="multipart/form-data">
                                                <div class="row mb-2">
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input class="form-control" id="inputFirstName" type="text" name="firstName" placeholder="Enter your first name" value="<?php echo $row["firstName"];?>"/>
                                                            <label for="inputFirstName">Your First name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input class="form-control" id="inputLastName" type="text" name="lastName" placeholder="Enter your last name" value="<?php echo $row["lastName"];?>"/>
                                                            <label for="inputLastName">Your Last name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input class="form-control" id="birthday" type="date" name="dateOfBirth" placeholder="Enter Your Birthday" value="<?php echo $row["dateOfBirth"];?>"/>
                                                            <label for="birthday">Date of Birth</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@gmail.com" value="<?php echo $row["email"];?>"/>
                                                            <label for="inputEmail">Your Email address</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input class="form-control" id="inputWebsite" type="website" name="website" placeholder="www.website.com" value="<?php echo $row["website"];?>"/>
                                                            <label for="inputWebsite">Your Website</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input class="form-control" id="text" type="text" name="degree" placeholder="Enter Your Degree" value="<?php echo $row["degree"];?>"/>
                                                            <label for="inputText">Enter your Degree</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input class="form-control" id="text" type="text" name="city" placeholder="Enter Your City Name" value="<?php echo $row["city"];?>"/>
                                                            <label for="text">Your City</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input class="form-control" id="phone" type="tel" name="phone" placeholder="Enter Phone Number" value="<?php echo $row["phone"];?>"/>
                                                            <label for="phone">Your Phone Number</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input class="form-control" id="text" type="text" name="location" placeholder="Enter Your Address" value="<?php echo $row["location"];?>"/>
                                                            <label for="text">Set Location</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-4">
                                                    <img src="../photos/<?php echo $row["image"];?>" height="100" width="100" alt="<?php echo $row["image"];?>" title="<?php echo $row["image"];?>"/>
                                                        <input class="form-control" type="file" id="image" name="image">
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <textarea class="form-control" type="text" name="details" placeholder="Enter Your Details" rows="13" value="<?php echo $row["details"];?>"></textarea>
                                                            <label for="short-description">Write Your Details</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <div class="mapouter">
                                                                <div class="gmap_canvas">
                                                                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kochukhet,dhaka,bangladesh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                                    <a href="https://123movies-to.org">123 movies</a><br>
                                                                    <style>.mapouter{position:relative;text-align:right;height:300px;width:520px;}</style>
                                                                    <a href="https://www.embedgooglemap.net">add google map</a>
                                                                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:520px;}</style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="mt-4 mb-0">
                                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                                    <!-- <div class="d-grid"><a class="btn btn-primary btn-block" name="submit" type="submit" value="update">UPDATE</a></div> -->
                                                    <div class="d-grid"><button type="submit" name="submit" value="update">UPDATE</button></div>
                                                    <!-- <br>
                                                    <div class="d-grid"><a class="btn btn-primary btn-block" name="back" type="submit" href="tables.php">BACK</a></div> -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
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
            </div> -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
