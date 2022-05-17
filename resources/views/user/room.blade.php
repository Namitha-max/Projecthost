
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

            <!-- ***** Logo Start ***** -->

            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About Us</a></li>
              <li><a href="/room" class="active">Rooms</a></li>
              <li><a href="/contact">Contact Us</a></li>
              <li><a href="/gallery">Gallery</a></li>
              <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 10px;">
@csrf
<fieldset>
<input type="text" placeholder="Search.." name="search">
    <input type="submit" value="Search" class="btn btn-success">


                      <select name="price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                          <option selected>Price Range</option>
                          <option value="₹1000 - ₹2500">₹1000 - ₹2500</option>
                          <option value="₹2500 - ₹3000">₹2500 - ₹3000</option>
                          <option value="₹1000 - ₹3000">₹1000 - ₹3000</option>

                      </select>
                  </fieldset>
              </div>
              </form>

            </ul>
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
            <h6>Check Out Our Rooms</h6>
            <h2>Book Your Dreamy Resort</h2>
            <h9>Sign in then BOOK YOUR ROOMS in your dreams account save up to 50% ,and also you have a friend there...<br> Dhamaka!!!</h9>
         </div>
        </div>
</div>
</div>
</div>
<div class="listing-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-01.png" alt=""></span>
                        Apartments
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
                    <div class="last-thumb">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-04.png" alt=""></span>
                        Traveling
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                  <!-- first category listing of items -->
                    <li class="active">
                        @foreach($data as $rooms)
                      <div>
                       <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="/roomimage/{{$rooms->image}}" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/booking"><i class="fa fa-eye"></i> Book Now</a>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>{{$rooms->title}}</h4></a>
                                      <div class="rating">
                                          <p>Ratings</p>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star-o"></i>
                                          <i class="fa fa-star-o"></i>
                                      <h6>By:Dream Vacation</h6>
                                      <span class="price"><div class="icon"><img src="/roomimage/{{$rooms->image}}" alt=""></div> ₹{{$rooms->price}} / Day included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                     <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> {{$rooms->description}}<br><img src="assets/images/listing-icon-03.png" alt=""> 2 Bathrooms</span><br>
                                     <span class="info"><alt=""> Breakfast included<br>
                                     <a class="btn btn-primary" href="/view1">view more</a>
                                    </div>
                                  </div>
                                </div>
                                  @endforeach



                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/booking"><i class="fa fa-eye"></i> Book Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Green Vally Resort</h4></a>
                                      <div class="rating">
                                          <p>Ratings</p>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star-o"></i>
                                          <i class="fa fa-star-o"></i>
                                          <i class="fa fa-star-o"></i>
                                      <h6>by: Dream Vacation</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-01.jpg" alt=""></div>  ₹3000 /Day included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span><br>
                                      <span class="info"><alt=""> Breakfast included<br>
                                      <a class="btn btn-primary" href="/view2">view more</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/ve2.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/booking"><i class="fa fa-eye"></i> Book Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Birds Paradise</h4></a>
                                      <div class="rating">
                                          <p>Ratings</p>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star-o"></i>
                                          <i class="fa fa-star-o"></i>
                                      <h6>by: Dream Vacation</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/ve2.png" alt=""></div> ₹2400 / day included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                      <a class="btn btn-primary" href="/view1">view more</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/ve3.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/booking"><i class="fa fa-eye"></i> Book Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Vismaya</h4></a>
                                      <div class="rating">
                                          <p>Ratings</p>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star checked"></i>
                                          <i class="fa fa-star-o"></i>
                                      <h6>by: Dream Vacation</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/ve3.jpg" alt=""></div>   ₹3800 / Day included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                      <a class="btn btn-primary" href="/view1">view more</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <!-- second category listing of items -->
                    <li>
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">

                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Sunshine Paradise</h4></a>
                                      <h6>by: Food Delivery</h6>

                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <p>This kind of menu contains a list<br> of dishes available for service in<br> guest rooms around the clock.<br> Prices quoted for dishes in the room <br>service menu card are always higher <br>than prices quoted for the same dishes <br>served in other restaurants of the hotel.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/booking"><i class="fa fa-eye"></i> Book Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Apple Vally</h4></a>
                                      <h6>by: Food Delivery</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> ₹540 / day included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/booking"><i class="fa fa-eye"></i> Book Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Amazing Party Villa</h4></a>
                                      <h6>by: Food Delivery</h6>
                                      <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> ₹720 / day included tax</span>
                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <span class="info"><img src="assets/images/listing-icon-02.png" alt=""> 2 Bedrooms<br><img src="assets/images/listing-icon-03.png" alt=""> 3 Bathrooms</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- second category second page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/booking"><i class="fa fa-eye"></i> Book Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>FOOD Delicious</h4></a>
                                      <h6>by: Food Delivery</h6>

                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <p>This kind of menu contains a list<br> of dishes available for service in<br> guest rooms around the clock.<br> Prices quoted for dishes in the room <br>service menu card are always higher <br>than prices quoted for the same dishes <br>served in other restaurants of the hotel.</p>

                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Best Food Items</h4></a>
                                      <h6>by: Food Delivery</h6>

                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <p>Guest rooms around the clock,<br> Prices quoted for dishes in the room <br>service menu card are always higher <br>than prices quoted for the same dishes.</p>

                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/booking"><i class="fa fa-eye"></i> Book Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Amazing Food Items</h4></a>
                                      <h6>by: Food Delivery</h6>

                                      <span class="details">Details: <em>860 sq ft</em></span>
                                      <p>Prices quoted for dishes in the room <br>service menu card are always higher <br>than prices quoted for the same dishes <br>served in other restaurants of the hotel.</p>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>


                          </div>
                        </div>
                      </div>
                    </li>

                    <!-- third category first page -->
                    <li>
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Third Category First Page</h4></a>
                                      <h4>Best car rentals for your trips!</h4>
                                <p>Munnar is a beautiful tourist destination in Kerala. You can have an enjoyable time with your family and friends there. You can book a cab and explore its various tourist spots. There are a lot of private and public transportation options by which you can reach Muunar Dreams.
 </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Car Item 2</h4></a>
                                      <h4>Best car rentals for your trips!</h4>
                                <p>You can book a cab and explore its various tourist spots. There are a lot of private and public transportation options by which you can reach Muunar Dreams.

