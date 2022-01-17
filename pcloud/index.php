<!DOCTYPE html>
<html>
<head>
	<title>pCloud</title>
	<meta name="robots" content="noindex">
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
	<script src="assets/js/scripts.min.js"></script>
	<script type="text/javascript" src="https://ssl.p.jwpcdn.com/player/v/8.8.6/jwplayer.js"></script>
	<script type="text/javascript">jwplayer.key="cLGMn8T20tGvW+0eXPhq4NNmLB57TrscPjd1IyJF84o=";</script>
	<style type="text/css" media="screen">html,body{padding:0;margin:0;height:100%}#apicodes-player{width:100%!important;height:100%!important;overflow:hidden;background-color:#000}</style>
</head>
<body>

<?php 
		error_reporting(0);
		
		$link = (isset($_GET['link'])) ? $_GET['link'] : '';

		$sub = (isset($_GET['sub'])) ? $_GET['sub'] : '';

		$poster = (isset($_GET['poster'])) ? $_GET['poster'] : '';

		if ($link != '') {
 			
 				preg_match('/code=(.*)/', $link, $matchID);
				echo '<div id="apicodes-player"></div><script type="text/javascript">var shareId = "'.$matchID[1].'", sub = "'.$sub.'", poster = "'.$poster.'"</script>';

		} else echo 'Link not found!';
?>
</body>
</html>

