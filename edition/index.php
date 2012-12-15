<?php
	// Create eTag
	$date = date(W); // Set eTag based on number of week in year, so that eTag changes weekly
	$md5 = md5($date); // Create MD5 hash of $date
	header("ETag: ".$md5); // Set MD5 hash of $date as ETag and insert into header
	// Define variables for later use
	$constellation = "Camelopardalis";
	$imageURL = "cassiopeia.png";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Constellatio</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
			img {
				margin-top: 10px;
				margin-bottom: 10px;
			}
			h1 {
				font-size: 30px;
			}
		</style>
	</head>
	<body>
		<?php echo "<h1>" $constellation "</h1>"; ?>
	</body>
</html>
