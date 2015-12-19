<?php
	
    include("header.html");
    echo("<div><h1 style='color:#5f6468;'><b>Equipment</b></h1>"
    . "<hr></div>");
	
	include_once("viewEquipment.php");
		
		$view = new viewEquipment();
		$view -> getEquipment();		
		$row = $view->fetch();
		
    echo("<div>
        <h2 class='sub-header'>Requests</h2>
        </div>");

    echo ("<table class='table table-condensed table-hover'>");
    echo("<tr><th>ID</th> 
 		  <th>Name</th> 
 		  <th>Equipment Id</th> 
                  <th>Location</th>
 		  <th>Condition</th>
                  <th>Label</th>
                  <th>Asset Type</th>
 		  <th>Borrow Status</th>
                  <th><button type='button' class='btn btn-success btn-sm' style='width:100%;'>Add</button></th>
                  </tr> ");

    while ($row) {
        $id = $row["id"];
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
        echo $row["storage_location"];
        echo ("</td>");
        echo ("<td>");
        echo $row["current_condition"];
        echo ("</td>");
        echo ("<td>");
        echo $row["label"];
        echo ("</td>");
        echo ("<td>");
        echo $row["asset_type"];
        echo ("</td>");
        echo ("<td>");
        echo $row["borrow_status"];
        echo ("</td>");
        echo ("<td>");
        echo ("<button type='button' class='btn btn-primary btn-sm' style='width:100%;'><a style='color:white; text-decoration:none' href='view_equipment.php?id=$id'>Edit</a></button>");
        echo ("</td>");
        echo ("<td>");
        echo ("<button type='button' class='btn btn-primary btn-sm' style='width:100%;'><a style='color:white; text-decoration:none' href = 'displaySingleEquipment.php?id=$id'>View</button>");
        echo ("</td>");
        echo ("</tr>");
        $row = $view->fetch();
    }
    echo ("</table>");

    include("footer.html");
    ?> 