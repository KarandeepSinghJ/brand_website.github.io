<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'brand';

$conn = mysqli_connect($server, $username, $password, $db);

if($conn) {
	?>
	<script>
		alert("Connected Successfully");
	</script>
	<?php
}else {
	?>
	<script>
		alert("No Connection");
	</script>
	<?php
}

?>