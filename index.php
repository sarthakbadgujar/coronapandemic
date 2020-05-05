<!DOCTYPE html>
<html>
<head>
	<title>CoronavirusBreakthrough</title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#symptomsid">Symptoms</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#precautionsid">Precautions</a>
      </li>

			<li class="nav-item">
				<a class="nav-link" href="worldcoronalive.php">WorldCoronaLive</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="indiadaywise.php">IndiaDayWiseCases</a>
			</li>

      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center corona_rotate">
				<img src="images/coronaimg.png" width="300" height="300">
			</div>
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Stay Home Stay Safe<br>Thanks to the corona Fighters<br>Lets fight with corona make our country corona free</h1>
			</div>
		</div>
	</div>
</div>

<!-- ******************Corona Update **************** -->


<section class="corona_update mt-5 container-fluid">
	<div class="mb-3">
		<h3 class="text-capitalize text-center">COVID-19 LIVE UPDATES OF THE INDIA</h3>
	</div>

	<?php

		$datap = file_get_contents("https://api.covid19india.org/data.json");

		$coronalivep = json_decode($datap,true);

		// echo "<prev>";
		//
		// print_r($coronalive);
		//
		// echo "</prev>";

	//  echo $coronalive['statewise'][1]['state'];
//		$countp = count($coronalivep['Global']);

		?>

	<div class="d-flex justify-content-around align-items-center count_style">
		<div>
			<h1 class="count"><?php   echo $coronalivep['statewise'][0]['confirmed']; ?></h1>
			<p>Patient affected</p>
		</div>

		<div>
			<h1 class="count"><?php   echo $coronalivep['statewise'][0]['active']; ?></h1>
			<p>Active Cases</p>
		</div>

		<div>
			<h1 class="count"><?php   echo $coronalivep['statewise'][0]['recovered']; ?></h1>
			<p>Cured Patient</p>
		</div>

		<div>
			<h1 class="count"><?php   echo $coronalivep['statewise'][0]['deaths']; ?></h1>
			<p>Deaths</p>
		</div>
	</div>
</section>

<!-- ************************************************************* -->


<section class="corona_update mt-5 container-fluid">


	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center">
			<tr>
				<th class="text-capitalize" >Lastupdated</th>
				<th class="text-capitalize" >State</th>
				<th class="text-capitalize" >confirmed</th>
				<th class="text-capitalize" >active</th>
				<th class="text-capitalize" >recovered</th>
				<th class="text-capitalize" >deaths</th>
			</tr>

  <?php

    $data = file_get_contents("https://api.covid19india.org/data.json");

    $coronalive = json_decode($data,true);

    // echo "<prev>";
    //
    // print_r($coronalive);
    //
    // echo "</prev>";

  //  echo $coronalive['statewise'][1]['state'];
    $statescount = count($coronalive['statewise']);

    $i=1;
    while( $i < $statescount)
    {
      ?>

      <tr>
        <td><?php   echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
        <td><?php   echo $coronalive['statewise'][$i]['state'] ?></td>
        <td><?php   echo $coronalive['statewise'][$i]['confirmed'] ?></td>
        <td><?php   echo $coronalive['statewise'][$i]['active'] ?></td>
        <td><?php   echo $coronalive['statewise'][$i]['recovered'] ?></td>
        <td><?php   echo $coronalive['statewise'][$i]['deaths'] ?></td>
      </tr>

      <?php

      $i++;
    }

  ?>


		</table>
	</div>
</section>
<!-- ******************** About section *******************-->

