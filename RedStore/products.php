
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="products.php">Product</a></li>
                            <li><a href="logout.php">logout</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="account.php">Account</a></li>
                        </ul>
                    </nav>

                    <div class="cart_div">
                   <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
                   <!-- <a class="nav-link" href="cart.php">
                       <img src="images/cart.png" width="30px" height="30px"> <span id="cart-item" class="badge badge-danger"></span>
                   </a>-->

                    </div>

                    <img src="images/menu.png" class="menu-icon" 
                    onclick="menutroggle()">
                </div>
            </div>
<!-----======header end======------>
<!--little unworking features------>
    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>default shorting</option>
                <option>short by price</option>
                <option>short by popularity</option>
                <option>short by rating</option>
                <option>short by rate</option>
            </select>
        </div>
<!--little unworking features end-->


<!--===========featured product======-->  
<div class="small-container">
   <div class="row">
           <?php
  		    	include 'config.php';
  		    	$stmt = $conn->prepare('SELECT * FROM product');
  		    	$stmt->execute();
  	    		$result = $stmt->get_result();
  	    		while ($row = $result->fetch_assoc()):
  	    	?>
              <div class="col-3">
   
                <img src="<?= $row['product_image'] ?>" class="card-img-top" height="320" >
                <form action="" class="form-submit">
                <div class="row">
                <h3 class="card-title text-center text-info"><?= $row['product_name'] ?></h3>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5> 
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>" style="width:30px;">
                    
                  </div> 

                  <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                  <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                  <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                  <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                  <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                  <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>Add to cart</button>
                  </div>
                </form>

               
              </div>
          <?php endwhile; ?>

        </div>
</div>

<!--===========featured product end======-->  


 







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
<!--------footer end-------->
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













<!--dk-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>

    </body>
</html>