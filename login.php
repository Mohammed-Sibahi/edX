<?

include_once 'header.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>edX Log In</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <section class="signup-form">
                <div class="card card-2">
                    <div class="card-heading"></div>
                    <div class="card-body">
                        <h2 class="title">Log In Form</h2>

                        <form method="POST" action="includes/login.inc.php">

                            <!--full name-->
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Username / Email..." name="uid">
                            </div>

                            <!--password-->
                            <div class="input-group">
                                <input class="input--style-2" type="password" placeholder="Password..." name="pwd">
                            </div>


                            <div class="p-t-30">
                                <button class="btn btn--radius btn--green" name="submit" type="submit">Log In</button>
                            </div>
                        </form>
                    </div>
                </div>

                <?php

if (isset($_GET["error"])) {

    if ($_GET["error"] == "emptyinput") {

        echo "<p>Fill in all the blanks</p>";
    }
    else if ($_GET["error"] == "wronglogin") {

        echo "<p>Incorrect login information!</p>";
    }
}

?>
            </section>

        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->

<?

include_once 'footer.php';

?>