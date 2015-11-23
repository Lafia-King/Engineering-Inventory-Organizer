<html>
<head>
	<link rel="stylesheet" type="css" href="css/bootstrap.css">
</head> 
<body>
<?php

	include_once("view_equipment.php");
	
		$newView = new view_equipment();
		$newView->getEquipment();		
		$row = $newView->fetch();
		
?>
</body> 
</html>