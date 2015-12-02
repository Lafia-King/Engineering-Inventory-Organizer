<html>
    <?php
    include("header.html");
    echo("<div><h1 style='color:#5f6468;'><b>Equipment</b></h1>"
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
    $dataset = mysql_query("select * from equipment", $link);
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
 		  <th>Equipment Id</th> 
                  <th>Location</th>
 		  <th>Condition</th>
                  <th>Label</th>
                  <th>Asset Type</th>
 		  <th>Borrow Status</th>
                  <th><button type='button' class='btn btn-success btn-sm' style='width:100%;'data-toggle='modal' data-target='#myModal'>Add</button></th>
                  </tr> ");

    $row = mysql_fetch_assoc($dataset);
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
//        echo ("<td>");
//        echo $row["date_created"];
//        echo ("</td>");
//        echo ("<td>");
//        echo ("<button type='button' class='btn btn-primary btn-sm' style='width:100%;'"
//        . "data-toggle='modal' data-target='#myModal'>View</button>");
//        echo ("</td>");

        echo ("<td>");
        echo ("<a style='color:white; text-decoration:none' href='view_equipment.php?id={$row['id']}'><button type='button' class='btn btn-primary btn-sm' style='width:100%;'>View</button></a>");
        echo ("</td>");

        echo ("<td>");
        echo ("<a style='color:white; text-decoration:none' href='edit_equipment.php?id={$row['id']}'><button type='button' class='btn btn-primary btn-sm' style='width:100%;'>Edit</button></a>");
        echo ("</td>");
        echo ("</tr>");
        $row = mysql_fetch_assoc($dataset);
    }
    echo ("</table>");

    mysql_close($link);

    include("footer.html");
    ?> 

        Modal 
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
    
                 Modal content
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Equipment</h4>
                    </div>
                    <div class="modal-body">
    
                        <form role='form' class='horizontal'>
                        <div class='col-xs-2'>
                            <label for='email'>Id</label>
                            <input type='id' class='form-control'>
                        </div>
                        
                        <div class='col-xs-6'>
                            <label for='email'>Name</label>
                            <input type='text' class='form-control'>
                        </div>
                        
                        <div class='col-xs-4'>
                            <label for='email'>Equipment Id</label>
                            <input type='id' class='form-control'>
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                            <label for='email'>Category Id</label>
                            <input type='id' class='form-control'>
                        </div>
                        
                        <div class='col-xs-6'>
                            <label for='email'>Storage Location</label>
                            <input type='id' class='form-control'>
                        </div>
                        
                        <div class='col-xs-4'>
                            <label for='email'>Supplier Id</label>
                            <input type='id' class='form-control'>
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                            <label for='email'>Manufacturer Id</label>
                            <input type='id' class='form-control'>
                        </div>
                        
                        <div class='col-xs-6'>
                            <label for='email'>Label</label>
                            <input type='id' class='form-control'>
                        </div>
                        
                         <div class='col-xs-4'>
                            <label for='email'>Current Condition</label>
                            <input type='id' class='form-control'>
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                            <label for='email'>Product Id</label>
                            <input type='id' class='form-control'>
                        </div>
                        
                        <div class='col-xs-6'>
                            <label for='email'>Asset Type</label>
                            <input type='id' class='form-control'>
                        </div>
                        
                        <div class='col-xs-2'>
                            <label for='email'>Borrow Status</label>
                            <input type='id' class='form-control'>
                        </div>
                        
                        <div class='col-xs-2'>
                            <label for='email'>Date</label>
                            <input type='date' class='form-control'>
                        </div>
                        <br/><br/>
                        <!--<div class='col-xs-2'>
                        <button type='submit' class='btn btn-default'>Submit</button>
                        </div>-->
                    </form>
    
                    </div><!--                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                        <button type='submit' class='btn btn-default'>Submit</button>
                        </div>-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type='submit' class='btn btn-default'>Submit</button>
                    </div>
                </div>
    
            </div>
        </div>

</html>