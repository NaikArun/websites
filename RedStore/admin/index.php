<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="stylesheet" href="style.css">
</head>


<body>

<!-----======header======------>
<div class="container">
  <div class="navbar">

    <div class="logo">
        <img src="images/logo.png" width="125px" >
    </div>

    <nav>
        <ul id="MenuItems">
          <li><a href="index.php"><b>Orders</b></a></li>
          <li><a href="#"><b>Customer care</b></a></li>
          <li><a href="users.php"><b>Users</b></a></li>
          <li><a href="product.php"><b>Products</b></a></li>
          <li><a href="register.php"><b>Admin register</b></a></li>
          <li><a href="logout.php"><b>Logout</b></a></li>
        </ul>
 
    </nav>  
  </div>
</div>
<!-----======header end======------>

<!--dk-->
<div class="dummy-text">
<table class="table">


  <tr>
    <th>ID</th>
    <th>name</th>
    <th>email</th>
    <th>phone</th>
    <th>address</th>
    <th>payment mode</th>
    <th>products</th>
    <th>amount to be paid</th>
    <th>
        <a href="action.php?clear=all"  class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');">Clear Cart</a>
    </th>
  </tr>
  <?php
  $con = mysqli_connect("localhost", "root", "", "redstore");
  $sql = "SELECT * from orders";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
      echo '<tr><td>' . $row["id"] . '</td>
      <td>' . $row["name"] . '</td>
      <td>' . $row["email"] . '</td>
      <td>' . $row["phone"] . '</td>
      <td>' . $row["address"] . '</td>
      <td>' . $row["pmode"] . '</td>
      <td>' . $row["products"] . '</td>
      <td>' . $row["amount_paid"] . '</td>

      <td> <a href="action.php?remove='. $row["id"] .' class="text-danger lead" onclick="return confirm("Are you sure want to remove this item?");">remove</a> </td>
      
      
      </tr>';
    }
  }else{
    echo"no result";
  }
  $con->close();
  ?>
 
</table>








  </div>


</body>
</html>
