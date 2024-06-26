<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce food Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="indexstyle.css">
     
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
     <!--google icon-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

</head>
  <body>

<!--================================== HEADING ========================-->
    <nav class="navbar navbar-expand-lg pb-3">
        <div class="container">
          <a class="navbar-brand " href="#">Organic</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item ms-3">
                <a class="nav-link  href="#" >Home</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link " href="#" >
                  Blog
                </a> 
              
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="#" >About</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="#" >Contect</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link btn btn-outline-success" href="login_form.php" >logn in</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link btn btn-outline-success" href="logout.php" >logn out</a>
              </li>
             
            </ul>
            
           
          </div>
        </div>
      </nav>

<!--================================== MAIN ========================-->
      <section class="main ">
        <div class="container ">
          <div class="row py-5">
            <div class="col-lg-6 py-5 main1">
            <h5>welcome <span><?php echo $_SESSION['user_name'] ?></span></h5>
              
              <h1 class="">Fresh Organic</h1>
              <div class="line my-4"></div>
              <p class="text-success">Organic food is food and drinks produced by methods complying with the standards of organic farming.
                Standards very worldwide , but organic farming features pratices that cycle resources. 
              </p>
              <button class="mbtn1 mt-4">Read more</button>
              <a href="./products/prodects.html"><button class="mbtn2"> Shop now</button></a>
            </div>
          </div>
        </div>
      </section>

<!--========================== About ==================================-->

       <section class="about py-5">
        <div class="container py-5">
          <div class="row py-5">
            <div class="col-lg-5 py-5 offset-lg-7 col-md-6 col-sm-12 col-12 about1">
              <p class="m-0 ">Organic products</p>
              <h1>About Our Organic</h1>
              <div class="line my-4"></div>
              <p>Organic food is food and drinks produced by methods complying with the standards of organic farming.
                Standards very worldwide , but organic farming features pratices that cycle resources. </p>

              <button class="mbtn1 mt-4">Read more</button>
            </div>
          </div>
        </div>
       </section>
    <!--============ welcome =====================-->
        <section class="welcome text-center pb-5">
          <div class="container py-5">
            <div class="row py-5 text-white">
              <div class="col-lg-6 m-auto welcome1">
                <p class="m-0">Green Agriculture</p>
                <h1>Welcome to Organic    </h1>
                <div class="line2 my-4"></div>
                <p> we call altimate becauce we simply belive every website we call it
                  ultimate because  we simply belive every website need to be well presented at the 
                </p>

              </div>
            </div>

            <div class="row welcome2">
              <div class="col-lg-4">
                <div class="card py-3">
                  <div class="card-body">
                    <span><i class="bi bi-shop-window"></i></span>
                    <h2>Always Fresh</h2>
                    <p>Aenean sollicitudin, lorem quit</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card py-3">
                  <div class="card-body">
                    <span><i class="bi bi-flower2"></i></span>
                    <h2>Healthy Food</h2>
                    <p>Aenean sollicitudin, lorem quit</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card py-3">
                  <div class="card-body">
                    <span><i class="bi bi-gift"></i></span>
                    <h2>100% Organic</h2>
                    <p>Aenean sollicitudin, lorem quit</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>

