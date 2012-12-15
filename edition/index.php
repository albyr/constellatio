<?php
	// Create eTag
	$date = date(W); // Set eTag based on number of week in year, so that eTag changes weekly
	$md5 = md5($date); // Create MD5 hash of $date
	header("ETag: ".$md5); // Set MD5 hash of $date as ETag and insert into header
	// Define variables for later use
	$constellation = "Cassiopeia";
	$imageURL = "cassiopeia.png";
	$description = "Cassiopeia is a constellation in the northern sky, named after the vain queen Cassiopeia in Greek mythology.";
	$visible = "The easiest way to find Cassiopeia is to find Tsih, the central star of the 'W'. You can use the link below to have Wolfram Alpha show you Tsih's current location from your location.";
	$findlink = "http://wolfr.am/12fGqRk";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Constellatio</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<style>
			body {
            			margin: 0px;
            			padding: 0px;
            			border: 0px;
            			font-size: 25px;
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
				font-size: 40px;
				text-align: center;
			}
			p.findlink {
				font-size: 25px;
				font-family:'Courier New';
				text-decoration: underline;
				text-align: center;
			}
			p.visible {
				font-size: 20px;	
			}
		</style>
	</head>
	<body>
		<div class="page">
			<img class="dither" src="http://constellatio.mrreid.org/edition/header.jpg" />
			<h1><?php echo $constellation; ?></h1>
			<img src="http://constellatio.mrreid.org/edition/<?php echo $imageURL; ?>" />
			<p><?php echo $description; ?></p>
			<p class="visible"><?php echo $visible; ?></p>
			<p class="findlink"><?php echo $findlink; ?></p>
			<img class="dither" src="http://constellatio.mrreid.org/edition/footer.jpg" />
		</div>
	</body>
</html>
