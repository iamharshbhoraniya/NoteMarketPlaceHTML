<?php include "../includes/db.php";
ob_start();
session_start();
?>
<?php 
    $id = $id = mysqli_real_escape_string($connection,$_GET['id']);
    $_SESSION['NOTEID'] = $id;
    if(isset($_POST['download'])){
        ?>
        <script>
            alert("Please sign in/register to download this note.");
            location.replace('../FrontPanel/Login.php');
        </script>
        <?php
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes Details | Notes Marketplace</title>

    <!-- Favicon-->
    <link rel="shortcut icon" href="../images/favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        /* note detail modal */

        .modal-body {
            padding: 0 55px 0 40px;
        }

        .modal {
            margin-top: 55px;
        }

        .popup-close-btn {
            padding: 10px 10px 0 0;
        }

        .modal-body img {
            height: auto;
            margin: auto;
            text-align: center;
            left: 50%;
            position: relative;
            transform: translateX(-50%);
            width: 63px;
            height: 63px;
        }

        .modal-body h2 {
            font-size: 26px;
            font-weight: 600;
            line-height: 30px;
            color: #6255a5;
            padding-top: 10px;
            padding-bottom: 20px;
        }

        .modal-body p {
            font-size: 16px;
            font-weight: 400;
            line-height: 22px;
            color: #333333;
            padding-bottom: 5px;
        }

        .modal-body h5 {
            font-size: 18px;
            font-weight: 600;
            line-height: 22px;
            color: #333333;
        }
        div.scroll {
                margin:4px, 4px;
                padding:4px;
                width: 100%;
                height: 110px;
                overflow-x: hidden;
                overflow-y: auto;
                text-align:justify;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <?php 
        if(isset($_SESSION['ID'])){
            include "includes/header.php"; 
        }
        else{
            include "includes/header_non.php"; 
        }
    ?>
    <!-- End Navigation -->

    <!-- preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- note detail section-->
    <section id="note-detail">
        <form method="POST">
        <div class="content-box">
            <div class="container">

            <?php 

                $query = "SELECT SN.`SellerNoteID`, SN.`SellerID`, SN.`Title`, SN.`Category`, SN.`Description`, SN.`SellingPrice`, SN.`UniversityName`, SN.`DisplayPicture`, SN.`Country`, SN.`Course`, SN.`CourseCode`, SN.`Professor`, SN.`NumberofPages`, SN.`PublishedDate`, SN.`NotesPreview` FROM `sellernotes` AS SN WHERE SN.`SellerNoteID` = '$id'";
                $select_notebyid_query = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($select_notebyid_query)){
                    $note_title = $row['Title'];
                    $sellernoteid = $row['SellerNoteID'];
                    $sellerid = $row['SellerID'];
                    $note_category = $row['Category'];
                    $category_name="";
                    $note_description = $row['Description'];
                    $note_price = $row['SellingPrice'];
                    $institute = $row['UniversityName'];
                    $note_image = $row['DisplayPicture'];
                    $country_id = $row['Country'];
                    $course_name = $row['Course'];
                    $course_code = $row['CourseCode'];
                    $professor  = $row['Professor'];
                    $note_pages = $row['NumberofPages'];
                    $published_date = $row['PublishedDate'];
                    $note_preview = $row['NotesPreview'];
                }
                ?>


                <div class="row">
                    <!-- note details left -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <!-- Note details image -->
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                                <div class="note-detail-img">
                                    <h4>Notes Details</h4>
                                    <img src="../upload/<?php echo $sellerid; ?>/<?php echo $sellernoteid; ?>/<?php echo $note_image; ?>" alt="image of note">
                                </div>
                            </div>


                            <!-- details of notes -->
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">
                                <div class="note-info">
                                    <h4><?php echo  $note_title ?></h4>
                                    <h6>
                                        <?php 
                                            $query1 = "SELECT NC.`Name` FROM `notecategories` AS NC
                                            WHERE NC.`NoteCategoryID` = '$note_category'";
                                            $result = mysqli_query($connection, $query1);
                                            while($row = mysqli_fetch_assoc($result)){
                                                $category_name = $row['Name'];
                                            }
                                            echo  $category_name;
                                        ?>
                                    </h6>
                                    <p> <?php echo  $note_description ?> </p>

                                    <button id="<?php if($note_price==0){ echo "download-btn-free";} else{ echo "download-btn-paid";} ?>" name="download" type="<?php if(isset($_SESSION['ID'])){ echo "button";}else{ echo "submit";} ?>" class="btn btn-primary btn-lg" data-toggle="modal"
                                        data-target="#exampleModalScrollable">DOWNLOAD/$<?php echo  $note_price ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- note details right -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="note-details">
                            <ul class="note-full-detail">
                                <li>Institution:<span><?php echo  $institute ?></span></li>
                                <li>Country:<span>
                                        <?php 
                                            $query = "SELECT C.`Name` FROM `countries` AS C
                                            WHERE C.`CountryID` = '$country_id'";
                                            $result = mysqli_query($connection, $query);
                                            while($row = mysqli_fetch_assoc($result)){
                                                $country_name = $row['Name'];
                                                echo  $country_name ;
                                            }
                                        ?>
                                </span></li>
                                <li>Course Name<span><?php echo  $course_name ?></span></li>
                                <li>Course Code:<span><?php echo  $course_code ?></span></li>
                                <li>Professor:<span><?php echo  $professor ?></span></li>
                                <li>Number of Pages:<span><?php echo  $note_pages ?></span></li>
                                <li>Approved Date:<span><?php echo  date("F d Y",strtotime($published_date)) ?></span></li>
                                <li>Rating:<span>
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>100 Reviews
                                    </span>
                                </li>
                                <li>5 Users make this note as inappropriate</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </form>
    </section>
    <!-- end note detail section-->

    <div class="container">
        <hr class="p-0 m-0">
    </div>

    <!-- note-preview section-->
    <section id="note-detail-preview">
        <div class="content-box">
            <div class="container">
                <div class="row">
                    <!-- note review left-->
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="note-preview">
                            <h4>Note Preview</h4>
                            <iframe src="../upload/<?php echo $sellerid; ?>/<?php echo $sellernoteid; ?>/<?php echo $note_preview; ?>"></iframe>
                        </div>
                    </div>

                    <!-- note review right -->
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                        <div id="customer-review">
                            <h4>Customer Reviews</h4>
                            <div class="reviews scroll">
                            <?php
                                $query = "SELECT U.UserID, U.FirstName, U.LastName, UP.ProfilePicture, SR.Comments FROM sellernotesreviews AS SR 
                                            INNER JOIN user AS U ON U.UserID = SR.ReviewedByID
                                            INNER JOIN userprofile AS UP ON UP.UserID = U.UserID
                                                WHERE SR.NoteID = '$sellernoteid' AND SR.IsDeleted = '0'";
                                $select_review = mysqli_query($connection, $query);
                                $total_review = mysqli_num_rows($select_review);
                                
                                if($total_review != 0 ){
                                while($row = mysqli_fetch_assoc($select_review)){

                                
                            ?>
                                <!-- customer review 1 -->
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                        <img src="../upload/<?php echo $row['UserID']; ?>/<?php echo $row['ProfilePicture'] ?>" alt="customer1">
                                    </div>

                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 review-details">
                                        <ul class="customer-review-ul">
                                            <li>
                                                <h6><?php echo $row['FirstName']." ".$row['LastName']; ?></h6>
                                            </li>
                                            <li>
                                                <div class="d-inline-block">
                                                    <div class="rate">
                                                        <input type="radio" id="star5.1" name="rate" value="5" />
                                                        <label for="star5.1" title="text" class="m-0"
                                                            style="padding-bottom: 10px">5 stars</label>
                                                        <input type="radio" id="star4.1" name="rate" value="4" />
                                                        <label for="star4.1" title="text" class="m-0"
                                                            style="padding-bottom: 10px">4 stars</label>
                                                        <input type="radio" id="star3.1" name="rate" value="3" />
                                                        <label for="star3.1" title="text" class="m-0"
                                                            style="padding-bottom: 10px">3 stars</label>
                                                        <input type="radio" id="star2.1" name="rate" value="2" />
                                                        <label for="star2.1" title="text" class="m-0"
                                                            style="padding-bottom: 10px">2 stars</label>
                                                        <input type="radio" id="star1.1" name="rate" value="1" />
                                                        <label for="star1.1" title="text" class="m-0"
                                                            style="padding-bottom: 10px">1 star</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <p><?php echo $row['Comments'] ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <?php
                                }   
                            }
                            else{
                                ?>

                                <div class="row">
                                    <div class="col-md-12 text-center no-reviews" style="color: black;">
                                        <h4>No Review Found.</h4>
                                    </div>
                                </div>
                
                                <?php
                            }
                                ?>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end note-preview section-->

    <!-- thanks Popup box-->
    <!-- Modal -->
    <form method="post/get">
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <!-- top close button -->
                <div class="popup-close-btn">
                    <button type="submit" name="save" class="close text-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="../images/close.png"></span>
                    </button>
                </div>

                <!-- popup box content -->
                <div class="modal-body">
                    <img src="../images/Success-Blue.png">
                    <h2 class="text-center">Thank you for purchasing!</h2>
                    <h5>Dear <b><?php echo $_SESSION['FNAME'] ?></b>,</h5>
                    <p>As this is paid notes - you need to pay to seller Rahil Shah offline. We will send him an email
                        that you want to download this note. He may contact you further process compietion.</p>
                    <p>In case, you have urgency,<br>Please contact us on +9195377345959</p>
                    <p>Once he receives the payment and acknowledge us - selected notes you can see over my downloads
                        tab for download.</p>
                    <p>Have a good day.</p>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- end thanks Popup box-->

    <hr>

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- End Footer -->

    <!-- JavaScript -->
    <!-- JQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <script src="download.js"></script>
</body>

</html>