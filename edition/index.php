<?php
	// Create eTag
	$date = date(W); // Set eTag based on number of week in year, so that eTag changes weekly
	$md5 = md5($date); // Create MD5 hash of $date
	header("ETag: ".$md5); // Set MD5 hash of $date as ETag and insert into header
	// Define variables for later use
	$constellation = "Cassiopeia";
	$imageURL = "cassiopeia.png";
	$description = "Cassiopeia is a constellation in the northern sky, named after the vain queen Cassiopeia in Greek mythology.";
	$visible = "This will describe where the constellation is visible from";
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
            			font-family:'Signika';
			}
			.page {
				width: 384px;
			}
			img {
				margin-top: 10px;
				margin-bottom: 10px;
			}
			h1 {
				font-family:'Signika';
				font-size: 30px;
			}
		</style>
	</head>
	<body>
		<div class="page">
			<h1><?php echo $constellation; ?></h1>
			<img src="<?php echo $imageURL; ?>" />
			<p><?php echo $description; ?></p>
			<p><?php echo $visible; ?></p>
		</div>
	</body>
</html>
