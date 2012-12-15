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
            			margin: 0px;
            			padding: 0px;
            			border: 0px;
            			font-size: 22px;
            			font-family:'Signika';
			}
			.page {
				width: 384px;
			}
			img {
				margin-top: 10px;
				margin-bottom: 10px;
			}
			p.constellationname {
				font-size: 40px;
				text-align: center;
			}
			p.alsoknown {
				text-align: center;
				font-size: 20px;#
			}
			p.visible {
				font-size: 20px;	
			}
			p.findlink {
				font-size: 24px;
				font-family:'Courier New';
				text-decoration: underline;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="page">
			<p class="constellationname"><?php echo $constellation; ?></p>
			<p class="alsoknown">aka <?php echo $alsoknown; ?></p>
			<img src="http://constellatio.mrreid.org/edition/<?php echo $imageURL; ?>" />
			<p><?php echo $description; ?></p>
			<p class="visible"><?php echo $visible; ?></p>
			<p class="findlink"><?php echo $findlink; ?></p>
			<img class="dither" src="http://constellatio.mrreid.org/edition/footer.jpg" />
		</div>
	</body>
</html>
