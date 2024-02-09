<?php include("header.php")?>
        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Booking</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Booking</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Book Us Start -->
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-0">
                    <div class="col-1">
                        <img src="img/background-site.jpg" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                    <div class="col-10">
                        <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                            <div class="text-center">
                                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Book Us</small>
                                <h1 class="display-5 mb-5">Where you want Our Services</h1>
                            </div>
                            <div class="row g-4 form">
                                <div class="col-lg-4 col-md-6">
                                   <input type="text" class="form-control border-primary p-2" placeholder="Enter your Name">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                   <textarea class="form-control border-primary p-2" placeholder="Enter your Address"></textarea>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control border-primary p-2" placeholder="Enter your State">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                   <input type="text" class="form-control border-primary p-2" placeholder="Enter your country">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Select Event</option>
                                        <option value="1">Professional event</option>
                                        <option value="1">Family event</option>
                                        <option value="2">Big Event</option>
                                        <option value="3">Small Event</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Food type</option>
                                        <option value="1">Gujarati Food</option>
                                        <option value="2">Panjabi Food</option>
                                        <option value="3">Rajasthani Food</option>
                                        <option value="4">Italian Food</option>
                                        <option value="5">Chinese Food</option>
                                        <option value="6">Any fastfood</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="mobile" class="form-control border-primary p-2" placeholder="Your Contact No.">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="date" class="form-control border-primary p-2" placeholder="Select Date">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="email" class="form-control border-primary p-2" placeholder="Enter Your Email">
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <img src="img/background-site.jpg" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Us End -->

        <?php include("footer.php") ?>