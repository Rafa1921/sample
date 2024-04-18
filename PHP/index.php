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
                    MOSA <span style="font-family: Montserrat; font-weight: 500">Tire Supply</span>
                </a>
                <!-- Search form -->
            </div>
            <!-- Left elements -->

            <!-- Center elements -->
            <div class="btn-group border">
                <a href="#" class="btn btn-nav-active" id="dashBtn" aria-current="page">Dashboard</a>
                <a href="orders.php" class="btn btn-nav" id="orderBtn">Orders</a>
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


                    <div class="category"  style="font-family: Montserrat;">
                        <p>Find Your MOSA Wheels</p>
                    </div>


                    <!-- Main Wheel Items - START -->

                    <div class="row">
                        <div class="dash-tires">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="resources/images/tire1.png" class="item-img" alt="...">
                                </div>
                                <div class="item-desc col-md-8">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h2 class="item-title mt-1">MOSA ULTRA II</h2>
                                        </div>
                                        <div class="col-md-5">
                                            <p href="#" class="item-price" id="orderBtn">PHP 25K</p>
                                        </div>
                                    </div>

                                    <span class="item-cat">SEDANS</span> <span class="item-cat">TRUCKS</span>
                                    <p class="item-text"> MOSA ULTRA II is our Y-rated ultra-high performance street tire designed to re-define grip and dominate U.S. roads. Available in today’s popular bigger sizes for a bigger dose of performance on the street.</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn item-btn" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-bs-item="1">PURCHASE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="row">
                        <div class="dash-tires">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="resources/images/tire2.png" class="item-img" alt="...">
                                </div>
                                <div class="item-desc col-md-8">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h2 class="item-title mt-1">MOSA SPEEDSTER X</h2>
                                        </div>
                                        <div class="col-md-5">
                                            <p href="#" class="item-price" id="orderBtn">PHP 42.5K</p>
                                        </div>
                                    </div>

                                    <span class="item-cat">SUPERCARS</span> <span class="item-cat">COUPE</span>
                                    <p class="item-text">Built specifically for on-track racing with competitive performance and fast lap times, the MOSA SPEEDSTER X is the latest addition to MOSA’s decades-long legacy of UHP and motorsports tires.</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn item-btn" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-bs-item="2">PURCHASE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>



                    <div class="row">
                        <div class="dash-tires">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="resources/images/tire3.png" class="item-img" alt="...">
                                </div>
                                <div class="item-desc col-md-8">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h2 class="item-title mt-1">MOSA CLASSIC S2</h2>
                                        </div>
                                        <div class="col-md-5">
                                            <p href="#" class="item-price">PHP 19K</p>
                                        </div>
                                    </div>

                                    <span class="item-cat">SEDANS</span> <span class="item-cat">MINIVANS</span> <span class="item-cat">TRUCKS</span>
                                    <p class="item-text"> The OE performance replacement. With a new compound and construction, the MOSA CLASSIC S2 is built to provide drivers of high-performance sedans, CUVs and SUVs with confident performance and handling on wet or dry roads.</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn item-btn" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-bs-item="3">PURCHASE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Main Wheel Items - END -->



                    <!-- Carousel Rim Items - START -->

                    <div class="container text-center my-3">
                    <div class="category"  style="font-family: Montserrat;">
                        <p>We Have The Right Rims For You</p>
                    </div>

                        <div class="row mx-auto my-auto justify-content-center">
                            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img src="resources/images/rim1.png" class="card-img-top" alt="Fissure in Sandstone" />
                                                <div class="card-body">
                                                    <h5 class="card-title" style="font-weight: 500;">Stealth Pro-4</h5>
                                                    <p class="card-text">
                                                        Unleash the power of performance with our Stealth Pro-4 wheel rims.
                                                    </p>
                                                    <button class="btn carousel-item-btn" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-bs-item="4"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img src="resources/images/rim2.png" class="card-img-top" alt="Fissure in Sandstone" />
                                                <div class="card-body">
                                                    <h5 class="card-title" style="font-weight: 500;">Retro Cruiser Wood-15</h5>
                                                    <p class="card-text">
                                                        Channel a nostalgic vibe with our Retro Cruiser Wood-15 vintage wheel rims.
                                                    </p>
                                                    <button class="btn carousel-item-btn" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-bs-item="5"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img src="resources/images/rim3.png" class="card-img-top" alt="Fissure in Sandstone" />
                                                <div class="card-body">
                                                    <h5 class="card-title" style="font-weight: 500;">Carbonite XRS-19</h5>
                                                    <p class="card-text">
                                                        Embrace a futuristic aesthetic with our Carbonite XRS-19 hyper-sport wheel rims.
                                                    </p>
                                                    <button class="btn carousel-item-btn" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-bs-item="6"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img src="resources/images/rim4.png" class="card-img-top" alt="Fissure in Sandstone" />
                                                <div class="card-body">
                                                    <h5 class="card-title" style="font-weight: 500;">Velocity X1</h5>
                                                    <p class="card-text">
                                                        Elevate your vehicle's style with our Velocity X1 alloy wheel rims.
                                                    </p>
                                                    <button class="btn carousel-item-btn" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-bs-item="7"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img src="resources/images/rim5.png" class="card-img-top" alt="Fissure in Sandstone" />
                                                <div class="card-body">
                                                    <h5 class="card-title" style="font-weight: 500;">Trail Blazer XT</h5>
                                                    <p class="card-text">
                                                        Conquer any terrain with our Trail Blazer XT off-road wheel rims.
                                                    </p>
                                                    <button class="btn carousel-item-btn" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-bs-item="8"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img src="resources/images/rim6.png" class="card-img-top" alt="Fissure in Sandstone" />
                                                <div class="card-body">
                                                    <h5 class="card-title" style="font-weight: 500;">Elegance Chrome-20</h5>
                                                    <p class="card-text">
                                                        Make a statement on the road with our Elegance Chrome-20 luxury cruiser wheel rims.
                                                    </p>
                                                    <button class="btn carousel-item-btn" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-bs-item="9"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                            </div>

                            <!-- Carousel Rim Items - END -->



                            <!-- Purchase Modal - START -->

                            <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body order-body">


                                            <div class="row">
                                                <div class="dash-tires">
                                                    <div class="row g-0">
                                                        <h2 class="item-title mt-1" id="itemTitle">MOSA ULTRA II</h2>

                                                        <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-4">

                                                                <img src="resources/images/tire1.png" class="item-img" alt="..." id="itemImg">
                                                            </div>
                                                            <div class="col-md-3"></div>
                                                        </div>




                                                        <!--    <p href="#" class="item-price" id="orderBtn" onclick="orderBtnClass()">PHP 25K</p> -->



                                                        <p class="item-text" id="itemDesc"> MOSA ULTRA II is our Y-rated ultra-high performance street tire designed to re-define grip and dominate U.S. roads. Available in today’s popular bigger sizes for a bigger dose of performance on the street.</p>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-md-4" style="text-align: left;">
                                                    <p style="font-family: 'Roboto', sans-serif; font-size: 20px; font-weight: bold">Pricing</p>
                                                </div>
                                            </div>

                                            <form action="orders.php" method="post">
                                                <div class="row order-price">
                                                    <div class="col-md-4">
                                                        <p id="itemPrice">PHP 25,000</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-4 qty">
                                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row">
                                                                    <div class="col-md-7 qty">
                                                                        <span style="align-content: end;">Qty. </span>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <input type="number" class="form-control" name="ordQty" id="itemQty" value=1 onchange="calcTotal(this.value)">
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4" style="text-align: left;">
                                                        <p style="font-family: 'Roboto', sans-serif; font-size: 20px; font-weight: bold">Payment Method</p>
                                                    </div>
                                                </div>


                                                <div class="row payment-methods">
                                                    <div class="col-md-5">
                                                        <div class="form-check payment-method">
                                                            <input class="form-check-input payment" type="radio" name="ordPayment" id="paymentRadio1" value="Cash">
                                                            <label class="form-check-label" for="paymentRadio1">
                                                                <span class="radio-spacer"></span>Cash
                                                            </label>
                                                        </div>
                                                        <div class="form-check payment-method">
                                                            <input class="form-check-input payment" type="radio" name="ordPayment" id="paymentRadio2" value="Visa/Mastercard">
                                                            <label class="form-check-label" for="paymentRadio2">
                                                                <span class="radio-spacer"></span>Visa/Mastercard
                                                            </label>
                                                        </div>
                                                        <div class="form-check payment-method">
                                                            <input class="form-check-input payment" type="radio" name="ordPayment" id="paymentRadio3" value="GCash">
                                                            <label class="form-check-label" for="paymentRadio3">
                                                                <span class="radio-spacer"></span>GCash
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <br><br>
                                                <div class="row customer-details">
                                                    <div class="col-md-4" style="text-align: left;">
                                                        <p style="font-family: 'Roboto', sans-serif; font-size: 20px; font-weight: bold">Customer Details</p>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <input type="text" class="form-control" name="ordFname" id="customer-fname" placeholder="Firstname">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="text" class="form-control" name="ordLname" id="customer-lname" placeholder="Lastname">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <input type="text" class="form-control" name="ordPhone" id="customer-phone" placeholder="09161234567">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="mb-3">
                                                    <textarea class="form-control" name="ordAddress" id="customer-address" placeholder="Address"></textarea>
                                                </div>


                                                <input type="hidden" name="ordTitle" id="hiddenTitle">
                                                <input type="hidden" name="ordPrice" id="hiddenPrice">
                                                <input type="hidden" name="ordImg" id="hiddenImg">
                                                <input type="hidden" name="ordTotal" id="hiddenTotal">
                                                <input type="hidden" name="ordTracking" id="hiddenTracking">
                                                <input type="hidden" name="ordDate" id="hiddenDate">
                                                <input type="hidden" name="ordDelivery" id="hiddenDelivery">
                                                <input type="hidden" name="ordNum" id="hiddenOrd">
                                        </div>



                                        <div class="modal-footer">
                                            <p id="totalPrice" class="order-total"> Total: &ensp; PHP 25,000</p>
                                            <button type="submit" name="ordSubmit" class="btn order-btn">PLACE ORDER</button>
                                        </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <!-- Purchase Modal - END -->
                    </div>
                </div>

            </div>
            <div class="col-1"></div>
        </div>
    </div>
    </div>


