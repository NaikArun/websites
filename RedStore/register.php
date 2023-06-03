<!--------------register php----------->

<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: account.php");
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
                            <li><a href="logout">logout</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                            <li><a href="account.php">Account</a></li>
                        </ul>
                    </nav>
                    <img src="images/cart.png" width="30px" height="30px">
                    <img src="images/menu.png" class="menu-icon" 
                    onclick="menutroggle()">
                </div>
            </div>
<!--------register page -------->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/image1.png" width="100%">
            </div>
            <div class="form-box">
                <div class="button-box">
                  <!--  <div id="btn"></div>  -->
                    <a href="account.php"><button type="button" class="toggle-btn">login</button></a>
                    <a href="register.php"><button type="button" class="toggle-btn">register</button></a>
 
                </div>
                <div class="social-icons">
                    <img src="images/fb.png">
                    <img src="images/tw.png">
                    <img src="images/gp.png">
                </div>


   <!---------------------------------------register------------------------------------------>

                <form id="register" class="input-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                
                <!----username--->
                    <input type="text" placeholder="Username" name="username" class="input-field <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    
                <!----password-->

                    <input type="password" placeholder="enter password" name="password" class="input-field <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    
                <!----confirm password-->

                    <input type="text" placeholder="confirm password" name="confirm password" class="input-field <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>

                    <input type="checkbox" class="check-box">
                    <span>i agree terms and condition</span>
                    <button type="submit" class="submit-btn">register</button>
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