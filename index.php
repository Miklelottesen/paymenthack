<?php
	$iframeUrl = $_GET['url'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Princh Payment</title>
	<style>
		body, iframe {
			margin: 0!important;
			padding: 0!important;
			border: none!important;
		}
		body {
			overflow: hidden!important;
		}
		iframe {
			width: 100vw!important;
			height: 100vh!important;
		}
	</style>
</head>
<body>
	<?php if($iframeUrl == "") { ?>
	<p>No URL found</p>
	<?php } else { ?>
	<iframe src="<?php echo $iframeUrl; ?>"></iframe>
	<?php } ?>
</body>
</html>