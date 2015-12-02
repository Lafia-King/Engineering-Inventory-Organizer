<!-- The purpose of this page is to edit  the equipment details of items in the datbase-->

<html>

    <?php
    include("header.html");
    echo("<div><h1 style='color:#5f6468;'><b>Edit Equipment Details</b></h1>"
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

        $equipment_id = $_GET['id'];
    }

    $get_pro = "select * from equipment where id=$equipment_id";



    $run_pro = mysql_query($get_pro, $link);

//  query and populate
    while ($row_pro = mysql_fetch_array($run_pro)) {
        $e_id1 = $row_pro['id'];
        $e_id = $row_pro['equipment_id'];
        $e_name = $row_pro['name'];
        $category = $row_pro['category_id'];
        $storage_location = $row_pro['storage_location'];
        $supplier_id = $row_pro['supplier_id'];
        $manufacturer_id = $row_pro['manufacturer_id'];
        $product_id = $row_pro['product_id'];
        $current_condition = $row_pro['current_condition'];
        $label = $row_pro['label'];
        $date = $row_pro['date_created'];
        $asset_type = $row_pro['asset_type'];
        $borrow_status = $row_pro['borrow_status'];
        

        echo("<html>
                <body>
                    <form role='form' class='horizontal'>
                        <div class='col-xs-2'>
                            <label for='email'>Id</label>
                            <input type='id' class='form-control' value=$e_id1 disabled>
                        </div>
                        
                        <div class='col-xs-6'>
                            <label for='email'>Name</label>
                            <input type='text' class='form-control' value=$e_name>
                        </div>
                        
                        <div class='col-xs-4'>
                            <label for='email'>Equipment Id</label>
                            <input type='id' class='form-control' value=$e_id>
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                            <label for='email'>Category Id</label>
                            <input type='id' class='form-control' value=$category>
                        </div>
                        
                        <div class='col-xs-6'>
                            <label for='email'>Storage Location</label>
                            <input type='id' class='form-control' value=$storage_location>
                        </div>
                        
                        <div class='col-xs-4'>
                            <label for='email'>Supplier Id</label>
                            <input type='id' class='form-control' value=$supplier_id>
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                            <label for='email'>Manufacturer Id</label>
                            <input type='id' class='form-control' value=$manufacturer_id>
                        </div>
                        
                        <div class='col-xs-6'>
                            <label for='email'>Label</label>
                            <input type='id' class='form-control' value=$label>
                        </div>
                        
                         <div class='col-xs-4'>
                            <label for='email'>Current Condition</label>
                            <input type='id' class='form-control' value=$current_condition>
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                            <label for='email'>Product Id</label>
                            <input type='id' class='form-control' value=$product_id>
                        </div>
                        
                        <div class='col-xs-6'>
                            <label for='email'>Asset Type</label>
                            <input type='id' class='form-control' value=$asset_type>
                        </div>
                        
                        <div class='col-xs-2'>
                            <label for='email'>Borrow Status</label>
                            <input type='id' class='form-control' value=$borrow_status>
                        </div>
                        
                        <div class='col-xs-2'>
                            <label for='email'>Date</label>
                            <input type='date' class='form-control' value=$date>
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                        <button type='submit' class='btn btn-default'>Submit</button>
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