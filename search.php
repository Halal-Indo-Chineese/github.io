<!DOCTYPE html>
<html lang="en">
<head>
<title>Search</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/search.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">



</head>
<body>

<?php
$From =$_POST['From']; 
$To =$_POST['To'];
$seats=$_POST['seats'];
$tdate = $_POST['tdate'];
$rdate = $_post('rdate');
$FromDate = '"' . $tdate . '"';
echo '   You want flights from ' . $From . ' ' . $To . ' ' . $tdate . '  ' . $FromDate . '   ' . $seats; 
?>


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
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="schedule.html">Flight Schedule</a></li>
									<li><a href="sigmiles.html">Σigmiles</a></li>
									<li><a href="careers.html">Careers</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="contact.html">Contact</a></li>			
									<li><a href data-toggle="modal" data-target="#loginModal"><i class="fa fa-user before"></i>Login</a></li>
									<li><a href="register.php"><i class="fa fa-user-plus before"></i>Sign-up</a></li>
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
			<div class="menu_logo"><a href="index.html"><span lang=EL style='font-size:30pt;line-height:107%;color:red'>&#931;</span>igma Airlines</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="schedule.html">Flight Schedules</a></li>
				<li><a href="sigmiles.html">Σigmiles</a></li>
				<li><a href="careers.html">Careers</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="contact.html">Contact</a></li> 
				<li><a href data-toggle="modal" data-target="#loginModal"><i class="fa fa-user before"></i>Login</a></li>
				<li><a href="register.php"><i class="fa fa-user-plus before"></i>Sign-up</a></li>
			</ul>
			
		</div>
		
	</div>
	
	<!-- Home -->
	<div class="home">
	
		<div class="background_image" style="background-image:url(images/sky1.jpg)"></div>
	</div>
	<div class="intro">
		<div class="intro_background" style="background-image:url(images/intro.png)">
		<!--<div class="home_search_title">Plan your next trip</div> -->
						<div class="home_search_content">
						
							<form method="post" action="search.php" class="home_search_form" id="home_search_form1">
							    
								<div class="d-flex flex-lg-row align-items-start">
									<div class="col"><input type="radio" onclick="javascript:btcheck();" name="booktype" id="ow" value="One Way" > OneWay </div>
									<div class="col"><input type="radio" onclick="javascript:btcheck();" name="booktype" id="rt" value="Round Trip" checked > RoundTrip </div>
									
									<div class="col"></div> <div class="col"></div>
								</div>	
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
								<span class="search_input_1">Origin</span>
								<span class="search_input_2">Destination</span>
								<span class="search_input_3">#Seats</span>
								<span class="search_input_4">Start Date</span>
								<span id="lrdt" class="search_input_5">Return Date</span>
								<span class="search_input_4"></span>
								</div>
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
					
									<select id="From" name="From" class="search_input search_input_1"  required="required" size=1>
										<option value="CLT">Charlotte</option>
										<option value="MIA">Miami</option>
										<option value="NYC">New York</option>
										<option value="PHL" selected >Philadelphia</option>
										<option value="PWM">Portland</option>
										<option value="SFO">San Fransico</option>
									</select>
									
									<select id="To" name="To" class="search_input search_input_2"  required="required" size=1>
										<option value="CLT">Charlotte</option>
										<option value="MIA" selected>Miami</option>
										<option value="NYC">New York</option>
										<option value="PHL">Philadelphia</option>
										<option value="PWM">Portland</option>
										<option value="SFO">San Fransico</option>
									</select>
										     
									<input id="seats" name="seats" type="Number" class="search_input search_input_3" placeholder="# Seats" required="required" value="1" min="1" max="15">
									<input id="tdate" name="tdate" type="Date" class="search_input search_input_4" required="required" min="2019-12-01" max="2020-03-31">
									<input id="rdate" name="rdate" type="Date" class="search_input search_input_5" min="2019-12-01" max="2020-03-31">
									<button class="home_search_button" >search</button>
									</div>
																
							</form>
						</div>
		</div>
	</div>
	
	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col"> 
					<div class="home_search_container">
					
					<!--static add -->
					<div class="box_general booking">
					<!--	<form method="post" action="book.html?name=Miami&price=$132.75" id="book_form"> -->
					        <form method="get" action="book.html" id="book_form">
							<div class="title">
							<h3>Select a Flight</h3>
							</div>
							<!-- /row -->
							<ul class="treatments clearfix">
								<li>
									<div class="checkbox">
									    <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<input type="checkbox" class="css-label" id="flight1" name="flight1">
											<label for="flight1" class="css-label" ><strong>$110</strong></label>
										</div>	
										<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<label for="flight1" class="css-label">PHL</label>
											<label for="flight1" class="css-label"><i class="fa fa-fighter-jet" aria-hidden="true"></i></label>
											<label for="flight1" class="css-label">MIA</label>
											<label for="flight1" class="css-label"><?php echo$row['tdate'];?></label>
											
										</div>
										<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<label for="flight1" class="css-label">9:00 am</label>
											<label for="flight1" class="css-label"></label>
											<label for="flight1" class="css-label">12:05 pm</label>
											<label for="flight1" class="css-label">3h 05m</label>	
										</div>
										<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<label for="flight1" class="css-label">MIA</label>
											<label for="flight1" class="css-label"><i class="fa fa-fighter-jet" aria-hidden="true"></i></label>
											<label for="flight1" class="css-label">PHL</label>
											<label for="flight1" class="css-label"><?php echo$row['rdate']; ?></label>
											
										</div>
										<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<label for="flight1" class="css-label">3:00 pm</label>
											<label for="flight1" class="css-label"></label>
											<label for="flight1" class="css-label">5:05 pm</label>
											<label for="flight1" class="css-label">3h 05m</label>	
										</div>
									</div>
								</li>
								<li>
									<div class="checkbox">
									    <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<input type="checkbox" class="css-label" id="flight2" name="flight1">
											<label for="flight1" class="css-label" ><strong>$125</strong></label>
										</div>	
										<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<label for="flight1" class="css-label">PHL</label>
											<label for="flight1" class="css-label"></label>
											<label for="flight1" class="css-label">MIA</label>
											<label for="flight1" class="css-label"></label>
											
										</div>
										<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<label for="flight1" class="css-label">9:00 am</label>
											<label for="flight1" class="css-label"><i class="fa fa-fighter-jet" aria-hidden="true"></i></label>
											<label for="flight1" class="css-label">12:05 pm</label>
											<label for="flight1" class="css-label">3h 05m</label>	
										</div>
										<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<label for="flight1" class="css-label">MIA</label>
											<label for="flight1" class="css-label"></label>
											<label for="flight1" class="css-label">PHL</label>
											<label for="flight1" class="css-label"></label>
											
										</div>
										<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<label for="flight1" class="css-label">10:00 am</label>
											<label for="flight1" class="css-label"><i class="fa fa-fighter-jet" aria-hidden="true"></i></label>
											<label for="flight1" class="css-label">1:05 pm</label>
											<label for="flight1" class="css-label">3h 05m</label>	
										</div>
									</div>
								</li>
								
							</ul>
							<hr>
							<button class="home_search_button">Book Flight</button>
						</form>
					</div>
					<!-- /box_general -->

					
					
					
					<!--end add -->
					
						<div class="home_search_title">Flights Matching your search</div>
						  <div class="home_search_result">
							
							<form method="post" action="book.html" class="home_search_form" id="book2_form">
								<button class="home_search_button">Book Flight</button>
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
								    
								
									<table class="table1">
										<thead><tr>
											<th>Flight Number</th>
											<th>Departure Time</th>
											<th>Arrival Time</th>
											<th>Fly Time</th>
											<th>Price</th>
											<th>Select</th>
										</tr></thead>
                                        <tbody>										
							
