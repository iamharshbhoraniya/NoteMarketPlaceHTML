<?php include "../includes/db.php";
ob_start();
session_start();

    if(!isset($_SESSION['ID'])){
        ?>
        <script>
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
    <title>Manage Country | Notes Marketplace</title>

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

    <!-- JavaScript -->
    <!-- JQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>

</head>

<body>

    <!-- Navigation -->
    <?php include "includes/header.php"; ?>
    <!-- End Navigation -->

    <!-- Content -->
    <section id="content">
        <div class="container">

            <div class="row heading">
                <div class="col-md-12 p-0">
                    <h3 class="heading-1">Manage Country</h3>
                </div>
            </div>

            <div class="row heading">
                <div class="col-md-6 col-sm-6 p-0">
                    <a class="btn btn-general" href="AddCountry.php">Add Country</a>
                </div>
                <div id="mc" class="col-md-6 col-sm-6 text-right search-1 p-0">
                    <input class="input-search" id="search_input" name="search-input" type="search" placeholder="Search">
                    <button name="search" onclick="showCountryList()" class="btn btn-general">Search</button>
                </div>
            </div>

            <script type="text/javascript">
                function showCountryList(page){
                    let search_input = $("#search_input").val();

                    $.ajax({
                    type: "GET",
                    url: "ajax/ManageCountry_ajax.php",
                    data: {
                        page: page,
                        search_input: search_input
                    },
                    success: function(data){
                        $("#country_list").html(data);
                    }
                });

                }
                $(function() {
                    showCountryList(1);
                });
            </script>

            <div id="country_list"></div>
               
    </section>
    <!-- End Content -->

    <hr class="p-0 m-0">

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- End Footer -->

    
</body>

</html>


<?php  ?>