</body>

<script>
    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })

    var dash = document.getElementById("dashBtn");
    var order = document.getElementById("orderBtn");

    $(document).ready(function() {
        dash.click();
        $('input[name=item-qty]').val('1');
    });

    function dashBtnClass() {
        dash.classList.toggle("btn-nav-active");
        order.classList.remove("btn-nav-active");
    }

    function orderBtnClass() {
        dash.classList.remove("btn-nav-active");
        order.classList.toggle("btn-nav-active");
    }

    const item_names = ["MOSA Ultra II", "MOSA Speedster X", "MOSA Classic S2", "Stealth Pro-4", "Retro Cruiser Wood-15", "Carbonite XRS-19", "Velocity X1", "Trail Blazer XT", "Elegance Chrome-20"]
    const item_descriptions = ["MOSA ULTRA II is our Y-rated ultra-high performance street tire designed to re-define grip and dominate U.S. roads. Available in today’s popular bigger sizes for a bigger dose of performance on the street.",
        "Built specifically for on-track racing with competitive performance and fast lap times, the MOSA SPEEDSTER X is the latest addition to MOSA’s decades-long legacy of UHP and motorsports tires.",
        "The OE performance replacement. With a new compound and construction, the MOSA CLASSIC S2 is built to provide drivers of high-performance sedans, CUVs and SUVs with confident performance and handling on wet or dry roads.",
        "Unleash the power of performance with our Stealth Pro-4 wheel rims. The matte black finish exudes an aggressive and sporty vibe, making these rims perfect for enthusiasts seeking a bold look. The Pro-4 features a cutting-edge four-split spoke design, providing enhanced aerodynamics and heat dissipation. Transform your vehicle into a true performance machine with these eye-catching rims.",
        "Channel a nostalgic vibe with our Retro Cruiser Wood-15 vintage wheel rims. The classic wood grain finish brings a touch of timeless elegance to your vehicle, reminiscent of vintage automobiles. The fifteen-spoke design maintains a perfect balance between retro aesthetics and modern performance. Revitalize your ride with the Retro Cruiser Wood-15 and cruise in style with a nod to the past.",
        "Embrace a futuristic aesthetic with our Carbonite XRS-19 hyper-sport wheel rims. These rims feature a unique carbon fiber-inspired pattern that adds a touch of high-tech flair to your vehicle. The ten-spoke design enhances both style and performance, making the Carbonite XRS-19 a perfect choice for enthusiasts seeking a modern and dynamic look. Elevate your ride to the next level with these cutting-edge wheel rims.",
        "Elevate your vehicle's style with our Velocity X1 alloy wheel rims. Crafted from high-quality aluminum alloy, these rims boast a sleek silver finish that adds a touch of sophistication to any car. The ten-spoke design not only enhances aesthetics but also ensures optimal performance and durability. Upgrade your ride with the Velocity X1 and experience a perfect blend of style and substance.",
        "Conquer any terrain with our Trail Blazer XT off-road wheel rims. Built for durability and performance, these machined aluminum rims are designed to withstand the toughest off-road adventures. The bold, eight-spoke design provides a rugged appearance while maintaining strength and stability. Upgrade your off-road experience with the Trail Blazer XT and tackle the trails with confidence.",
        "Make a statement on the road with our Elegance Chrome-20 luxury cruiser wheel rims. The brilliant chrome finish radiates opulence, elevating the appearance of any car to a new level of elegance. The intricate, twenty-spoke design not only captures attention but also ensures a smooth and comfortable ride. Enhance your vehicle's aesthetic appeal and cruise in style with the Elegance Chrome-20."
    ]
    const item_images = ["tire1.png", "tire2.png", "tire3.png", "rim1.png", "rim2.png", "rim3.png", "rim4.png", "rim5.png", "rim6.png"]
    const item_prices = [25000, 42500, 19000, 17000, 21000, 25000, 24000, 15000, 30000]



    const purchaseModal = document.getElementById('purchaseModal')
    if (purchaseModal) {
        purchaseModal.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            const button = event.relatedTarget
            // Extract info from data-bs-* attributes
            const itemNumber = parseInt(button.getAttribute('data-bs-item')) - 1
            /* 
                        alert(itemNumber) */
            // If necessary, you could initiate an Ajax request here
            // and then do the updating in a callback.

            // Update the modal's content.
            const itemTitle = document.getElementById('itemTitle')
            const itemDesc = document.getElementById('itemDesc')
            const itemImg = document.getElementById('itemImg')
            const itemQty = document.getElementById('itemQty')
            const itemPrice = document.getElementById('itemPrice')
            const totalPrice = document.getElementById('totalPrice')


            const ordTitle = document.getElementById('hiddenTitle')
            const ordPrice = document.getElementById('hiddenPrice')
            const ordImg = document.getElementById('hiddenImg')
            const ordPayment = document.getElementById('paymentRadio1')
            const ordTracking = document.getElementById('hiddenTracking')
            const ordDate = document.getElementById('hiddenDate')
            const ordDelivery = document.getElementById('hiddenDelivery')
            const ordNum = document.getElementById('hiddenOrd')
            const currentDate = new Date()
            const currentTime = currentDate.getHours()+":"+currentDate.getMinutes()+":"+ currentDate.getSeconds();

            const itemName = purchaseModal.querySelector('.modal-title')

            const modalBodyInput = purchaseModal.querySelector('.modal-body input')

            itemTitle.innerHTML = item_names[itemNumber]
            ordTitle.value = item_names[itemNumber]

            itemDesc.innerHTML = item_descriptions[itemNumber]
            itemQty.value = 1
            ordPayment.checked = true

            itemPrice.innerHTML = "PHP " + item_prices[itemNumber]
            totalPrice.innerHTML = "Total:  &ensp; PHP " + item_prices[itemNumber]
            ordPrice.value = item_prices[itemNumber]

            itemImg.src = "resources/images/" + item_images[itemNumber]
            ordImg.value = item_images[itemNumber]

            ordNum.value = "ORD" + Math.floor((Math.random() * 100000000) + 1).toString()
            ordTracking.value = generateTrackingNo(5)
            ordDate.value = new Date().toLocaleDateString() + " " + currentTime
            
        })
    }

    function calcTotal(qty) {

        const itemPrice = parseInt(document.getElementById('itemPrice').innerHTML.split(" ")[1])
        const totalPrice = document.getElementById('totalPrice')
        const ordTotal = document.getElementById('hiddenTotal')
        const calculated = itemPrice * parseInt(qty)

        totalPrice.innerHTML = "Total:  &ensp; PHP " + calculated
        ordTotal.value = calculated
    }


    function generateTrackingNo(length) {
        let result = '';
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        const charactersLength = characters.length;
        const numbers = Math.floor((Math.random() * 100000000) + 1);

        let counter = 0;
        while (counter < length) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
            counter += 1;
        }
        return "TRCKMOSA" + result.toUpperCase() + numbers.toString();
    }
</script>

</html>