<?php //background include

		$thisFileName = $_SERVER["SCRIPT_FILENAME"];
		//echo $thisFileName;
		$thisFileName = explode("/", $thisFileName);
		//echo $thisFileName[1];
		//echo $thisFileName[4]."<br>";

		$thisFileNameLength = count($thisFileName)-1;
		//echo $thisFileNameLength;
		//echo $thisFileName[$thisFileNameLength];
		
		
		$thisFileName = $thisFileName[$thisFileNameLength];
		// echo "this file name ".$thisFileName."<br>";
		if($thisFileName == "index.php" || $thisFileName == "stickyFooter.php"){
			$thisParentDir = "includes/";
			//echo "<br>file must be index<br>";
			//$thisParentDir = "../";
		} else {
			$thisParentDir = "../";
		}
		//echo "this parent dir ".$thisParentDir."<br>";
		

		//phpinfo(INFO_VARIABLES);
		if($thisParentDir == "includes/") {
			$dirToReadImages = "backgrounds/";
		} else {
			$dirToReadImages = "../backgrounds/";
		}
		// echo "dir to read images ".$dirToReadImages."<br>";
		
		$filesToCount = scandir($dirToReadImages);
		$num_files = count($filesToCount)-2;
		// echo $num_files;
		
		//echo(rand(1,$num_files));
		$getRrandomImg = (rand(1,$num_files));
		if($getRrandomImg < 10){
			$getRrandomImg = "0".$getRrandomImg;
		}
		// echo $getRrandomImg;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>bg</title>
		<?php
		//echo $thisFileName;
		if($thisFileName == "bg.php"){
		?>
			<script src="../js/jquery-1.10.2.js"></script>
		<?php
		}
		?>
	</head>
	<style>
		#bg{
			position:absolute;
			top:0px;
			left:0px;
			width:100%;
			height:100%;
			margin:0px;
			padding:0px;
			background:url('<?php echo '../'.$dirToReadImages;?>bg_<?php echo $getRrandomImg;?>.JPG')no-repeat;
			/*background:url('../backgrounds/bg_01.JPG') no-repeat;*/
			background-size:100% 100%;
			opacity: 0.5;
			/*display:none;*/
		}
	</style>

	<body>
		<div id="bg">
			&nbsp;
		</div>
	</body>
	<script>
	$( document ).ready(function() {
    	//alert( "ready!" );
    	$("#bg").css({
    		"background":"url('<?php echo $dirToReadImages;?>bg_<?php echo $getRrandomImg;?>.jpg')",
    		"background-size":"100% 100%"
    	})
    	$("#bg").stop().fadeIn("slow");
    	

	});	
	</script>
</html>
