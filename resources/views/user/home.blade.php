
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
<!--




-->
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

              <li><a href="/" class="active">Home</a></li>
              <li><a href="/about">About Us</a></li>
              <li><a href="/room">Rooms</a></li>
              <li><a href="/contact">Contact Us</a></li>
              <li><a href="/gallery">Gallery</a></li>
<li class="nav" >
              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth


                    <li><a href="/showbooking">My Booking[{{$count}}]</a></li>




                            <x-app-layout>
                            </x-app-layout>

                    @else
                       <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Create An Account</a></li>
                        @endif
                    @endauth
                </div>
            @endif
</li>

            </ul>


            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h6>DREAM VACATION</h6>
            <h2>Find Nearby Places &amp; Things</h2>
          </div>
        </div>

        <div class="col-lg-10 offset-lg-1">
          <ul class="categories">
            <li><a href="/room"><span class="icon"><img src="assets/images/search-icon-01.png" alt="Home"></span> Apartments</a></li>
            <li><a href="/room"><span class="icon"><img src="assets/images/search-icon-02.png" alt="Food"></span> Food &amp; Life</a></li>
            <li><a href="/room"><span class="icon"><img src="assets/images/search-icon-03.png" alt="Vehicle"></span> Cars</a></li>
            <li><a href="/room"><span class="icon"><img src="assets/images/search-icon-04.png" alt="Shopping"></span> Shopping</a></li>
            <li><a href="/room"><span class="icon"><img src="assets/images/search-icon-05.png" alt="Travel"></span> Traveling</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <div class="popular-categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Popular from Dreams</h2>
            <h6>Check Them Out</h6>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-01.png" alt=""></span>
                        Resorts
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-02.png" alt=""></span>
                        Food &amp; Life
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-03.png" alt=""></span>
                        Cars
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-04.png" alt=""></span>
                        Shopping
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-05.png" alt=""></span>
                        Traveling
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9 align-self-center">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>One Of The Most Trending Stuffs Right Now!</h4>
                                <p>Sunshine Paradise Resort<br>Located in Munnar, 34 km from Munnar Tea Museum,provides accommodation with a restaurant, free private parking, an outdoor swimming pool and a fitness centre.A continental breakfast is available daily at the accommodation.

Guests at this Resort will be able to enjoy activities in and around Munnar, like cycling.

The resort also offers a car rental service and a business centre with free WiFi throughout the property.<br>

Mattupetty Dam is 43 km from the Resort, while Anamudi Peak is 48 km away. The nearest airport is Kochi International, 107 km from the accommodation, and the property offers a paid airport shuttle service.</p>

                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/tabs-image-01.jpg" alt="">
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
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Food and Lifestyle category is here</h4>
                                <p>This kind of menu contains a list of dishes available for service in guest rooms around the clock. Prices quoted for dishes in the room service menu card are always higher than prices quoted for the same dishes served in other restaurants of the hotel.</p>

                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/tabs-image-02.jpg" alt="Foods on the table">
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
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Best car rentals for your trips!</h4>
                                <p>Munnar is a beautiful tourist destination in Kerala. You can have an enjoyable time with your family and friends there. You can book a cab and explore its various tourist spots. There are a lot of private and public transportation options by which you can reach Muunar Dreams.

While on a road trip from Munnar, you get to experience the scenic landscapes. </p>

                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/tabs-image-03.jpg" alt="cars in the city">
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
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Shopping List: Images from Unsplash</h4>
                                <p>Munnar has a lot on offer for shopaholic of every kind; all that you need to know is the list of right places to visit. Take a look at the best spots for shopping in Munnar!<br>

Aranya Naturals<br>
Mattupetty Dam Market<br>
Kanan Devan Hills Plantations<br>
Johnson’s Wood Craft<br>
Marakkar Shopping Centre<br>
Munnar Market<br>
Abbas & Co. Tea Merchants<br>
Krishna’s Shopping Mall<br>
Munnar Inn Spices Shopping Mall<br>
Munnar Fruit Market</p>

                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/tabs-image-04.jpg" alt="Shopping Girl">
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
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Information and Safety Tips for Traveling</h4>
                                <p>Munnar is a town in the Western Ghats mountain range in India’s Kerala state. A hill station and former resort for the British Raj elite, it's surrounded by rolling hills dotted with tea plantations established in the late 19th century. Eravikulam National Park, a habitat for the endangered mountain goat Nilgiri tahr, is home to the Lakkam Waterfalls, hiking trails and 2,695m-tall Anamudi Peak.</p>

                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/tabs-image-05.jpg" alt="Traveling Beach">
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




  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">

            </div>

            <p> <a rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank"></a> </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <ul>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">About Us</a></li>

                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Resorts</a></li>

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
                <a href="#">12-59-86-73-25</a>
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