<?php
require_once "config.php";
$From = '"' .  $From . '"';
$To = '"' .  $To . '"';


//echo '    ---SQl' . $BookingType . ' ' . $From . ' ' . $To; 
//}

//$sql = "SELECT `FlightNumber`, `FromAirport`, `ToAirport`, `StartTime`, `EndTime`, `FlyTime` FROM `Flights` WHERE `FromAirport` = $From and `ToAirport` = $To";
$sql = "SELECT `Flights`.`FlightNumber`, `StartTime`, `EndTime`, `FlyTime`, `Price`, `NumberOfSeats` FROM `FlightPrice`, `Flights`";
$sql = $sql . "WHERE `Date` = $FromDate AND `FromAirport` = $From AND `ToAirport` = $To AND `FlightPrice`.`FlightNumber` = `Flights`.`FlightNumber`";

//echo '  sql -' . $sql;
$result = $link->query($sql);
if ($result->num_rows > 0)
	{
    // output data of each row
    while($row = $result->fetch_assoc())
	{
        $i = 0;
        $number = 0;
		 ?>
        <tr>
		<td> <?php echo $row['FlightNumber']; ?></td> 
		<td> <?php echo substr($row['StartTime'],0,5); ?></td>
		<td> <?php echo substr($row['EndTime'],0,5); ?></td>
		<td> <?php echo substr($row['FlyTime'],0,5); ?></td>
		<td> <?php echo '$'.$row['Price']; ?></td>
		<td><input type="checkbox" class="css-checkbox" id="<?php echo $row['FlightNumber']; ?>" name="<?php echo $row['FlightNumber']; ?>"></td>
		</tr>
		
	<?php
	}
} else {
    echo "0 results";
}
$Link->close();
?>
											</tbody>
									</table>
									
								</div>
							</form>
						  </div> 
					</div>
				</div>
			</div>
		</div>
	</div>

		
	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter">
						<div class="newsletter_title_container text-center">
							<div class="newsletter_title">Get the best deals first</div>
							<div class="newsletter_subtitle">Subscribe NOW!</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<div><input type="text" class="newsletter_input newsletter_input_name" id="newsletter_input_name" placeholder="Name" required="required"><div class="input_border"></div></div>
									<div><input type="email" class="newsletter_input newsletter_input_email" id="newsletter_input_email" placeholder="Your e-mail" required="required"><div class="input_border"></div></div>
								</div>
								<div><button class="newsletter_button">subscribe</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
								<div class="footer_contact_title">give us a call</div>
								<div class="footer_contact_list">
									<ul>
										<li>Office Landline: (800)100-1234</li>
										
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
								<div class="footer_contact_title">come & drop by</div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>1340 South Valley Forge Road, Lansdale, PA 19446</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
								<div class="footer_contact_title">send us a message</div>
								<div class="footer_contact_list">
									<ul>
										<li>youremail@sigma.com</li>
										<li>Office@sigma.com</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="footer_contact_row">
						<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
						    <div class="footer_contact_title">Find Us On</div>
								<div class="footer_social">
									<a href="https://www.facebook.com/"><i class="fa fa-facebook-official"></i></a>
									<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
									<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
									<a href="https://www.linkedin.com/login?fromSignIn=true&trk=guest_homepage-basic_nav-header-signin"><i class="fa fa-linkedin"></i></a>
								</div>
						</div>
					</div>	
					

					
				</div>
			</div>
		</div>
		<div class="col text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
	</footer>


  <div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <h4><i class="fa fa-user"></i> Login</h4> 
		 <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname">Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw">Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <p>Forgot <a href="#">Password?</a></p>
		  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">Cancel</button>
		  
        </div>
      </div>
      
    </div>
  </div> 

<script>
function btcheck() {
    
    if (document.getElementById('rt').checked) {
        document.getElementById('rdate').style.visibility = 'visible';
		document.getElementById('lrdt').style.visibility = 'visible';
    }
    else { 
		document.getElementById('rdate').style.visibility = 'hidden';
		document.getElementById('lrdt').style.visibility = 'hidden';
		}
}
</script>



	
</div>
</body>
</html>