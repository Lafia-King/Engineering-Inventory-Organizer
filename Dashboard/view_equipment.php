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


    if(isset($_GET['id'])){
        
        $equipment_id=$_GET['id'];
        
        }
        
        $get_pro="select * from equipment where equipment_id=$equipment_id";
        
        
        
        $run_pro=mysqli_query($con,$get_pro);
        
        while($row_pro=mysqli_fetch_array($run_pro)){
        $product_id=$row_pro['product_id'];
        $product_cat=$row_pro['product_cat'];
        $product_brand=$row_pro['product_brand'];
        $product_name=$row_pro['product_name'];
        $product_price=$row_pro['product_price'];
        $product_image=$row_pro['product_image'];
        $product_desc=$row_pro['product_desc'];
        
        echo "<div id='single_product'><h3>$product_name</h3><a href='product_details.php?product_id=$product_id'><img src='$product_image' width='300' height='300'/></a>
        
        <p><b>$$product_price</b></p>
        <p><b>$product_desc</b></p>
        <a href='shop.php?cart=$product_id&brand=$product_brand'><button ='right' >Add to Cart</button></a>
        
        <a href='shop.php?product_id=$product_id'><button float='left' >Go Back</button></a>
        
        </div>
        
        ";
        
        }

   

    mysql_close($link);
    include("footer.html");
    ?> 