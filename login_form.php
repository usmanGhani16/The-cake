<?php

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
$username_err = $password_err = "";
 
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
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Cake</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Links -->
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/index.css" />
</head>

<body>

    <div class="sidebar">
        <div class="links">
            <ul class="nav-ul">
                <li class="nav-item">
                    <div class="logo">
                        <a href="index.html">
                            <img src="./assets/Free_Sample_By_Wix.jpg" alt="logo">
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">Products</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- HEADER -->
    <header id="header">
        <nav class="navbar">
            <div class="container">
                <div class="upper-nav">
                    <!-- left links -->
                    <div class="links">
                        <ul class="nav-ul">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.html">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.html">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.html">Products</a>
                            </li>
                        </ul>
                    </div>

                    <!-- logo -->
                    <div class="logo-con">
                        <div class="logo">
                            <a href="index.html">
                                <img src="./assets/Free_Sample_By_Wix.jpg" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- icons -->
                    <div class="icons">
                        <div class="burger">
                            <a href="#" class="sidebar-toggle">
                                <span>
                                    <i class="fas fa-bars"></i>
                                </span>
                            </a>
                        </div>
                        <div class="auth">
                            <a href="auth.html">
                                <span>
                                    <i class="far fa-user"></i>
                                </span>
                            </a>
                        </div>
                        <div class="bucket">
                            <a href="#">
                                <span>
                                    <i class="fas fa-shopping-bag"></i>
                                </span>
                            </a>

                            <div class="badge">
                                <span>0</span>
                            </div>

                            <!-- Buckit -->
                            <div class="bucket-dropdown">
                                <div class="buckit-items">
                                    <!-- IF no item availabale in the cart  -->
                                    <!-- <span class="no-cart-itmes">Your cart is currently empty.</span> -->

                                    <!-- List items -->
                                    <ul class="buckit-items-list">

                                        <li class="list-item">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="./assets/BestCakes/Free_Sample_By_Wix.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="item-name">
                                                <a href="#">
                                                    <p>Celebration Cake</p>
                                                    <p>
                                                        <span class="color">Black</span> /
                                                        <span class="flavor">Blueberry</span>
                                                    </p>
                                                </a>
                                            </div>

                                            <div class="item-dlt">
                                                <a href="#">
                                                    <i class="far fa-times-circle"></i>
                                                </a>
                                            </div>
                                        </li>

                                        <li class="list-item">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="./assets/BestCakes/img-1_116fde62-b312-40b1-b08e-ff50c5cea562.jpg"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="item-name">
                                                <a href="#">
                                                    <p>Celebration Cake</p>
                                                    <p>
                                                        <span class="color">Black</span> /
                                                        <span class="flavor">Blueberry</span>
                                                    </p>
                                                </a>
                                            </div>

                                            <div class="item-dlt">
                                                <a href="#">
                                                    <i class="far fa-times-circle"></i>
                                                </a>
                                            </div>
                                        </li>

                                    </ul>

                                    <div class="cart-footer">
                                        <div class="sub-total">
                                            <p class="sub-total-text">
                                                Subtotal
                                            </p>
                                            <p class="amount-text">
                                                $36.00
                                            </p>
                                        </div>
                                        <div class="view-bag">
                                            <a href="#">
                                                VIEW BAG
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- LOGIN FORM -->
    <div class="form-container">
        <div class="auth">
            <h2>Login</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <form>
                <div class="row <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" value="">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>
                <div class="row <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="row">
                    <input type="submit" class="btn" value="Login">
                </div>
                <p class="bottom-text">Don't have an account? <a href="registration_form.php">Sign up now</a>.</p>
            </form>
        </div>
    </div>


    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="box">
            <div class="col-md-3">
                <div class="vu_c-wrapper">

                    <div class="wpb_text_column">
                        <div class="wpb_wrapper">
                            <h3 class="m-t-0 m-b-15 fs-16"><span style="color: #ffffff;">HAPPY HOURS</span></h3>
                            <p><span style="color: #ffffff;">If you are near our shop, you are in luck. You can have
                                    that cookie WARMED UP! Oh, happy day. Pick your happiness!</span></p>
                        </div>
                    </div>
                    <div class="vu_social-networks">
                        <div class="vu_sn-container">
                            <div class="vu_social-icon">
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                            <div class="vu_social-icon">
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="vu_social-icon"><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="vu_social-icon"><a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="vu_c-wrapper">
                    <div class="wpb_text_column ">
                        <div class="wpb_wrapper">
                            <h3><span style="color: #ffffff;">OUR GALLERY</span></h3>

                            <div class="vu_l-gallery">
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1.jpg"
                                        class="vu_gw-image">

                                        <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-1-600x600.jpg 600w">
                                    </a>
                                </div>
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4.jpg"
                                        class="vu_gw-image">

                                        <img width="150" height="150"
                                            src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-4-600x600.jpg 600w"
                                            sizes="(max-width: 150px) 100vw, 150px">
                                    </a>
                                </div>
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3.jpg"
                                        class="vu_gw-image">

                                        <img width="150" height="150"
                                            src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-3-600x600.jpg 600w"
                                            sizes="(max-width: 150px) 100vw, 150px">
                                    </a>
                                </div>
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13.jpg"
                                        class="vu_gw-image">

                                        <img width="150" height="150"
                                            src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-13-600x600.jpg 600w"
                                            sizes="(max-width: 150px) 100vw, 150px">
                                    </a>
                                </div>
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15.jpg"
                                        class="vu_gw-image">

                                        <img width="150" height="150"
                                            src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-15-600x600.jpg 600w"
                                            sizes="(max-width: 150px) 100vw, 150px">
                                    </a>
                                </div>
                                <div class="vu_gw-item">
                                    <a href="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16.jpg"
                                        class="vu_gw-image">

                                        <img width="150" height="150"
                                            src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt=""
                                            srcset="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16-150x150.jpg 150w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16-180x180.jpg 180w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16-300x300.jpg 300w, http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/12/img-16-600x600.jpg 600w"
                                            sizes="(max-width: 150px) 100vw, 150px">
                                    </a>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="vu_c-wrapper">

                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <h3 class="m-t-0 m-b-15 fs-16"><span style="color: #ffffff;">OPENING HOURS</span></h3>
                        </div>
                    </div>

                    <div class="wpb_content_element ">
                        <div class="wpb_wrapper">
                            <div class="vu_working-hours">
                                <div class="vu_wh-item" data-day="1">
                                    <div class="vu_wh-day">Monday</div>
                                    <div class="vu_wh-hours">8:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="2">
                                    <div class="vu_wh-day">Tuesday</div>
                                    <div class="vu_wh-hours">8:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="3">
                                    <div class="vu_wh-day">Wednesday</div>
                                    <div class="vu_wh-hours">8:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="4">
                                    <div class="vu_wh-day">Thursday</div>
                                    <div class="vu_wh-hours">8:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="5">
                                    <div class="vu_wh-day">Friday</div>
                                    <div class="vu_wh-hours">8:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="6">
                                    <div class="vu_wh-day">Saturday</div>
                                    <div class="vu_wh-hours">10:00 - 16:00</div>
                                </div>
                                <div class="vu_wh-item" data-day="0">
                                    <div class="vu_wh-day">Sunday</div>
                                    <div class="vu_wh-hours">Closed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="powered">
            <div class="copyright">
                Copyright © <span id="copyrightYear"></span> Bakery WordPress Theme by
            </div>
        </div>
    </footer>


    <a class="back-to-top hide" href="#header">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <script src="./js/all.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>