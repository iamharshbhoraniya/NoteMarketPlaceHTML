<?php include "../includes/db.php"; ?>

<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Notes | Notes Marketplace</title>

    <!-- Favicon-->
    <link rel="shortcut icon" href="../images/favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/upload.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        label {
            margin-bottom: 10px !important;
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 20px;
            color: #333333;
        }

        .form-group {
            margin-bottom: 30px !important;
        }

        #noOfPages,
        #type {
            margin-top: 20px !important;
        }

        textarea {
            border: 1px solid #d1d1d1;
            width: 1440px;
            height: 153px !important;
            border-radius: 3px;
        }

        #btn-submit {
            margin-left: 15px;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container p-0">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-md-3 navbar-header">
                        <a class="navbar-brand text-left" href="HomePage.php">
                            <img src="../images/logo.png" alt="logo">
                        </a>
                    </div>

                    <!-- Link -->
                    <div class="text-right col-md-9 collapse navbar-collapse p-0" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="Search.php">Search Notes</a></li>
                            <li class="nav-item"><a class="nav-link active" href="AddNotes.php">Sell Your Notes</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="BuyerRequest.php">Buyer Requests</a></li>
                            <li class="nav-item"><a class="nav-link" href="FAQ.php">FAQ</a></li>
                            <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <img src="../images/reviewer-1.png" width="30" height="30" alt="user-image"
                                            class="d-inline-block align-top avatar-header rounded-circle">
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="MyProfile.php">My Profile</a>
                                        <a class="dropdown-item" href="MyDownload.php">My Download</a>
                                        <a class="dropdown-item" href="MySoldNote.php">My Sold Notes</a>
                                        <a class="dropdown-item" href="MyRejectedNote.php">My Rejected Notes</a>
                                        <a class="dropdown-item" href="ChangePassword.php">Change Password</a>
                                        <a class="dropdown-item btn-logout" href="Login.php">LogOut</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="Login.php">LogOut</a></li>
                        </ul>
                    </div>

                    <!-- Mobile link -->
                    <div class="mobile-nav col-md-8 text-right">
                        <img src="../images/menu.png" alt="menu" id="mobile-nav-open-btn" class="text-right">
                    </div>

                    <div id="mobile-nav" class="text-left">
                        <span id="mobile-nav-close-btn">
                            <img src="../images/xmark.png" alt="close-image">
                        </span>
                        <div id="mobile-nav-content">
                            <ul class="nav navig">
                                <li class="nav-item"><a class="nav-link" href="Search.php">Search Notes</a></li>
                                <li class="nav-item"><a class="nav-link active" href="AddNotes.php">Sell Your Notes</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="BuyerRequest.php">Buyer Requests</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="FAQ.php">FAQ</a></li>
                                <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a href="#collapseExample3" data-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="collapseExample3"
                                            class="nav-link nav-link-custom">
                                            <img src="../images/reviewer-1.png" width="30" height="30" alt="user-image"
                                                class="d-inline-block align-top avatar-header rounded-circle">
                                        </a>

                                        <div id="collapseExample3" class="collapse">
                                            <a class="dropdown-item" href="MyProfile.php">My Profile</a>
                                            <a class="dropdown-item" href="MyDownload.php">My Download</a>
                                            <a class="dropdown-item" href="MySoldNote.php">My Sold Notes</a>
                                            <a class="dropdown-item" href="MyRejectedNote.php">My Rejected Notes</a>
                                            <a class="dropdown-item" href="ChangePassword.php">Change Password</a>
                                            <a class="dropdown-item btn-logout" href="Login.php">LogOut</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="Login.php">LogOut</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Navigation -->

    <!-- Head -->
    <section class="head">
        <div class="head-content">
            <div class="container">
                <div class="row">
                    <div class="head-content-inner">
                        <div class="head-heading">
                            Add Notes
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Head -->

    <!-- Add Notes  -->
    <section class="container">
        <form method="post">
            <!-- Basic Note Details -->
            <div class="row heading">
                <div class="col-md-12 p-0">
                    <h1 class="title">Basic Note Details</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputTitle">Title <span>*</span></label>
                        <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Enter your notes title">
                    </div>

                    <label for="file-image">Display Picture</label>
                    <div id="file-upload-form" class="uploader form-group">
                        <input id="file-upload" type="file" name="fileUpload" accept="image/*" />
                        <label for="file-upload" id="file-drag">
                            <img id="file-image" src="#" alt="Preview" class="hidden">
                            <div id="start">
                                <img src="../images/upload-file.png" height="46" width="50" />
                                <div>Upload a picture</div>
                                <div id="notimage" class="hidden">Please select an image</div>
                            </div>
                            <div id="response" class="hidden">
                                <div id="messages"></div>
                                <progress class="progress" id="file-progress" value="0">
                                    <span>0</span>%
                                </progress>
                            </div>
                        </label>
                    </div>

                    <div class="form-group">
                        <label id="type" for="dropdownType">Type</label>
                        <select name="note_type" id="dropdownType" class="form-control">
                            <option selected>Select your category</option>
                        <?php

                            $query = "SELECT * FROM notetype";
                            $select_type = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_assoc($select_type )) {
                            $type_id = $row['NoteTypeID'];
                            $type_name = $row['Name'];            
            
                            echo "<option value='$cat_id'>{$type_name}</option>";            
                            }
                        ?>

                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dropdownCategory">Category <span>*</span></label>
                        <select id="dropdownCategory" class="form-control">
                            <option selected>Select your category</option>
                            <?php

                            $query = "SELECT * FROM notecategories";
                            $select_category = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_assoc($select_category )) {
                            $category_id = $row['NoteCategoryID'];
                            $category_name = $row['Name'];            
            
                            echo "<option value='$cat_id'>{$category_name}</option>";            
                            }
                            ?>
                        </select>
                    </div>

                    <label for="file-image">Upload Notes <span>*</span></label>
                    <div id="file-upload-form" class="uploader form-group">
                        <input id="file-upload" type="file" name="fileUpload" accept="image/*" />
                        <label for="file-upload" id="file-drag">
                            <img id="file-image" src="#" alt="Preview" class="hidden">
                            <div id="start">
                                <img src="../images/upload-note.png" height="46" width="50" />
                                <div>Upload your notes</div>
                                <div id="notimage" class="hidden">Please select an image</div>
                            </div>
                            <div id="response" class="hidden">
                                <div id="messages"></div>
                                <progress class="progress" id="file-progress" value="0">
                                    <span>0</span>%
                                </progress>
                            </div>
                        </label>
                    </div>

                    <div class="form-group">
                        <label id="noOfPages" for="inputNumberofPages">Number of Pages</label>
                        <input type="text" class="form-control" id="inputNumberofPages"
                            placeholder="Enter number of note pages">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-0 p-0">
                        <label for="description">Description <span>*</span></label>
                        <textarea type="text" class="form-control" id="description"
                            placeholder="Enter your description"></textarea>
                    </div>
                </div>
            </div>

            <!-- Institution Information -->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title" style="margin-top: 40px;">Institution Information</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dropdownCountry">Country</label>
                        <select id="dropdownCountry" class="form-control">
                            <option selected>Select your country</option>
                            <?php

                            $query = "SELECT * FROM countries";
                            $select_countries = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_assoc($select_countries )) {
                            $country_id = $row['CountryID'];
                            $country_name = $row['Name'];            
            
                            echo "<option value='$cat_id'>{$country_name}</option>";            
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="institutionname">Institution Name</label>
                        <input type="text" class="form-control" id="institutionname"
                            placeholder="Enter your institution name">
                    </div>
                </div>
            </div>

            <!-- Course Details -->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title" style="margin-top: 40px;">Course Details</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="coursename">Course Name</label>
                        <input type="text" class="form-control" id="coursename" placeholder="Enter your course name">
                    </div>
                    <div class="form-group">
                        <label for="proflecturer">Professor / Lecturer</label>
                        <input type="email" class="form-control" id="proflecturer" aria-describedby="emailHelp"
                            placeholder="Enter your professor name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="coursecode">Course Code</label>
                        <input type="email" class="form-control" id="coursecode" aria-describedby="emailHelp"
                            placeholder="Enter your course code">
                    </div>
                </div>
            </div>

            <!-- Selling Information -->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title" style="margin-top: 40px;">Selling Information</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Sell For <span>*</span></label>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Free</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Paid</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sellPrice">Sell Price</label>
                        <input type="email" class="form-control" id="sellPrice" aria-describedby="emailHelp"
                            placeholder="Enter your price">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="file-image">Note Preview</label>
                    <div id="file-upload-form" class="uploader form-group">
                        <input id="file-upload" type="file" name="fileUpload" accept="image/*" />
                        <label for="file-upload" id="file-drag" class="customInput">
                            <img id="file-image" src="#" alt="Preview" class="hidden">
                            <div id="start">
                                <img src="../images/upload-file.png" height="46" width="50" />
                                <div>Upload a file</div>
                                <div id="notimage" class="hidden">Please select an image</div>
                            </div>
                            <div id="response" class="hidden">
                                <div id="messages"></div>
                                <progress class="progress" id="file-progress" value="0">
                                    <span>0</span>%
                                </progress>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row btn-line">
                <div class="form-group">
                    <a href="#" id="btn-Submit" class="btn">SUBMIT</a>
                </div>

                <div class="form-group">
                    <a href="#" id="btn-Publish" class="btn" style="margin-left: 30px;">PUBLISH</a>
                </div>
            </div>
        </form>
    </section>
    <!-- End Add Notes   -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Copyright -->
                <div class="col-md-6 col-sm-8 foot-text text-left">
                    <p>Copyright &copy; TatvaSoft All Rights Reserved.</p>
                </div>
                <!-- Social Icon -->
                <div class="col-md-6 col-sm-4 foot-icon col-sm-4 text-right">
                    <ul class="social-list">
                        <li>
                            <a href="#">
                                <img src="../images/facebook.png" alt="facebook-image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../images/twitter.png" alt="twitter-image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../images/linkedin.png" alt="linkedin-image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- JavaScript -->
    <!-- JQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/upload.js"></script>
    <script src="js/script.js"></script>
</body>

</html>