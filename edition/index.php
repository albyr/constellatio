<?php
	// Create eTag
	$date = date(w);
	$md5 = md5($date);
	header("ETag: ".$md5);
	// Define variables
	// $constellation = "Cassiopeia";
	// $imageURL = "cassiopeia.png";
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
		</style>
	</head>
	<body>
		<?php echo $constellation ?>
	</body>
</html>
