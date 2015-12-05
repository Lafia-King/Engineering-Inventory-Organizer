<!-- The purpose of this page is to edit  the equipment details of items in the datbase-->

<html>

    <?php
    include("header.html");
     include_once("..\Model\db.php");
    echo("<div><h1 style='color:#5f6468;'><b>Checkout Equipment Details</b></h1>"
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

    if (isset($_GET['id'])) {

        $user_id = $_GET['id'];
    }



    $get_pro = "select booking.equipment_id as book_id ,equipment.name as toolname,user.name as username,equipment.equipment_id  as e_id,manufacturer_id,date_booked from booking,equipment,user where equipment.equipment_id=booking.equipment_id  and user.id=$user_id ";
 
    $run_pro = mysql_query($get_pro, $link);


    //  query and populate
    while ($row_pro = mysql_fetch_array($run_pro)) {
        $e_id = $row_pro['book_id'];
       
        $e_name = $row_pro['toolname'];
        
        $username =$row_pro['username'];

        $date_booked = date("d/m/Y");
       $return_date="";
        

        //This method will remove the booking from the datbase
        remove_booking();


        // This method checks out the item for the user that has been booked
        check_out();

        echo("<html>
                <body>
                    <form role='form' class='horizontal'>
                   
                   
                         
                        
                        <div class='col-xs-2'>
                            <label for='email'>Equipment Name</label>
                            <input type='id' class='form-control' value=toolname>


                        </div>
                        
                        <div class='col-xs-6'>
                            <label for='email'>Equipment ID</label>
                            <input type='id' class='form-control' value=$e_id>
                        </div>
                        
                        <div class='col-xs-4'>
                            <label for='email'>User Name</label>
                            <input type='id' class='form-control' value=$username>
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                            <label for='email'>User ID</label>
                            <input type='id' class='form-control' value=$user_id>
                        </div>
                        
                       
                        
                        <br/><br/><br/><br/>
                      
                        
                        
                        
                        <div class='col-xs-2'>
                            <label for='email'>Date Borrowed</label>
                            <input type='date' class='form-control' value=$date_booked>
                        </div>
                        
                        <div class='col-xs-2'>
                            <label for='email'>Return Date</label>
                            <input type='date' class='form-control' value=$return_date>
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                      <a href='check_out_equipment.php?id=$user_id&equipment_id=$e_id&date_booked=$date_booked&date_returned=$return_date> <button type='submit' class='btn btn-default'>Submit</button></a>
                        </div>
                    </form>
                </body>
            </html>
            ");
    }

    


    mysql_close($link);

    include("footer.html");
    ?> 

</html>


