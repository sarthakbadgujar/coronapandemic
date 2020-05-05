<?php

$server= 'localhost';
$user = 'id13534510_root';
$password= 'kz-#b5At]S/t7@Y^';
$db= 'id13534510_coronadb';

$con = mysqli_connect($server,$user,$password,$db);

if($con){
	?>

	<script>
		//alert("connection successful");
	</script>
	<?php
}else{
	?>

	<script>
		alert("No connection");
	</script>
	<?php
}

?>
