<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
<!--This is the page that is inserted into the content's index.php-->
	<?php
		$thisFileName = $_SERVER["SCRIPT_FILENAME"];
		$thisFileName = explode("/", $thisFileName);
		//echo $thisFileName[5]."<br>";

		$thisFileNameLength = count($thisFileName)-1;
		
		//echo $thisFileNameLength;
		//echo $thisFileName[$thisFileNameLength];
		$thisFileName = $thisFileName[$thisFileNameLength];
		//echo $thisFileName;
		if($thisFileName != "kritterSlider.php"){
			$thisParentDir = "./slider/";
		} else {
			$thisParentDir = "./";
		}
		// echo $thisParentDir;
		//phpinfo(INFO_VARIABLES);
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>flyOutMenu</title>
		<meta name="description" content="">
		<meta name="author" content="Jeffrobe">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="<?php echo $thisParentDir;?>css/light.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $thisParentDir;?>css/dark.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $thisParentDir;?>css/bar.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $thisParentDir;?>css/slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $thisParentDir;?>css/kritter_style.css" type="text/css" media="screen" />
			<div class="slider-wrapper theme-default">
				<img src="./slider/jpgs-890x350/weThinkFirst-890X350.jpg" alt="We think first" title="we think first"/>
				<div id="slider" class="nivoSlider">
					<img src="<?php echo $thisParentDir;?>jpgs-890x350/weThinkFirst-890X350.jpg" alt="We think first" title="we think first"/>
					<img src="<?php echo $thisParentDir;?>jpgs-890x350/thenDesignSecond-890x350.jpg" alt="then we design" title="then we design"/>
					<img src="<?php echo $thisParentDir;?>jpgs-890x350/afterThatWeDevelop-890x350.jpg" alt="after that we develop" title="after that we develop"/>
					<img src="<?php echo $thisParentDir;?>jpgs-890x350/thenTestAndImplement-890-350.jpg" alt="then test and implement" title="then test and implement"/>
					<img src="<?php echo $thisParentDir;?>jpgs-890x350/finallyEvaluateJudgeAndReview-890x350.jpg" alt="finally evaluate judge and review" title="finally evaluate judge and review"/>
				</div>
			</div><!-- end .slider-wrapper -->
		<script type="text/javascript" src="<?php //echo $thisParentDir;?>js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $thisParentDir;?>js/jquery.slider.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider();
			});
		</script>
</html>