While on a road trip from Munnar, you get to experience the scenic landscapes. </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Car Item 3</h4></a>
                                      <h4>Best car rentals for your trips!</h4>
                                <p>Munnar is a beautiful tourist destination in Kerala. You can book a cab and explore its various tourist spots.

While on a road trip from Munnar, you get to experience the scenic landscapes. </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- third category second page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-01.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Third Category Second Page</h4></a>
                                      <h4>Best car rentals for your trips!</h4>
                                <p>Munnar is a beautiful tourist destination in Kerala. You can have an enjoyable time with your family and friends there. You can book a cab and explore its various tourist spots. There are a lot of private and public transportation options by which you can reach Muunar Dreams.

 </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-02.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Car Item 5</h4></a>
                                      <h4>Best car rentals for your trips!</h4>
                                <p>Munnar is a beautiful tourist destination in Kerala. You can have an enjoyable time with your family and friends there. You can book a cab and explore its various tourist spots. There are a lot of private and public transportation options by which you can reach Muunar Dreams.

 </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Car Item 6</h4></a>
                                      <h4>Best car rentals for your trips!</h4>
                                <p> You can have an enjoyable time with your family and friends there. You can book a cab and explore its various tourist spots. There are a lot of private and public transportation options by which you can reach Muunar Dreams.

While on a road trip from Munnar, you get to experience the scenic landscapes. </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- third category third page -->
                            <!-- NONE -->


                          </div>
                        </div>
                      </div>
                    </li>

                    <!-- 4th category 1st page -->
                    <li>
                      <div>
                        <div class="col-lg-12">
                          <div class="owl-carousel owl-listing">
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Sunshine Paradise</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <h4>Information and Safety Tips for Traveling</h4>
                                <p>Munnar is a town in the Western Ghats mountain range in India’s Kerala state. A hill station and former resort for the British Raj elite, it's surrounded by rolling hills dotted with tea plantations established in the late 19th century. </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-04.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Apple Vally</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <h4>Information and Safety Tips for Traveling</h4>
                                <p> A hill station and former resort for the British Raj elite, it's surrounded by rolling hills dotted with tea plantations established in the late 19th century. Eravikulam National Park, a habitat for the endangered mountain goat Nilgiri tahr.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Amazing Paradise</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <h4>Information and Safety Tips for Traveling</h4>
                                <p>it's surrounded by rolling hills dotted with tea plantations established in the late 19th century. Eravikulam National Park, a habitat for the endangered mountain goat Nilgiri tahr, is home to the Lakkam Waterfalls, hiking trails and 2,695m-tall Anamudi Peak.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- 4th category 2nd page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-05.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>4th Category 2nd Page</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <h4>Information and Safety Tips for Traveling</h4>
                                <p>Munnar is a town in the Western Ghats mountain range in India’s Kerala state. A hill station and former resort for the British Raj elite.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Vismaya </h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <h4>Information and Safety Tips for Traveling</h4>
                                <p> A hill station and former resort for the British Raj elite, it's surrounded by rolling hills dotted with tea plantations established in the late 19th century. Eravikulam National Park.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-03.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>Holiday Resort</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <h4>Information and Safety Tips for Traveling</h4>
                                <p>Munnar is a town in the Western Ghats mountain range in India’s Kerala state. A hill station and former resort for the British Raj elite, Eravikulam National Park.</p>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- 4th category 3rd page -->
                            <div class="item">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="listing-item">
                                    <div class="left-image">
                                      <a href="#"><img src="assets/images/listing-06.jpg" alt=""></a>
                                      <div class="hover-content">
                                        <div class="main-white-button">
                                          <a href="/contact"><i class="fa fa-eye"></i> Contact Now</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="right-content align-self-center">
                                      <a href="#"><h4>4th Category 3rd Page</h4></a>
                                      <h6>by: Travel Agent</h6>
                                      <h4>Information and Safety Tips for Traveling</h4>
                                <p>Munnar is a town in the Western Ghats mountain range in India’s Kerala state. A hill station and former resort for the British Raj elite.</p>
                                    </div>
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

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src="assets/images/black-logo.png" alt="">
            </div>

          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6">
                <ul>

                  <li><a href="/room">Resorts</a></li>
                  <li><a href="/contact">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="/about">About Us</a></li>
                  <li><a href="/gallery">Gallery</a></li>

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
                <a href="#">090-020-0340</a>
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
