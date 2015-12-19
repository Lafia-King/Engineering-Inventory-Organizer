<html>
    <?php
    include("header.html");

    echo("<div><h1 style='color:#5f6468;'><b>Bookings</b></h1>"
//    . "<em>the first priority information</em>"
    . "<hr></div>");

//check connection to your database 
    $servername = "localhost"; //name of the server 
    $database = "inventorydb"; //this database has to exist.  
    $username = "root";  //the main admin user of mysql 
    $password = "";   //use root password of mysql 


    $link = mysql_connect($servername, $username, $password, $database);
//if result is false, the connection did not open 
    if (!$link) {
        echo "Failed to connect to mysql.";
        //display error message from mysql 
        echo mysql_error();
        exit();  //end script 
    }
//select the database to work with using the open connection  
    if (!mysql_select_db($database, $link)) {
        echo "Failed to select database.";
        //display error message from mysql 
        echo mysql_error();
        exit();
    }


    //begin running query for equipment info from inventorydb  for requests table
    $dataset = mysql_query("select * from booking", $link);
    if (!$dataset) {
        echo "Error";
        echo mysql_error();
        exit();
    }

    echo("<div>
        <h2 class='sub-header'>Requests</h2>
        </div>");

    echo ("<table class='table table-condensed table-hover'>");
    echo("<tr><th>ID</th> 
 		  <th>Tool Id</th> 
                  <th>User Id</th>
 		  <th>Date Booked</th> 
                  <th></th>
                   <th></th>
                  </tr> ");

    $row = mysql_fetch_assoc($dataset);
    while ($row) {
        echo ("<tr><td>");
        echo $row["id"];
        echo ("</td>");
        echo ("<td>");
        echo $row["equipment_id"];
        echo ("</td>");
        echo ("<td>");
        echo $row["user_id"];
        echo ("</td>");
        echo ("<td>");
        echo $row["date_booked"];
        echo ("</td>");


//        echo ("<td>");
//        echo $row["date_created"];
//        echo ("</td>");
//        echo ("<td>");
//        echo ("<button type='button' class='btn btn-primary btn-sm' style='width:100%;'>View</button>");
//        echo ("</td>");
        echo ("<td>");
        
        echo ("</td>");
        echo ("<td>");
        echo ("<a style='color:white; text-decoration:none' href='check_out_equipment.php?id={$row['id']}'><button type='button' class='btn btn-primary btn-sm' style='width:100%;'>Check-out</button></a>");
        echo ("</td>");
        echo ("</tr>");
        $row = mysql_fetch_assoc($dataset);
    }
    echo ("</table>");

    mysql_close($link);
    include("footer.html");
    ?> 