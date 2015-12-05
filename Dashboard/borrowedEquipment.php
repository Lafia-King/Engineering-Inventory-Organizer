<html>
    <?php
    include("header.html");
    //Added my database with my booking, check-in, check-out methods

    include_once("..\Model\db.php");

    echo("<div><h1 style='color:#5f6468;'><b>Borrowed Equipment</b></h1>"
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

listBorrowedEquipment();





    mysql_close($link);
    include("footer.html");
    ?> 
    </html>