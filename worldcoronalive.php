<!DOCTYPE html>
<html>
<head>
	<title></title>
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

			<li class="nav-item">
				<a class="nav-link" href="index.php">IndiaCoronaLive</a>
			</li>

      <li class="nav-item">
				<a class="nav-link" href="indiadaywise.php">IndiaDayWiseCases</a>
			</li>

    </ul>
  </div>
</nav>

<!-- ******************Corona Update **************** -->



<section class="corona_update mt-5 container-fluid">
	<div class="mb-3">
		<h3 class="text-capitalize text-center">COVID-19 LIVE UPDATES OF THE WORLD</h3>
	</div>

	<?php

		$datap = file_get_contents("https://api.covid19api.com/summary");

		$coronalivep = json_decode($datap,true);

		// echo "<prev>";
		//
		// print_r($coronalive);
		//
		// echo "</prev>";

	//  echo $coronalive['statewise'][1]['state'];
	//	$countp = count($coronalivep['Global']);

		$activecases = $coronalivep['Global']['TotalConfirmed']- ($coronalivep['Global']['TotalDeaths'] +  $coronalivep['Global']['TotalRecovered']);

		?>

	<div class="d-flex justify-content-around align-items-center count_style">
		<div>
			<h1 class="count"><?php   echo $coronalivep['Global']['TotalConfirmed']; ?></h1>
			<p>Patient affected</p>
		</div>

		<div>
			<h1 class="count"><?php   echo $activecases; ?></h1>
			<p>Active Cases</p>
		</div>

		<div>
			<h1 class="count"><?php   echo $coronalivep['Global']['TotalRecovered'];?></h1>
			<p>Cured Patient</p>
		</div>

		<div>
			<h1 class="count"><?php   echo $coronalivep['Global']['TotalDeaths']; ?></h1>
			<p>Deaths</p>
		</div>
	</div>
</section>

<!-- **************************************************** -->

<section class="corona_update mt-5 container-fluid">

	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center " id="tbval">
			<thead class="thead">
			<tr class="sticky">
				<th>Country</th>
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>
				<th>TotalDeaths</th>
				<th>NewConfirmed</th>
				<th>NewRecovered</th>
				<th>NewDeaths</th>
			</tr>
		</thead>

			  <?php

			    $data = file_get_contents("https://api.covid19api.com/summary");

			    $coronalive = json_decode($data,true);

			    // echo "<prev>";
			    //
			    // print_r($coronalive);
			    //
			    // echo "</prev>";

			  //  echo $coronalive['statewise'][1]['state'];
			    $count = count($coronalive['Countries']);

			    $i=1;
			    while( $i < $count)
			    {
			      ?>
						<tbody>
			      <tr>
			        <td><?php   echo $coronalive['Countries'][$i-1]['Country'] ?></td>
			        <td><?php   echo $coronalive['Countries'][$i-1]['TotalConfirmed'] ?></td>
							<td><?php   echo $coronalive['Countries'][$i-1]['TotalRecovered'] ?></td>
							<td><?php   echo $coronalive['Countries'][$i-1]['TotalDeaths'] ?></td>
							<td><?php   echo $coronalive['Countries'][$i-1]['NewConfirmed'] ?></td>
							<td><?php   echo $coronalive['Countries'][$i-1]['NewRecovered'] ?></td>
							<td><?php   echo $coronalive['Countries'][$i-1]['NewDeaths'] ?></td>
			      </tr>
					</tbody>

			      <?php

			      $i++;
			    }

			  ?>

		</table>
	</div>
</section>

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
