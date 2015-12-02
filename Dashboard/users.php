<html>
    <?php
    include("header.html");
    echo("<div><h1 style='color:#5f6468;'><b>Users</b></h1>"
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
    $dataset = mysql_query("select * from user", $link);
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
 		  <th>Name</th> 
 		  <th>Username</th>
                  <th>user Id</th>
                  <th>Email</th>
                  <th>User Type</th> 
                  <th><button type='button' class='btn btn-success btn-sm' style='width:100%;'>Add</button></th>
                  </tr> ");

    $row = mysql_fetch_assoc($dataset);
    while ($row) {
        echo ("<tr><td>");
        echo $row["id"];
        echo ("</td>");
        echo ("<td>");
        echo $row["username"];
        echo ("</td>");
        echo ("<td>");
        echo $row["user_id"];
        echo ("</td>");
        echo ("<td>");
        echo $row["user_id"];
        echo ("</td>");
        echo ("<td>");
        echo $row["email"];
        echo ("</td>");
       echo ("<td>");
        echo $row["user_type"];
        echo ("</td>");
        
//        echo ("<td>");
//        echo $row["date_created"];
//        echo ("</td>");
//        echo ("<td>");
//        echo ("<button type='button' class='btn btn-primary btn-sm' style='width:100%;'>View</button>");
//        echo ("</td>");
         echo ("<td>");
        echo ("<button type='button' class='btn btn-primary btn-sm' style='width:100%;'>Edit</button>");
        echo ("</td>");
        echo ("<td>");
        echo ("<button type='button' class='btn btn-primary btn-sm' style='width:100%;'>Delete</button>");
        echo ("</td>");
        echo ("</tr>");
        $row = mysql_fetch_assoc($dataset);
    }
    echo ("</table>");

    mysql_close($link);
    include("footer.html");
    ?> 