
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>DREAM VACATION</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">

            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="/">Home</a></li>
              <li><a href="/about" class="active">About Us</a></li>
              <li><a href="/room">Rooms</a></li>
              <li><a href="/contact">Contact Us</a></li>

            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Dreams with Simple Tabs</h6>
            <h2>We have a wide range of business categories for you</h2>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="category-post">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">





              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{url('/addrating')}}" method="POST">

            {{csrf_field()}}
        {{method_field('put')}}
            <input type="hidden" name="room_id" value="">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rate this Resort</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="rating-css">
    <div class="star-icon">
        <input type="radio" value="1" name="room_rating" checked id="rating1">
        <label for="rating1" class="fa fa-star"></label>
        <input type="radio" value="2" name="room_rating" id="rating2">
        <label for="rating2" class="fa fa-star"></label>
        <input type="radio" value="3" name="room_rating" id="rating3">
        <label for="rating3" class="fa fa-star"></label>
        <input type="radio" value="4" name="room_rating" id="rating4">
        <label for="rating4" class="fa fa-star"></label>
        <input type="radio" value="5" name="room_rating" id="rating5">
        <label for="rating5" class="fa fa-star"></label>
    </div>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
   </div>
 </div>
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   Rate this Resort</button>



                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                <div class="col-lg-6">
                                 <div class="col-lg-6">

                                 </div>
                                </div>
                              </div>
                            </div>
                            <a href="#"><img src="assets/images/v1.jpg" alt=""></a>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Dream Vacation Resorts</h4>
                                    <a class="btn btn-primary" href="/login">Book Now</a>
                                    <p>  Upgrade your experience with Dream's Special Offers
Enjoy premium benefits such as special meal experiences, attraction tickets, and room upgrades at amazing prices.<br>Free WIFI coonection<br>Swimming Pool<br>Trucking <br>
 We also embrace innovation to meet ever-changing guest needs and continue to celebrate our rich culinary legacy, setting trends but never compromising on quality and authenticity. An international company
                                        with a growing footprint, we take a sustainable and responsible approach, caring for local communities and protecting the environment in the destinations where we operate. <a rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank"></a> You may contact us for more information. Thank you.<br>This resort is located at a distance of 98 km from Aluva Railway Station, 99 km from Cochin International Airport and 14 km from KSRTC Depot Munnar. Travellers liked this property because of its good location. </p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Our Services</h4>
                                    </div>
                                    <span class="list-item">24 Hour Restaurants &amp; 24 hours room service<br>Free Cancellation<br>24-hour Concierge service &amp; WIFI coverage<br>Large bedrooms &amp; Stay First, Pay After!</span>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>Sanitized Environment</h4>
                                    <p>All rooms & washrooms to be thoroughly disinfected before each check-in, with special emphasis on high-frequency touch points.
                                        Freshly-prepared bleach solution (1% sodium hypochlorite) or phenolic disinfectants to be used to clean furniture, washbasins, and toilets.
                                        Room linen to be changed once in two days or ONLY on request.
                                        Sanitization of common areas (reception, elevator, lounge) to be done every 6 hours with phenolic disinfectant.
                                        Sanitisers to be provided for guests in all common areas.
                                        Face masks and gloves to be made available to guests on request.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-02.png" alt=""><h4>Food &amp; Life</h4></span>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Check Our Listings</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">


                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">

                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>General Info</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                    <span class="list-item">* Listing should have all the proper documents before being checked in.
                                    <br>** Listing will be checked by our team members.
                                    <br>*** After being sold, it should imediately be removed from our site and properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-03.png" alt=""><h4>Cars</h4></span>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Check Our Listings</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Description about cars</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Total Listings</h4>
                                    </div>
                                    <span class="list-item">This Week: 800 Listings &amp; 400 Sales<br>This Month: 1,600 Listings &amp; 1,200 Sales<br>This Year: 14,000 Listings &amp; 12,000 Sales</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>General Info. about cars</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                    <span class="list-item">* Listing should have all the proper documents before being checked in.
                                    <br>** Listing will be checked by our team members.
                                    <br>*** After being sold, it should imediately be removed from our site and properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-04.png" alt=""><h4>Shopping</h4></span>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Check Our Listings</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Description about Shopping</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Total Listings</h4>
                                    </div>
                                    <span class="list-item">This Week: 150 Listings &amp; 140 Sales<br>This Month: 1,500 Listings &amp; 1,100 Sales<br>This Year: 15,000 Listings &amp; 14,000 Sales</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>General Info. for Shopping</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                    <span class="list-item">* Listing should have all the proper documents before being checked in.
                                    <br>** Listing will be checked by our team members.
                                    <br>*** After being sold, it should imediately be removed from our site and properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="top-content">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="top-icon">
                                      <span class="icon"><img src="assets/images/search-icon-05.png" alt=""><h4>Traveling</h4></span>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="main-white-button">
                                      <a href="#"><i class="fa fa-plus"></i> Check Our Listings</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="description">
                                <div class="row">
                                  <div class="col-lg-9">
                                    <h4>Description of Traveling</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="text-icon">
                                      <h4><img src="assets/images/listing-icon-heading.png" alt=""> Total Listings</h4>
                                    </div>
                                    <span class="list-item">This Week: 200 Listings &amp; 120 Sales<br>This Month: 1,400 Listings &amp; 900 Sales<br>This Year: 14,000 Listings &amp; 12,000 Sales</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="general-info">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h4>General Info. about Traveling</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ak incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidat doerski. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                    <span class="list-item">* Listing should have all the proper documents before being checked in.
                                    <br>** Listing will be checked by our team members.
                                    <br>*** After being sold, it should imediately be removed from our site and properly monitored.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.722357678228!2d77.17208261446353!3d10.039754275103986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b079fc7ab6279c3%3A0x4a077acf57e82ae!2sMunnar%20Dreams%20Home%20Stay!5e0!3m2!1sen!2sin!4v1646327018323!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">

            </div>

          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">Rooms</a></li>
                  <li><a href="#">About us</a></li>
                  </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Gallery</a></li>
                 </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Contact Us</h4>
            <p>27th Street of New Town, Digital Villa,Munnar</p>
            <div class="row">
              <div class="col-lg-6">
                <a href="#">010-020-0340</a>
              </div>
              <div class="col-lg-6">
                <a href="#">090-080-0760</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>




  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>
