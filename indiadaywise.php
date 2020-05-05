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
				<a class="nav-link" href="worldcoronalive.php">WorldCoronaLive</a>
			</li>

      <li class="nav-item">
				<a class="nav-link" href="index.php">IndiaCoronaLive</a>
			</li>

    </ul>
  </div>
</nav>

<!-- ******************Corona Update **************** -->


<section class="corona_update mt-5 container-fluid">
	<div class="my-5">
		<h3 class="text-capitalize text-center">COVID-19 LIVE UPDATES OF THE INDIA</h3>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center">

  <?php

    $data = file_get_contents("https://api.covid19india.org/data.json");

    $coronadata = json_decode($data,true);
    // echo "<prev>";
    // print_r($coronalive);
    // echo "</prev>";
    //  echo $coronalive['statewise'][1]['state'];
    $totalcount = count($coronadata['cases_time_series']);

    $i=1;
    while( $i < $totalcount)
    {
      ?>

      <tr>
        <th class="text-left" colspan="6"> Date & Month</th>
      </tr>
      <tr>
        <td colspan="6" class="text-left"> <?php echo $coronadata['cases_time_series'][$i]['date'] . "</br>"; ?></td>
      </tr>
      <tr class="text-capitalize text-white">
        <th style="color: #fff; background: #2196f3;">total confirmed</th>
        <th style="color: #fff; background: #ffc107;">daily confirmed</th>
        <th style="color: #fff; background: #008c76FF;">daily recovered</th>
        <th style="color: #fff; background: #e91e7f;">daily deceased</th>
        <th style="color: #fff; background: #4caf50;">total recovered</th>
        <th style="color: #fff; background: #EE2737FF;">total deceased</th>
      </tr>

      <tr class="mb-5">
          <td style="background: #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['totalconfirmed']."</br>" ; ?></td>
          <td style="background: #ffe493;"><?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed']."</br>" ; ?></td>
          <td style="background: #9ED9CCFF;"><?php echo $coronadata['cases_time_series'][$i]['dailyrecovered']."</br>" ; ?></td>
          <td style="background: #fc95c6;"><?php echo $coronadata['cases_time_series'][$i]['dailydeceased']."</br>" ; ?></td>
          <td style="background: #88d28b;"><?php echo $coronadata['cases_time_series'][$i]['totalrecovered']."</br>" ; ?></td>
          <td style="background: #fb99a1;"><?php echo $coronadata['cases_time_series'][$i]['totaldeceased']."</br>" ; ?></td>
      </tr>
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
