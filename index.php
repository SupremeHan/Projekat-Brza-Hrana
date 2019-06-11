<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Fast Food Restaurant</title>
  </head>
  <body>
    <header class="showcase">
        <div class="showcase-top">
            <!---------------------NAVBAR------------------------>
            <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
                    aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.html">Logo</a>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav mx-auto">
                        <li class="navbar-item">
                            <a class="nav-link" href="#menu">

                                <i class="fas fa-hamburger fa-lg"></i>Menu
                            </a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="#offer">
                                <i class="far fa-newspaper fa-lg"></i>News
                            </a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="#">
                                <i class="far fa-map fa-lg"></i>Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="auth">
                    <a class="nav-link" href="signup.html">Sign Up</a>
                </div>
                <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
                    <span class="cart-info__icon mr-lg-3"><i class="fas fa-shopping-cart"></i></span>
                    <p class="mb-0 text-capitalize"><span id="item-count">0 </span> items - $<span class="item-total">0.00</span></p>
                </div>
                    
            </nav>
        </div>
        <!---------------LANDING PIC--------------------------->
        <div class="showcase-content">
            <img src="img/food2.jpg">
            <div class="text text-center">
                <h1>Burger</h1>
                <p>with beef</p>
                <button type="button" class="btn btn-outline-light btn-lg btn-main">Order Online</button>
            </div>

            <div id="cart" class="cart">
                <!-- cart total -->
                <div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
                    <h5>total</h5>
                    <h5> $ <strong id="cart-total" class="font-weight-bold">0.00</strong> </h5>
                </div>
                <!-- end of cart total -->
                <!-- cart buttons -->
                <div class="cart-buttons-container mt-3 d-flex justify-content-between">
                    <a href="#" id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase">clear cart</a>
                    <a href="#" class="btn btn-outline-secondary text-uppercase btn-pink">checkout</a>
                </div>
                <!-- end of cart buttons -->
            </div>
        </div>
    </header>
    
    <!--------------OFFER SECTION ------------->
    <div id="offer">
        <div class="row justify-content-center no-gutters row-center">

            <div class="col-md-4 col-sm-6 col-xs-12 col-center">
                <div class="card">
                    <img class="card-img" src="img/offer1.jpg">
                    <div class="card-info text-center">
                        <h2>Sandwiches</h2>
                        <p>Look at our new sandwiches</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 col-center">
                <div class="card">
                    <img class="card-img" src="img/offer2.jpg">
                    <div class="card-info text-center">
                        <h2>Order Online</h2>
                        <p>Every day 9am - 11pm</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 col-center">
                <div class="card">
                    <img class="card-img" src="img/offer3.jpg">
                    <div class="card-info text-center">
                        <h2>Sweets</h2>
                        <p>If you are craving for cookies</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="store" class="store">
            <div class="h-store text-center">
                <h2>Our menu</h2>
            </div>
    <div class="container-fluid">

    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-burger-tab" data-toggle="tab" href="#nav-burger"
        role="tab" aria-controls="nav-burger" aria-selected="true">Burgers</a>
        <a class="nav-item nav-link" id="nav-pizza-tab" data-toggle="tab" href="#nav-pizza"
        role="tab" aria-controls="nav-pizza" aria-selected="false">Pizza</a>
        <a class="nav-item nav-link" id="nav-sandwiches-tab" data-toggle="tab" href="#nav-sandwiches"
        role="tab" aria-controls="nav-sandwiches" aria-selected="false">Sandwiches</a>
        <a class="nav-item nav-link" id="nav-sweets-tab" data-toggle="tab" href="#nav-sweets"
        role="tab" aria-controls="nav-sweets" aria-selected="false">Sweets</a>
    </div>

    <div class="tab-content">
        <!-- Brugers page -->
        <div class="tab-pane fade show active" id="nav-burger" role="tabpanel" aria-labelledby="nav-burger-tab">
        <div class="row" class="store-items" id="store-items">

            <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item burgers" data-item="burgers">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="img-container">
                    <img src="./img/burger.png" class="card-img-top" alt="...">
                    <span class="store-item-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                </div>
                <div class="card-body">
                  <h5 id="store-item-name">Burger Classic</h5>
                  <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">7</strong></h5>
                </div>
              </div>
            </div>

            <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item burgers" data-item="burgers">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="img-container">
                    <img src="./img/black-burger.png" class="card-img-top" alt="...">
                    <span class="store-item-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                </div>
                <div class="card-body">
                    <h5 class="store-item-name">Black Burger</h5>
                    <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>
                </div>
            </div>
            </div>

            <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item burgers" data-item="burgers">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="img-container">
                    <img src="./img/chicken-burger.png" class="card-img-top" alt="...">
                    <span class="store-item-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                </div>
                <div class="card-body">
                    <h5 class="store-item-name">Chicken Burger</h5>
                    <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">9</strong></h5>
                </div>
            </div>
            </div>

        </div>
        </div>

        <!-- Pizza page -->
        <div class="tab-pane fade" id="nav-pizza" role="tabpanel" aria-labelledby="nav-pizza-tab">
        <div class="row">

                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item burgers" data-item="burgers">
                        <div class="card mx-auto" style="width: 18rem;">
                            <div class="img-container">
                                <img src="./img/olives-pizza.png" class="card-img-top" alt="...">
                                <span class="store-item-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            </div>
                            <div class="card-body">
                              <h5 id="store-item-name">Olives Pizza</h5>
                              <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">12</strong></h5>
                            </div>
                          </div>
                        </div>
            
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item burgers" data-item="burgers">
                        <div class="card mx-auto" style="width: 18rem;">
                            <div class="img-container">
                                <img src="./img/veggie-pizza.png" class="card-img-top" alt="...">
                                <span class="store-item-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            </div>
                            <div class="card-body">
                                <h5 class="store-item-name">Veggie Pizza</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>
                            </div>
                        </div>
                        </div>
            
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item burgers" data-item="burgers">
                        <div class="card mx-auto" style="width: 18rem;">
                            <div class="img-container">
                                <img src="./img/peperoni-pizza.png" class="card-img-top" alt="...">
                                <span class="store-item-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            </div>
                            <div class="card-body">
                                <h5 class="store-item-name">Peperoni Pizza</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">13</strong></h5>
                            </div>
                        </div>
                        </div>
        </div>
        </div>

        <!-- Sandwiches page -->
        <div class="tab-pane fade" id="nav-sandwiches" role="tabpanel" aria-labelledby="nav-sandwiches-tab">
                <div class="row">
        
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sandwiches" data-item="sandwiches">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <div class="img-container">
                                        <img src="./img/ham-sandwich.png" class="card-img-top" alt="...">
                                        <span class="store-item-icon">
                                            <i class="fas fa-shopping-cart"></i>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                      <h5 id="store-item-name">Ham Sandwich</h5>
                                      <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
                                    </div>
                                  </div>
                                </div>
                    
                                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sandwiches" data-item="sandwiches">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <div class="img-container">
                                        <img src="./img/vegan-sandwich.png" class="card-img-top" alt="...">
                                        <span class="store-item-icon">
                                            <i class="fas fa-shopping-cart"></i>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="store-item-name">Vegan Sandwich</h5>
                                        <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">8</strong></h5>
                                    </div>
                                </div>
                                </div>
                    
                                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sandwiches" data-item="sandwiches">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <div class="img-container">
                                        <img src="./img/chicken-sandwich.png" class="card-img-top" alt="...">
                                        <span class="store-item-icon">
                                            <i class="fas fa-shopping-cart"></i>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="store-item-name">Chicken Sandwich</h5>
                                        <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">8</strong></h5>
                                    </div>
                                </div>
                                </div>
                </div>
                </div>

        <!-- Sweets page -->
        <div class="tab-pane fade" id="nav-sweets" role="tabpanel" aria-labelledby="nav-sweets-tab">
                <div class="row">
        
                        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <div class="img-container">
                                        <img src="./img/cheesecake.png" class="card-img-top" alt="...">
                                        <span class="store-item-icon">
                                            <i class="fas fa-shopping-cart"></i>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                      <h5 id="store-item-name">Cheescake</h5>
                                      <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">9</strong></h5>
                                    </div>
                                  </div>
                                </div>
                    
                                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <div class="img-container">
                                        <img src="./img/chocolate.png" class="card-img-top" alt="...">
                                        <span class="store-item-icon">
                                            <i class="fas fa-shopping-cart"></i>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="store-item-name">Chocolate</h5>
                                        <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
                                    </div>
                                </div>
                                </div>
                    
                                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                                <div class="card mx-auto" style="width: 18rem;">
                                    <div class="img-container">
                                        <img src="./img/muffin.png" class="card-img-top" alt="...">
                                        <span class="store-item-icon">
                                            <i class="fas fa-shopping-cart"></i>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="store-item-name">Muffin</h5>
                                        <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">3</strong></h5>
                                    </div>
                                </div>
                                </div>
                </div>
                </div>

    </div>

    </div>
    </div>

    <!----------------CART ITEMS -------------->
    
    <!----------------MODAL -------------->
    


    <div id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="more-content">
                    <i class="far fa-clock fa-3x"></i>
                </div>
                <div class="more-text">
                    <h3>Fast Delivery</h3>
                    <p>Everything order at QuickFood
                    will be quickly delivered to your door.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="more-content">
                    <i class="fas fa-shopping-bag fa-3x"></i>
                </div>
                <div class="more-text">
                    <h3>Fresh food</h3>
                    <p>We use only the best ingedients to
                    cook the tasty fresh food for you.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="more-content">
                    <i class="fas fa-user-check fa-3x"></i>
                </div>
                <div class="more-text">
                        <h3>Experienced chefs</h3>
                        <p>Our staff consist of chefs and cooks
                        with years of experience.</p>
                    </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="more-content">
                    <i class="fas fa-utensils fa-3x"></i>
                </div>
                <div class="more-text">
                        <h3>A veriety of dishes</h3>
                        <p>In our menu you'll find a wide variety
                        of dishes,desserts,and drinks.</p>
                    </div>
            </div>
        </div>
    </div>
</div>


  <footer>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="footer-contet">
                        <h2>LOGO</h1>
                        <p>Adress: blank <br/>
                            Email:dadsd@sadas.com
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-contet">
                        <h2>Our menu</h2>
                        <p>Burgers | Pizza | <br/> Sandwiches | Sweets</p>
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="footer-contet">
                        <h2>Contact us</h2>
                        <p>sdadasdsadsadsa</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="js/cart.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

