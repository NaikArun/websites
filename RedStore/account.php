<!--------------login php----------->

<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 

<!--html-->
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
                            <li><a href="contact-us.html">Contact</a></li>
                            <li><a href="account.php">Account</a></li>
                        </ul>
                    </nav>
                    <img src="images/cart.png" width="30px" height="30px">
                    <img src="images/menu.png" class="menu-icon" 
                    onclick="menutroggle()">
                </div>
            </div>
<!--------account page -------->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/image1.png" width="100%">
            </div>
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                       <a href="account.php"><button type="button" class="toggle-btn" onclick="login()">login</button></a>
                       <a href="register.php"><button type="button" class="toggle-btn"  onclick="register()">register</button></a>
                </div>
                <div class="social-icons">
                    <img src="images/fb.png">
                    <img src="images/tw.png">
                    <img src="images/gp.png">
                </div>


   <!---------------------------------------login------------------------------------------>

                <?php 
                       if(!empty($login_err)){
                       echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    }        
                    ?>
                <form id="login" class="input-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <!--username-->
                    <input type="text" placeholder="Username" name="username" class="input-field <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                <!--password-->
                    <input type="text" placeholder="enter password" name="password" class="input-field<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>

                    <input type="checkbox" class="check-box">
                    <span>remember passward</span>
                    <button type="submit" class="submit-btn">login</button>
                </form>
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



    </body>
</html>