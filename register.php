<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$FirstName = $LastName = $userid = $password = $confirm_password = "";
$FirstName = $LastName = $userid_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    // Validate username
    if(empty(trim($_POST["userid"]))){
        $userid_err = "Please enter a user Id.";
    } else{
        // Prepare a select statement
        $sql = "SELECT userid FROM customer WHERE userid = ?";
        $result = $link->query($sql);
        //if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
         //   mysqli_stmt_bind_param($stmt, "s", $param_userid);
        //    echo $param_userid;
            // Set parameters
         //   $param_userid = trim($_POST["userid"]);
            
            // Attempt to execute the prepared statement
            //  if(mysqli_stmt_execute($stmt)){
                /* store result */
            //     mysqli_stmt_store_result($stmt);
                
                if($result->num_rows > 0){
                    $userid_err = "This userid is already taken.";
                    echo "***";
                } else{
                    $userid = trim($_POST["userid"]);
                    echo "here";
                }
            //} else{
             //   echo "Oops! Something went wrong. Please try again later.";
           // }
        //}
         
        // Close statement
        mysqli_stmt_close($stmt);
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
    if(empty($userid_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO customer (Userid, Password, FirstName, LastName) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_userid, $param_password, $parm_FirstName, $parm_LastName);
            
            // Set parameters
            $param_FirstName = $FirstName;
            $param_LastName = $LastName;
            $param_userid = $userid;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.html");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/sigmiles.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">

<title>Flight Schedule</title>


<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.html"><span lang=EL style='font-size:30pt;line-height:107%;color:red'>&#931;</span>igma Airlines</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="index.html">Home</a></li>
									<li class="active"><a href="sigmiles.html">Σigmiles</a></li>
									<li><a href="jobs.html">Careers</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
							

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="index.html"><span lang=EL style='font-size:30pt;line-height:107%;color:red'>&#931;</span>igma Airlines</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="sigmiles.html">Σigmiles</a></li>
				<li><a href="jobs.html">Careers</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="contact.html">Contact</a></li> 
			</ul>
		</div>
		
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/sigmilesuno.jpg)"></div>
	</div>

<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group <?php echo (!empty($Firstname_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
                <input type="text" name="Firstname" class="form-control" value="<?php echo $Firstname; ?>">
                <span class="help-block"><?php echo $Firstname_err; ?></span>
            </div>   
            <div class="form-group <?php echo (!empty($Lastname_err)) ? 'has-error' : ''; ?>">
                <label>Last Name</label>
                <input type="text" name="Lastname" class="form-control" value="<?php echo $Lastname; ?>">
                <span class="help-block"><?php echo $Lastname_err; ?></span>
            </div>   
            <div class="form-group <?php echo (!empty($userid_err)) ? 'has-error' : ''; ?>">
                <label>User Id</label>
                <input type="text" name="userid" class="form-control" value="<?php echo $userid; ?>">
                <span class="help-block"><?php echo $userid_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="Login.html">Login here</a>.</p>
        </form>
    </div>    
</body>
</div>
</html>