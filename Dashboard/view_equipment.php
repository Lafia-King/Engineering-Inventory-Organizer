<html>
    <?php
    include("header.html");
    echo("<div><h1 style='color:#5f6468;'><b>EQUIPMENT</b></h1>"
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
        echo mysqli_error();
        exit();  //end script 
    }
//select the database to work with using the open connection  
    if (!mysql_select_db($database, $link)) {
        echo "Failed to select database.";
        //display error message from mysql 
        echo mysql_error();
        exit();
    }


    if (isset($_GET['id'])) {

        $equipment_id = $_GET['id'];
    }

    $get_pro = "select * from equipment where id=$equipment_id";



    $run_pro = mysql_query($get_pro, $link);

    while ($row_pro = mysql_fetch_array($run_pro)) {
        $e_id1 = $row_pro['id'];
        $e_id = $row_pro['equipment_id'];
        $e_name = $row_pro['name'];
        $category = $row_pro['category_id'];
        $storage_location = $row_pro['storage_location'];
        $supplier_id = $row_pro['supplier_id'];
        $manufacturer_id = $row_pro['manufacturer_id'];
        $product_id = $row_pro['current_condition'];
        $current_condition = $row_pro['product_id'];
        $label = $row_pro['label'];
        
        
        
        

//        echo("<table>");
//        echo ("<tr><td>");
        echo $e_id1;
//        echo ("</td>");
//        echo ("<td>");
        echo $e_id;
//        echo ("</td>");
//        echo ("<td>");
        echo $e_name;
//        echo ("</td>");
//        echo ("<td>");
        echo $category;
//        echo ("</td>");
//        echo ("<td>");
        echo $storage_location;
//        echo ("</td>");
//        echo ("<td>");
        echo $supplier_id;
//        echo ("</td>");
//        echo ("<td>");
        echo $manufacturer_id;
//        echo ("</td>");
//        echo ("<td>");
        echo $product_id;
//        echo ("</td>");
//       echo ("<td>");
        echo $current_condition;
//      echo ("</td>");
//
//      echo ("<td>");
        echo $label;
//      echo ("</td>");
        //echo ("<td>");
        //echo ("<button type='button' class='btn btn-primary btn-sm' style='width:100%;'>View</button>");
        // echo ("</td>");
//        echo ("</tr>");
//    echo ("</table>");
    }

    mysql_close($link);

    include("footer.html");
    ?> 

</html>