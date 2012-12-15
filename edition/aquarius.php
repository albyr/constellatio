<?php
	// Create eTag
	$date = date(W); // Set eTag based on number of week in year, so that eTag changes weekly
	$md5 = md5($date); // Create MD5 hash of $date
	header("ETag: ".$md5); // Set MD5 hash of $date as ETag and insert into header
	// Define variables for later use
	$constellation = "Cassiopeia"; // Latin name of constellation
	$alsoknown = "the Seated Queen"; // Alternate 'symbolism' name
	$imageURL = "cassiopeia.png"; // Relative URL to constellation image
	$description = "Cassiopeia is a constellation in the northern sky, named after the vain queen Cassiopeia from Greek mythology."; // Description of constellation
	$visible = "To help you find Cassiopeia, the link below will show you the current position of Tsih, its central star."; // How to find this constellation in the night sky
	$findlink = "http://wolfr.am/12fGqRk"; // Link to constellation location
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
			}
			.constellationname {
				font-size: 40px;
				text-align: center;
			}
			.alsoknown {
				font-size: 20px;
				text-align: center;
			}
			.visible {
				font-size: 20px;	
			}
			.findlink {
				padding-top: 5px;
				font-size: 24px;
				font-family:'Latin Modern Mono Prop Light';
				text-decoration: underline;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="page">
			<div class="constellationname"><?php echo $constellation; ?></div>
			<div class="alsoknown"><?php echo $alsoknown; ?></div>
			<img src="http://constellatio.mrreid.org/edition/<?php echo $imageURL; ?>" />
			<p><?php echo $description; ?></p>
			<div class="visible"><?php echo $visible; ?></div>
			<div class="findlink"><strong><?php echo $findlink; ?><strong></div>
			<img class="dither" src="http://constellatio.mrreid.org/edition/footer.jpg" />
		</div>
	</body>
</html>
