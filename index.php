<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/custom.css">
</head>

<body>

    <div class="container mt-5 pt-4">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-6 col-lg-5 col-xl-5">
                <!-- require list -->
                <?php
                require "./templates/list.php";
                ?>
            </div>
            <div class="col-11 col-sm-10 col-md-6 col-lg-7 col-xl-7">
                <div class="jumbotron bg-warning text-white pt-4 pb-3 mt-4 mt-sm-4 mt-md-0 mt-lg-0 mt-xl-0">
                    <h4>Create Item</h4>
                </div>
                <!-- require form -->
                <?php
                require "./templates/formInsert.php";
                ?>
            </div>

        </div>
    </div>


    <script src="./js/jquery.js"></script>
    <script src="./js/custom.js"></script>
</body>

</html>