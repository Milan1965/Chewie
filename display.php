
	<?php require_once('Core/Configuration/config.php'); ?>

	<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>
	
		<head>	
			
			
	<link href="Internal/Css/main.css" rel="stylesheet">
			
			<title>Site Game</title>
            
	</head>
	
	<body>
		
	<?php header($SSL_Encryption . '://' . $URL_Redirect . $Domain_Type); ?>
		
	<!--List of the requirements to make sure the system is fully functional!-->
	
	<?php require($Core_Folder . '/system.php'); ?>
		
	<?php require($Scale_Folder . $Back_Slash . '/indicator.html'); ?>
		
		<?php require($IMP_Folder . $Back_Slash . $HTML_Folder . '/footer.html'); ?>
        
		  <?php require($IMP_Folder . $Back_Slash . $HTML_Folder . '/explaination.html'); ?>
		
			<?php require_once($IMP_Folder . $Back_Slash . $HTML_Folder . '/upgrade.html'); ?>
		



	</body>
	
</html>
