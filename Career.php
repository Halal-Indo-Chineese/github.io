<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Sigma.css"> 

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />     
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" />     
<Script src="https://code.jquery.com/jquery-1.12.3.js" type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js" type="text/javascript"></Script>     
<Script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js" type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js" type="text/javascript"></Script>
<title>Careers</title>
</head>

<body style="background-color:black"> 
<div class="topnav">
  <a class="active" href="Index.html">Sigma Airlines</a>
  <a href="Search.php">Book Flights</a>
  <a href="Schedule.php">Flight Schedule</a>
  <a href="FrequentFP.html">Frequent flyer program</a>
  <a href="Career.php">Career</a>
  <a href="Login.html">Login</a> 
</div>

<div style="text-align:center; color:white">

<br><br>
<h2>Sigma Airlines Career Page</h2>
<br><br>

<p><b>About Working at Sigma Airlines</b></p>
<p>•	Minimum Age to Work at Sigma Airlines: 18 years old (How old do you have to be to work at American Airlines?)</p>
<p>•	Sigma Airlines Hours of Operation: Available 24 hours a day, 7 days a week</p>
<p>•	Available Positions at Sigma Airlines: Baggage handler, customer service representative, flight attendant, ramp agent, ticket agent</p>
<p>•	Printable Application: Yes. Print Sigma Airlines application (PDF) or Search Job Openings below.</p>
<br>
<p><b>How to apply for a Job</b></p>
<p>•	Candidates can apply online by submitting a Sigma Airlines job application through LinkedIn or the company career portal.</p>
<p>•	Be sure to attach an updated resume and highlight how past employment is relevant. Most applicants spend between 15 and 30 minutes on the forms.</p>
<p>•	Please see below for the current job postings.</p>





<table id="jobs" >
  <thead>
  <col width="160">
  <col width="480">
  <col width="320">
  <col width="160">
  <tr>
    <th>Rec Number</th>
	<th>Job Title</th>
    <th>Location</th>
    <th>Date</th>
  </tr>
  </thead>
  
   <tbody>
<?php
   // Include config file
   require_once "config.php";
 
   $sql = "SELECT `Job Titles`, `RecNumber`, `Location`, `JobCategory`, `Description`, `Date` FROM `Job Titles`";
   $result = $link->query($sql);
   if ($result->num_rows > 0)
	{
    // output data of each row
	
    while($row = $result->fetch_assoc())
	{
		 
		 ?>
        <tr>
		<td> <?php echo $row['RecNumber']; ?></td> 
		<td><a href="<?php echo $row['RecNumber']; ?>.html" style='color:white'><?php echo $row['Job Titles']; ?></a></td>
		<td> <?php echo $row['Location']; ?></td> 
		<td> <?php echo $row['Date']; ?></td>
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
</body>
</font></h5>
</html>