<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> About COVID-19</h1>
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="images/info-1.jpg" class="img-fluid" width="400" height="300">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is coronavirus ?</h2>
			<p>Coronaviruses are a large family of viruses which may cause illness in animals or humans.  In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.</p>
			<p>COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019. COVID-19 is now a pandemic affecting many countries globally.</p>
		</div>

		<div class="col-lg-5 col-md-6 col-12 ml-5 mt-5 about_res">
			<img src="images/info-3.jpg" class="img-fluid" width="400" height="300">
		</div>

		<div class="col-lg-6 col-md-6 col-12 mt-5">
			<h2>How does COVID-19 Spreads ?</h2>
			<p>People can catch COVID-19 from others who have the virus. The disease spreads primarily from person to person through small droplets from the nose or mouth, which are expelled when a person with COVID-19 coughs, sneezes, or speaks. These droplets are relatively heavy, do not travel far and quickly sink to the ground. People can catch COVID-19 if they breathe in these droplets from a person infected with the virus. This is why it is important to stay at least 1 metre (3 feet) away from others. These droplets can land on objects and surfaces around the person such as tables, doorknobs and handrails. People can become infected by touching these objects or surfaces, then touching their eyes, nose or mouth. This is why it is important to wash your hands regularly with soap and water or clean with alcohol-based hand rub.</p>
			<p>WHO is assessing ongoing research on the ways that COVID-19 is spread and will continue to share updated findings.</p>
		</div>
	</div>
</div>

<!-- ******************** coronavirus symptoms *******************-->

<div class="container-fluid pt-5 pb-5 " id="symptomsid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Coronavirus symptoms </h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="120" height="120">
				<figcaption>cough</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/difficultyinbreath.png" class="img-fluid" width="120" height="120">
				<figcaption>difficulty in breath</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/fever.png" class="img-fluid" width="120" height="120">
				<figcaption>fever</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/runnynose.png" class="img-fluid" width="120" height="120">
				<figcaption>runny nose</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/sorethroat.png" class="img-fluid" width="120" height="120">
				<figcaption>sore throat</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/pain.png" class="img-fluid" width="120" height="120">
				<figcaption>pain in muscles</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<!--***************************Steps of prevention*******************-->

<div class="container-fluid sub_section pt-5 pb-5 " id="precautionsid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> 6 steps Prevention Against Coronavirus </h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/washhand.png" class="img-fluid" width="90" height="90">
					</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>1.Wash your hand for 20 seconds to win against coronavirus.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/mouth.png" class="img-fluid" width="90" height="90">
					</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>2.Avoid Touching your mouth and Nose.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/covermouth.png" class="img-fluid" width="90" height="90">
					</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>3.Cover your nose with the bend of elbow or tissue . </p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/distance.jpg" class="img-fluid" width="90" height="90">
					</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>4.Avoid crowded places.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/home.jpg" class="img-fluid" width="90" height="90">
					</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>5.Stay at home if you feel unwell- Even with a slight fever and cough.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/tv.jpg" class="img-fluid" width="90" height="90">
					</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>6.Stay informed by watching news and follow the recommended practices.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--******************* Contact Us ***********************-->

<div class="container-fluid pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Us</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
<form action="" method="POST">

 <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>

   <div class="form-group">
    <label>Mobile No</label>
    <input type="number"class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>

  <div class="form-group">
  	<label>Select Symptoms</label><br>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="Cold">
  		<label class="custom-control-label" for="customcheckbox1">Cold</label>
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="Fever">
  		<label class="custom-control-label" for="customcheckbox2">Fever</label>
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
  		<label class="custom-control-label" for="customcheckbox3">difficulty in breathing</label>
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
  		<label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
  	</div>

  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1" >Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
			</div>
		</div>
	</div>
</div>


<!--- Top cursor -->

<div class="container scrolltop float-right pr-5">
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</div>

<!-- Footer -->
<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<p>@copyright by sarthak badgujar</p>
	</div>
</footer>



<script>

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



</script>


</body>
</html>




<?php
include 'dbcon.php';

if(isset($_POST['submit']))
{

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$msg = $_POST['msg'];

	$chk = "";
	foreach ($symp as $chk1) {
		$chk .= $chk1."," ;
	}

	$insertquery = " insert into coronacase(username,email,mobile,symp,message) values('$name','$email','$mobile','$chk','$msg')";

	$query = mysqli_query($con,$insertquery);

	if($query){
		?>

		<script>
			alert("Your data is submitted");
		</script>
		<?php
}else
{
		?>

		<script>
			alert("No inserted");
		</script>
		<?php
}


}

?>
