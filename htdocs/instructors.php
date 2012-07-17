<?

if (!empty($_POST['code'])) {
	$code = $_POST['code'];
	require_once 'AccessCode.php';
	
	$Access = new AccessCode;
	
	if ($Access->checkCode($code)) {
		$url = '/instructors-private.html';
		header('Location: ' . $url);
	} else {
		die('Access code invalid.  Sorry.');
	}
}

?>


<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
	  <title>Mainstream Preppers - Thriving through Good Times and Bad</title>
  
	  <link rel="shortcut icon" href="favicon.ico" />
  
	  <meta name="description" content="">
  
	  <link rel="stylesheet" href="css/base.css">
  
    
	  <script type="text/javascript">

				 var _gaq = _gaq || [];
				 _gaq.push(['_setAccount', 'UA-31234979-3']);
				 _gaq.push(['_trackPageview']);
			
				 (function() {
				   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				 })();

	</script>

  	<style type="text/css" media="screen">
		body {
			margin-top: 200px;
			text-align: center;
			font-family: Arial;
		}
	</style>

  

</head>

<body>
	<img src="images/mainstream-preppers-logo.png" title="Mainstream Preppers" alt="Mainstream Preppers" /><br />
  	
	<h2>MSP Instructor Program</h2>
<h4>When/Why/How to get Involved</h4>
	<h5>At this time, access to our Instructor Program is by Invitation Only</h5>

	<form method="post" action="">
		<label>
			Access Code:
			<input type="text" name="code" value="" id="code" />
		</label>
		<br />
		<br />
		<input type="submit" name="submit" value="Enter" id="submit" />
	</form>
	
	<p>Are you a trainer/instructor/coach but don't have an access code?<br>
	Fear Not.  We want to hear from you.  Simply <a href="contact">request an invitation</a>.
	</p>
</body>
</html>