<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<!--==head==-->
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
                            <li><a href="contact-us.html">Contact</a></li>
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
<!--==head end==-->








  <div class="container">
    <div class="row justify-content-center">


      <div class="col-lg-6 px-4 pb-4" id="order">
        <h3 class="text-center text-info p-2">Complete your order!</h3>
        <div class="jumbotron p-3 mb-2 text-center">
          <h4 class="lead"><b>Product(s) : </b><?= $allItems; ?></h4>
          <h4 class="lead"><b>Delivery Charge : </b>Free</h4>
          <h4><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h4>
        </div>


        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h4 class="text-center lead">Select Payment Mode</h4>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
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