<!--=========== products ===========---->
        <section class="product bg-light">
          <div class="container">
            <div class="row py-5 text-center">

              <div class="col-lg-6 m-auto product1">
                <p class="m-0">Green Agriculture</p>
                <h1>Our Best Products   </h1>
                <div class="line my-4"></div>
                <p> we call altimate becauce we simply belive every website we call it
                  ultimate because  we simply belive every website need to be well presented at the 
                </p>
            </div>
          </div>

            <div class="row product2">
              <div class="col-lg-4">
                <div class="card p-3">
                  <div class="card-body">
                    <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                    <img src="https://th.bing.com/th/id/OIP.DsdFEw2-2VUE_4Krmzo1agHaFj?rs=1&pid=ImgDetMain" class="img-fluid pb-3" alt="">
                    <h4 class="head1">Orange</h4>
                    <p class="per1">2 * 454g / 16oz</p>
                    <h4 class="head1">  ₹43.00 </h4>
                  
                    <a href="./products/fruits/orange.html"><button class="btnc my-4 ">DETAILS</button></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card p-3">
                  <div class="card-body">
                    <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                    <img src="https://media.istockphoto.com/id/864053288/photo/whole-and-half-of-ripe-papaya-fruit-with-seeds-isolated-on-white-background.jpg?s=612x612&w=0&k=20&c=hJ5DpNTt0oKjZMIHYV6gUHTntB2zIs_78dPKiuDUXgE=" class="img-fluid pb-3" alt="">
                    <h4 class="head1">Papaya</h4>
                    <p class="per1">2 * 454g / 16oz</p>
                    <h4 class="head1"> ₹57.67 </h4>
                    <a href="./products/fruits/Papaya.html"><button class="btnc my-4 ">Details</button></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card p-3">
                  <div class="card-body">
                    <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                    </div>
                    <img src="https://clipground.com/images/anar-clipart-11.jpg" class="img-fluid pb-3" alt="">
                    <h4 class="head1">pomegranate</h4>
                    <p class="per1">2 * 454g / 16oz</p>
                    <h4 class="head1"> ₹149 </h4>
                    <a href="./products/fruits/Red Anar.html"><button class="btnc my-4 ">Details</button></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row py-5 product2">
              <div class="col-lg-4">
                <div class="card p-3">
                  <div class="card-body">
                    <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                    <img src="https://th.bing.com/th/id/OIP.HexC4-4R9oLWciHe-pNTlAHaGi?w=500&h=441&rs=1&pid=ImgDetMain" class="img-fluid pb-3" alt="">
                    <h4 class="head1">Red StrawBerry</h4>
                    <p class="per1">2 * 454g / 16oz</p>
                    <h4 class="head1">₹250.00</h4>
                    <a href="./products/fruits/Red StrawBerry.html"><button class="btnc my-4 ">Details</button></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card p-3">
                  <div class="card-body">
                    <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                    <img src="https://th.bing.com/th/id/OIP.0ORgIL3UWNmlNk0D7TvwyAHaGs?w=612&h=553&rs=1&pid=ImgDetMain" class="img-fluid pb-3" alt="">
                    <h4 class="head1">Water Melon</h4>
                    <p class="per1">2 * 454g / 16oz</p>
                    <h4 class="head1">₹151.00 </h4>
                    <a href="./products/fruits/Water Melon.html"><button class="btnc my-4 ">Details</button></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card p-3">
                  <div class="card-body">
                    <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                    </div>
                    <img src="https://th.bing.com/th/id/OIP.I5i9wgb5AYMYeMYfawg39AHaGs?w=1023&h=924&rs=1&pid=ImgDetMain" class="img-fluid pb-3" alt="">
                    <h4 class="head1">Green Mango</h4>
                    <p class="per1">2 * 454g / 16oz</p>
                    <h4 class="head1">₹175.02 </h4>
                    <a href="./products/fruits/Green Mango.html"><button class="btnc my-4 ">Details</button></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row text-center py-5 product2">
              <div class="col-lg-6 m-auto">
                <a href="./products/prodects.php"> <button class="mbtn1">Read More</button> </a>
              </div>
            </div>

          </div>
        </section>
<!--======================= Discout ==================-->\
           <section class="discount py-5">
            <div class="container py-5 ">
              <div class="row discount1">
                <div class="col-lg-10 m-auto text-center">
                  <h1 ><span><i class="bi bi-cash-coin"></i><span class="head1">Discount Coupon For -20% : </span> PWEB01424</h1>
                </div>
                <div class="col-lg-2 m-auto">
                  <button class="dbtn"> More Offer</button>
                </div>
              </div>
            </div>

           </section>

<!--========================== store ==================================-->

           <section class="store py-5 bg-light text-center">
            <div class="container py-5">
              <div class="row">
                <div class="col-lg-6 m-auto store1">
                  <p class="m-0">Green Agriculture</p>
                <h1>Our Best Survices  </h1>
                <div class="line my-4"></div>
                <p> we call altimate becauce we simply belive every website we call it
                  ultimate because  we simply belive every website need to be well presented at the 
                </p>
                </div>
              </div>
              <div class="row store2">
                <div class="col-lg-3 mt-2">
                  <div class="card">
                    <div class="care-body">
                      <span><i class="bi bi-truck"></i></span>
                      <h5 class="head1 py-3">Free Shipping</h5>
                      <p class="per1 py-3"> With $100 or more orders.Go to Ours Store,</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mt-2">
                  <div class="card">
                    <div class="care-body">
                      <span><i class="bi bi-patch-check"></i></span>
                      <h5 class="head1 py-3">Organic Certified</h5>
                      <p class="per1 py-3"> With $100 or more orders.Go to Ours Store,</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mt-2">
                  <div class="card">
                    <div class="care-body">
                      <span><i class="bi bi-wallet"></i></span>
                      <h5 class="head1 py-3">Secure Payment</h5>
                      <p class="per1 py-3"> With $100 or more orders.Go to Ours Store,</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mt-2">
                  <div class="card">
                    <div class="care-body">
                      <span><i class="bi bi-person-plus-fill"></i></span>
                      <h5 class="head1 py-3">Friendly support</h5>
                      <p class="per1 py-3"> With $100 or more orders.Go to Ours Store,</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </section>

<!--==================footer =======================-->

          <section class="footer py-2">
            <div class="container">
              <div class="row">
                <div class="col-lg-9 pt-3">
                  <p>Copyright 2023 @ Organic | Organic Store Template by ProWeb</p>
                </div>
                <div class="col-lg-3">
                  <div class="s1">
                    <span><i class="bi bi-envelope"></i></span>
                  </div>
                  <div class="s1">
                    <span><i class="bi bi-twitter-x"></i></span>
                  </div>
                  <div class="s1">
                    <span><i class="bi bi-whatsapp"></i></span>
                  </div>
                  <div class="s1">
                    <span><i class="bi bi-youtube"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </section>





    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>