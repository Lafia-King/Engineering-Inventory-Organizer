<?php
	include_once("dbconnection.php");
	
	class manufacturer extends dbconnection{
		function manufacturer(){
			dbconnection::dbconnection();
		}
		
		function get_all_manufacturers(){
			$query="select * from manufacturer";
			return $this->query($query);
		}
		
		function add_manufacturer(){
			
		}
		

		function update_manufacturer()
		}

		
	}

	
?>