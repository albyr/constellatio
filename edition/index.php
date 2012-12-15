<?php
	// Create eTag
	$date = date(W); // Set eTag based on number of week in year, so that eTag changes weekly
	$md5 = md5($date); // Create MD5 hash of $date
	header("ETag: ".$md5); // Set MD5 hash of $date as ETag and insert into header
	// Define variables for later use
	$constellation = "Cassiopeia";
	$alsoknown = "the Seated Queen";
	$imageURL = "cassiopeia.png";
	$description = "Cassiopeia is a constellation in the northern sky, named after the vain queen Cassiopeia in Greek mythology.";
	$visible = "You can use the Wolfram Alpha link below to find the current location of Tsih, the central star in Cassiopeia.";
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
            			font-size: 22px;
            			font-family:'Georgia';
			}
			.page {
				margin: 0px;
            			padding: 0px;
            			border: 0px;
            			width: 384px;
			}
			img {
				margin-top: 10px;
				margin-bottom: 10px;
			}
			.constellationname {
				font-size: 40px;
				text-align: center;
			}
			.alsoknown {
				text-align: center;
				font-size: 20px;#
			}
			.description {
			}
			}
			.visible {
				font-size: 20px;	
			}
			.findlink {
				font-size: 24px;
				font-family:'Courier New';
				text-decoration: underline;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="page">
			<div class="constellationname"><?php echo $constellation; ?></div>
			<div class="alsoknown">aka <?php echo $alsoknown; ?></div>
			<img src="http://constellatio.mrreid.org/edition/<?php echo $imageURL; ?>" />
			<div class="description"><?php echo $description; ?></div>
			<div class="visible"><?php echo $visible; ?></div>
			<div class="findlink"><?php echo $findlink; ?></div>
			<img class="dither" src="http://constellatio.mrreid.org/edition/footer.jpg" />
		</div>
	</body>
</html>
