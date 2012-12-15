<?php
	// Create eTag
	$date = date(w);
	$eTag = md5($date);
	header("ETag: ".$eTag);
	// Define variables
	$constellation = "Cassiopeia";
	$imageURL = "cassiopeia.png";
<!DOCTYPE html>
<html>
	<head>
		<title>Constellatio</title>
		<style>
			body {
            			margin: 0;
            			padding: 0;
            			border: 0;
            			font-size: 20px;
            			font-family:'St Ryde';
			}
			.page {
				width: 384px;
			}
		</style>
	</head>
	<body>
		<?php echo $constellation ?>
	</body>
</html>
?>
