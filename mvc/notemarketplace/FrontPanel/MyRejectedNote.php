<?php include "../includes/db.php";
ob_start();
session_start();
?>
<?php
    if(!isset($_SESSION['ID'])){
        ?>
        <script>
            location.replace('../FrontPanel/Login.php');
        </script>
        <?php
    }
    $id = $_SESSION['ID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Rejected Notes | Notes Marketplace</title>

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

</head>
<body>
    <!-- Navigation -->
    <?php include "includes/header.php"; ?>
    <!-- End Navigation -->

    <!-- preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Content -->
    <section id="content">
        <form method="POST">
        <div class="container">

            <div class="row heading">
                <div class="col-md-6 col-sm-6 p-0">
                    <h3 class="heading-1">My Rejected Notes</h3>
                </div>

                <div class="col-md-6 col-sm-6 text-right search-1 p-0">
                    <input class="input-search fa" name="search-input" type="text" placeholder="&#xf002; Search">
                    <button name="search" class="btn btn-general">Search</button>
                </div>
            </div>
            <?php
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                    $page =mysqli_real_escape_string($connection,$page);
                    $page = htmlentities($page);
                }
                else{
                    $page = 1;
                }
                $num_per_page = 5;
                $start_from = ($page-1) * $num_per_page;
                $query = "SELECT SN.`Title`, NC.`Name`, SN.`AdminRemarks` FROM `notecategories` AS NC INNER JOIN `sellernotes` AS SN ON SN.`Category` = NC.`NoteCategoryID` WHERE SN.`Status` = '10' and SN.`SellerID` =  '$id'";
                if (isset($_POST['search'])) {
                    $search_result = $_POST['search-input'];
                    $query .= " AND (SN.`Title` LIKE '%$search_result%' OR NC.`Name` LIKE '%$search_result%' 
                    OR SN.`AdminRemarks` LIKE '%$search_result%')";
                }
                $select_query = mysqli_query($connection, $query);
                $total_records = mysqli_num_rows($select_query);
                $total_pages = ceil($total_records / $num_per_page);
                $i=1;
                $k = $num_per_page + $start_from;
                $srno = 1;
                if($total_records != 0){
                
            ?>

            <div class="row">
                <div class="table-top table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">Sr No.</th>
                                <th scope="col">Note Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Remarks</th>
                                <th scope="col">Clone</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        while($row = mysqli_fetch_array($select_query)){
                            if($start_from<$i){
                        ?>
                            <tr>
                                <td class="text-center" scope="row"><?php echo $srno++;?></td>
                                <td class="td-blue"><?php echo $row['Title']; ?></td>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['AdminRemarks']; ?></td>
                                <td class="td-blue">Clone</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="../images/dots.png" alt="dot-image">
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Download Notes</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                }
                                $i++;
                                if($i>$k){
                                    break;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-12 num">
                    <ul class="pagination justify-content-center">
                    <li class="<?php if($page == 1){ echo 'disabled'; }?> page-item">
                            <a class="page-link" href="MyRejectedNote.php?page=<?php echo $page-1; ?>" aria-label="Previous">
                                <img src="../images/left-arrow.png" alt="left-arrow">
                            </a>
                        </li>
                        <?php 
                            for($i=1;$i<=$total_pages;$i++){
                        ?>
                        <li class="page-item">
                            <a class="page-link <?php if($page == $i) { echo 'active'; }?>" href="MyDownload.php?page=<?php echo $i ; ?>"><?php echo $i ;?></a>
                        </li>
                    
                        <?php 
                            }
                        ?>
                        <li class="<?php if($page == $total_pages){ echo 'disabled'; }?> page-item">
                            <a class="page-link" href="MyRejectedNote.php?page=<?php echo $page+1; ?>" aria-label="Next">
                                <img src="../images/right-arrow.png" alt="right-arrow">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php 
                }
                else{
                    ?>

                    <div class="row">
                        <div class="col-md-12 text-center no-records">
                            <h4>No Records Found.</h4>
                        </div>
                    </div>

                    <?php
                }
            ?>
        </div>
        </form>
    </section>

    <hr>

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- End Footer -->

    <!-- JavaScript -->
    <!-- JQuery -->
    <script src="js/jquery.js"></script>

    <!-- Popper Js -->
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>

</html>