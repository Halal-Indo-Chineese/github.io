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
									<li><a href="sigmiles.html">Σigmiles</a></li>
									<li><a href="jobs.html">Careers</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li class="menu_social"><a href="#"> Sign Up</a></li>
									<li class="menu_social"><a href="#">Login</a></li>
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
				<li><a href="sigmiles.html">Σigmiles</a></li>
				<li><a href="jobs.html">Careers</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="contact.html">Contact</a></li> 
				<li class="menu_social"><a href="register.php">Sign Up</a></li>
				<li class="menu_social"><a href="#">Login</a></li>
			</ul>
			
		</div>
		
	</div>
	
	<!-- Home -->
	<div class="home">
	
		<div class="background_image" style="background-image:url(images/sky1.jpg)"></div>
	</div>
	
	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col"> 
					<div class="home_search_container">
						<div class="home_search_title">Flights Matching your search</div>
						<div class="home_search_content">
							
							<form method="post" action="book.html" class="home_search_form" id="home_search_form">
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
// Check if the form is submitted 
//if ( isset( $_POST['submit'] ) ) { // retrieve the form data by using the element's name attributes value as key 


$From =$_POST['From']; 
$To =$_POST['To'];
$seats=$_POST['seats'];
$tdate = $_POST['tdate'];

$FromDate = '"' . $tdate . '"';

//echo 'To Date' . $tdate;
//echo '   You want flights from ' . $From . ' ' . $To . ' ' . $tdate . '  ' . $FromDate . '   ' . $seats; 

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
</div>
</body>

<?php
if (isset($_POST['btnSubmit'][0])) {
            echo '<h1>Save button was clicked</h1>'. $_POST['btnSubmit'][0];
   }
    die();

?>
