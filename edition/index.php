<?php
	$date = date(w);
	$md5 = md5($date);
	header("ETag: ".$md5);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Constellatio</title>
		<style>
		</style>
	</head>
	<body>
	</body>
</html>