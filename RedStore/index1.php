


<!---------- if not logged in redirect to login.php ---------->

<!--?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: account.php");
    exit;
}
?-->






<!---------- html ---------->

<!doctype html>
<html lang="en">
    <!----------------------header section---------------------->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initinal-scale=1.0">
        <title>RedStore | Ecommers website design </title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body> 
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                       <img src="images/logo.png" width="125px" >
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="products.php">Product</a></li>
                            <li><a href="logout.php">logout</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                            <li><a href="account.php">Account</a></li>
                        </ul>
                    </nav>
                     <a href="cart.php">
                    <img src="images/cart.png" width="30px" height="30px">
                    <img src="images/menu.png" class="menu-icon" 
                    onclick="menutroggle()">
                     </a>
                </div>
                <div class="row">
                    <div class="col-2">
                        <h1>Give Your Workout<br> A New Style!</h1>
                        <p>success isn't always about greatness. it's about consistency. consistent <br> hard work sucess. greatness will come </p>
                        <a href="products.php" class="btn">Explore Now &#8594;</a>
                    </div>
                    <div class="col-2">
                        <img src="images/image1.png" alt="">
    
                    </div>
                </div>
              </div>
        </div>
    <!----------------------featured categories---------------------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                     <img src="images/category-1.jpg">
                </div>
                <div class="col-3">
                     <img src="images/category-2.jpg">
                </div>
                <div class="col-3">
                     <img src="images/category-3.jpg">
                </div>
            </div>

        </div>
    </div>
    <!----------------------featured product---------------------->



    <div class="small-container">
        <h2 class="title">featured product</h2>
        <div class="row">
            <div class="col-4">
                <a href="Red printed T-shirt.php">
                <img src="images/product-1.jpg">
                <h4>Red printrd T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <p>Rs 550</p>
                </div>
            </a>
            </div>

            <div class="col-4">
                <a href="red taped shoes.php">
                <img src="images/red taped shoes 1.jpg">
                <h4>red taped shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <p>Rs 350</p>
                </div>
            </a>
            </div>
            <div class="col-4">
                <a href="track pant.php">
                <img src="images/track pant 1.jpg">
                <h4>Track Pant</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <p>Rs 800</p>
                </div>
                </a>
            </div>
            <div class="col-4">
                <a href="blue tshirt.php">
                <img src="images/blue tshirt 1.jpg">
                <h4>Puma blue T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <p>Rs 550</p>
                </div>
                </a>
            </div>
        </div>
        <!----------------------latest product---------------------->
        <h2 class="title">latest product</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg">
                <h4>Red printrd T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <p>Rs 550</p>
                </div>
            </div>
            <div class="col-4">
                <img src="images/product-6.jpg">
                <h4>black shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <p>Rs 350</p>
                </div>
            </div>
            <div class="col-4">
                <img src="images/product-7.jpg">
                <h4>Track Pant</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <p>Rs 800</p>
                </div>
            </div>
            <div class="col-4">
                <img src="images/product-8.jpg">
                <h4>Puma T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <p>Rs 550</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/product-9.jpg">
                <h4>Red printrd T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <p>Rs 550</p>
                </div>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg">
                <h4>black shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <p>Rs 350</p>
                </div>
            </div>
            <div class="col-4">
                <img src="images/product-11.jpg">
                <h4>Track Pant</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <p>Rs 800</p>
                </div>
            </div>
            <div class="col-4">
                <img src="images/product-12.jpg">
                <h4>Puma T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <p>Rs 550</p>
                </div>
            </div>
        </div>

    </div>
    <!-----------------offers----------------->
    <div class="offers">
        <div class="small-container">
          <div class="row">
              <div class="col-2">
                  <img src="images/exclusive.png" class="offer-img">
              </div>
              <div class="col-2">
                  <p>
                      exclusive offers available on redstore
                  </p>   
                  <h1>Smart band 4</h1>
                  <small>
                      the mi smart band 4 features a 39.9% larger (than mi band 3) AMOLED colour full touch display with the adjustable brightness so everythings is clear as can be.
                  </small><br>
                  <a href="mi band.php" class="btn">buy now &#8594;</a>
              </div>
          </div>  
        </div>
    </div>
<!-------about us------->
<div class="about-us">
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <i class="fa fa-quote-left"></i>
                <p>
                    Onii-chan. This word means “Brother.” It is most effective when used by a little girl with a cute voice.
                </p>
                <img src="images/user-1.png">
                <h3>Arun Naik</h3>
            </div>
            <div class="col-4">
                <i class="fa fa-quote-left"></i>
                <p>
                    Men marry women with the hope they will never change. Women marry men with the hope they will change. Invariably they are both disappointed.
                </p>
                <img src="images/user-2.png">
                <h3>Aniket</h3>
            </div>
            <div class="col-4">
                <i class="fa fa-quote-left"></i>
                <p>
                    "There is only one boss. The customer. And he can fire everybody in the company from the chairman on down, simply by spending his money somewhere else."
                </p>
                <img src="images/user-3.png">
                <h3>Shankar</h3>
            </div>
            <div class="col-4">
                <i class="fa fa-quote-left"></i>
                <p>
                    Here I am again. Feeling like I’m not wanted. Feeling like I’m worthless. And even though I’m alive, feeling dead.
                </p>        
                <img src="images/user-1.png">
                <h3>Ashwin</h3>
            </div>
        </div>
    </div>
</div>
<!------- brands -------->

<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png">
            </div>
            <div class="col-5">
                <img src="images/logo-oppo.png">
            </div>
            <div class="col-5">
                <img src="images/logo-coca-cola.png">
            </div>
            <div class="col-5">
                <img src="images/logo-philips.png">
            </div>
            <div class="col-5">
                <img src="images/logo-paypal.png">
            </div>
        </div>
    </div>
</div>
<!---------footer----------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>downlode are app</h3>
                <p>downlode are app for android and IOS</p>
                <div class="app-logo">
                    <a href="https://play.google.com/store/apps/details?id=com.flipkart.android">
                        <img src="images/play-store.png">
                    </a>
                    <img src="images/app-store.png" >
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo-white.png">
                <p>our purpose ois to sustainably make the plesure and benefits of sports accessible to the user</p>
            </div>
            <div class="footer-col-3">
                <h3>useful links</h3>
                <ul>
                    <li>coupons</li>
                    <li>blog post</li>
                    <li>return policy</li>
                    <li>join affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>follow us</h3>
                <ul>
                    <li>facebook</li>
                    <li>twitter</li>
                    <li>instagram</li>
                    <li>youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">copyright 2021 final year project</p>
    </div>
</div>




<!-------js for troggle menu------->
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight ="0px";
    function menutroggle(){
        if(MenuItems.style.maxHeight =="0px")
            {
               MenuItems.style.maxHeight ="200px";
            }
        else
            {
               MenuItems.style.maxHeight ="0px";
            }
    }
</script>





    </body>
</html>
