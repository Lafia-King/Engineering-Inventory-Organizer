<?php

/** @author Phoebe Priscilla Amoako
	 *@author Phoebe Priscilla Amoako (phoebe.amoako@ashesi.edu.gh)
	 */
	 
		include_once("viewEquipment.php");
		
		$view = new viewEquipment();
		$view -> getEquipment();		
		$row = $view->fetch();
		
		echo("<div>
				<h2 class='sub-header'>Requests</h2>
			</div>");

    echo ("<table class='table table-condensed table-hover table-bordered'>");
    echo("<tr><th>ID</th> 
 		  <th>Name</th> 
 		  <th>Equipment Id</th> 
 		  <th>Current Condition</th> 
 		  <th>Borrow Status</th> 
 		  <th>Date Created</th></tr> ");

    while ($row) {
        echo ("<tr><td>");
        echo $row["id"];
        echo ("</td>");
        echo ("<td>");
        echo $row["name"];
        echo ("</td>");
        echo ("<td>");
        echo $row["equipment_id"];
        echo ("</td>");
        echo ("<td>");
        echo $row["current_condition"];
        echo ("</td>");
        echo ("<td>");
        echo $row["borrow_status"];
        echo ("</td>");
        echo ("<td>");
        echo $row["date_created"];
        echo ("</td>");
        echo ("</tr>");
        $row = $view->fetch();
    }
    echo ("</table>");
    ?> 