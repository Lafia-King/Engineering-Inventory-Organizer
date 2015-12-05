<?php
//Only the adminstrator has access to this page. when the administrator wants to approve a booking he simply views the booking on this page and gives approval by clicking the 'approve checkout button'//

include_once("..\Model\db.php");

?>


<html>

	<head></head>


	<title>Checkout Page</title>

	


<!-- If the admin wants to checkout an item for a user he comes to this page.
On this page he sees the list of all bookings-->
	<body>
		




		<?php
		view_bookings();

		?>


	</body>

</html>