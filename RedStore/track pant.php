


<!doctype html>
<html lang="en">
    <!----------------------header section---------------------->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initinal-scale=1.0">
        <title>All Products -RedStore </title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body> 
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                       <img src="images/logo.png" width="125px" >
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="products.php">Product</a></li>
                            <li><a href="logout.php">logout</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="account.php">Account</a></li>
                        </ul>
                    </nav>
                    <img src="images/cart.png" width="30px" height="30px">
                    <img src="images/menu.png" class="menu-icon" 
                    onclick="menutroggle()">
                </div>
            </div>

<!--------single product details------->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/track pant 1.jpg" width="100%" id="productImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/track pant 1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/track pant 2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/track pant 3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/track pant 4.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home/ track pant</p>
                <h1>gray track pant</h1>
                <h4>Rs 550</h4>
                <select>
                    <option>select size</option>
                    <option>32</option>
                    <option>34</option>
                    <option>36</option>
                    <option>38</option>
                    <option>40</option>
                </select>
                <input type="number" value="1">
                <a href=""class="btn">add to cart</a>
                <h3>product details <i class="fa fa-indent"></i></h3>
                <br>
                <p>
                    give your summer wordrobe a style upgrade with the pair of nike Man's T-shirt, team it with a pair of short for your morning workout or a denims for an everning out with guys
                </p>
            </div>
        </div>
    </div>

<!-------title------->
    <div class="small-container">
        <div class="row row-2">
            <h2>releated products</h2>
            <p>
                <a href="products.php">view more</a>
            </p>
        </div>
    </div>


<!-------product details------->
        <div class="small-container">
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
<!--------footer-------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>downlode are app</h3>
                <p>downlode are app for android and IOS</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
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
<!-------js for product gallery------->
<script>
    var productImg = document.getElementById("productImg");
    var smallImg = document.getElementsByClassName("small-img");
    smallImg[0].onclick = function()
    {
        productImg.src = smallImg[0].src;
    }
    smallImg[1].onclick = function()
    {
        productImg.src = smallImg[1].src;
    }
    smallImg[2].onclick = function()
    {
        productImg.src = smallImg[2].src;
    }
    smallImg[3].onclick = function()
    {
        productImg.src = smallImg[3].src;
    }
</script>




    </body>
</html>