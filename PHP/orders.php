<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <title>Document</title>
</head>

<body>

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container-fluid justify-content-between">
            <!-- Left elements -->
            <div class="d-flex">
                <!-- Brand -->
                <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
                    <img src="resources/images/logo.png" height="20" alt="MDB Logo" loading="lazy" style="margin-top: 2px;" />
                </a>

                <a class="navbar-brand brand-text" style="font-family: Montserrat;" href="#">
                    MOSO <span style="font-family: Montserrat; font-weight: 500">Tire Supply</span>
                </a>
                <!-- Search form -->
            </div>
            <!-- Left elements -->

            <!-- Center elements -->
            <div class="btn-group border">
                <a href="index.php" class="btn btn-nav" id="dashBtn" aria-current="page">Dashboard</a>
                <a href="#" class="btn btn-nav-active" id="orderBtn">Orders</a>
            </div>
            <!-- Center elements -->

            <!-- Right elements -->
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-3 me-lg-1">

                    <a class="nav-link d-sm-flex align-items-sm-center" href="#">
                        <strong class="d-none d-sm-block ms-1">Welcome <span style="color: #1b5240;">John</span>! &ensp;</strong>
                        <img src="resources/images/boy.png" class="rounded-circle" height="22" alt="Black and White Portrait of a Man" loading="lazy" />

                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="#">
                        <span><i class="fa fa-sign-out"></i></span>
                    </a>
                </li>
            </ul>
            <!-- Right elements -->
        </div>
    </nav>
    <!-- Navbar -->

    <div class="main-header">

    </div>


    <div class="main-content">
        <div class="container ">
            <div class="row">
                <div class="col-1"></div>
                <div class="content-body col-10">

                    <?php

                    if (isset($_POST["ordSubmit"])) {
                        $ordTitle = $_POST["ordTitle"];
                        $ordPrice = $_POST["ordPrice"];
                        $ordQty = $_POST["ordQty"];
                        $ordImg = $_POST["ordImg"];
                        $ordSubtotal = $_POST["ordTotal"];
                        $ordTotal = $_POST["ordTotal"] + 120;
                        $ordPayment = $_POST["ordPayment"];

                        $ordFname = $_POST["ordFname"];
                        $ordLname = $_POST["ordLname"];
                        $ordPhone = $_POST["ordPhone"];
                        $ordAddress = $_POST["ordAddress"];

                        $ordTracking = $_POST["ordTracking"];
                        $ordDate = $_POST["ordDate"];
                        $ordNum = $_POST["ordNum"];


                        echo "<p style='font-size: 20px'>Thank you for purchasing! Order <b>#{$ordNum}</b> was placed successfully!</p>
                        <br>
                        <p style='font-size: 25px; font-weight: bolder'>Order Details</p>
    
                        <div class='dash-tires row'>
    
                            <div class='col-md-4'>
                                <h2 class='item-title' style='text-align: center'>{$ordTitle}</h2>
                                <img src='resources/images/{$ordImg}' class='item-img' alt='...'>
                            </div>
                            <div class='col-md-8'>
    
                                <p style='font-size: 15px; font-weight: bolder'>Customer Information</p>
                                <table class='table table-borderless'>
                                    <tr>
                                        <td>
                                            <p><b>{$ordFname} {$ordLname}</b></p>
                                        </td>
                                        <td>
                                            <p>{$ordPhone}</p>
                                        </td>
                                    </tr>
    
                                    <tr>
                                        <td>
                                            <p>{$ordAddress}</p>
                                        </td>
                                        <td></td>
                                    </tr>
                                </table>
    
    
                                <p style='font-size: 15px; font-weight: bolder'>Pricing Information</p>
                                <table class='table table-borderless'>
                                    <tr>
                                        <td><b>Item Name</b></td>
                                        <td><b>{$ordTitle}</b></td>
                                    </tr>
    
                                    <tr>
                                        <td>Price</td>
                                        <td>PHP {$ordPrice}</td>
                                    </tr>
    
                                    <tr>
                                        <td>Quantity</td>
                                        <td>{$ordQty}</td>
                                    </tr>
    
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>PHP {$ordSubtotal}</td>
                                    </tr>
    
    
                                    <tr>
                                        <td>Shipping</td>
                                        <td>PHP 120</td>
                                    </tr>
    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><b>Total</b></td>
                                        <td><b>PHP {$ordTotal}</b></td>
                                    </tr>
                                </table>
    
    
                                <table class='table table-borderless'>
                                    <tr>
                                        <td>
                                            <p>Paid by</p>
                                        </td>
                                        <td>
                                            <p>{$ordPayment}</p>
                                        </td>
                                    </tr>
    
                                    <tr>
                                        <td>
                                            <p>Tracking Number</p>
                                        </td>
                                        <td>
                                            <p>{$ordTracking}</p>
                                        </td>
                                    </tr>
    
                                    <tr>
                                        <td>
                                            <p>Order Placed On</p>
                                        </td>
                                        <td>
                                            <p>{$ordDate}</p>
                                        </td>
                                    </tr>
                                </table>
    
                            </div>
                        </div>";
                    } else {
                        echo "<div class='row'>
                        <div class='col-md-1'></div>
                        <div class='col-md-10' style='text-align: center;'>
                            <p>No orders available. Please go back to the <b>Dashboard</b> to purchase an item.</p>
                        </div>
                        <div class='col-md-1'></div>
                    </div>";
                    }
                    ?>
                </div>

            </div>
            <div class="col-1"></div>
        </div>
    </div>
    </div>


</body>

</html>