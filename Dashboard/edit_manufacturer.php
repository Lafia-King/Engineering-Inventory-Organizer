<!-- The purpose of this page is to edit  the manufacturer details of items in the datbase-->

<html>

    <?php
    include_once("manufacturer_model.php");
    include("header.html");
    echo("<div><h1 style='color:#5f6468;'><b>Edit Manufacturer Details</b></h1>"
//    . "<em>the first priority information</em>"
    . "<hr></div>");
    $m_id=0;

    if (isset($_GET['id'])) {
        $m_id = $_GET['id'];
    }


    $obj = new Manufacturer();

    $obj->getManufacturerById($m_id);
    
    
    while ($row = $obj->fetch()) {
        $m_name = $row['name'];
        $m_email = $row['email'];
        $phone_number = $row['phone_number'];
        $website = $row['website'];
        $country = $row['country'];
        
        echo("<html>
                <body>
                    <form role='form' class='horizontal'>                        
                        <div class='col-xs-6'>
                            <label for='email'>Name</label>
                            <input type='text' class='form-control' name='name' value=$m_name>
                            <input type='hidden' class='form-control' name='id' value=$m_id >
                        </div>
                        
                        <div class='col-xs-4'>
                            <label for='email'>Email</label>
                            <input type='id' class='form-control' name='email' value=$m_email>
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                            <label for='email'>Phone Number</label>
                            <input type='id' class='form-control' name='phone_number' value=$phone_number>
                        </div>
                        
                        <div class='col-xs-6'>
                            <label for='email'>Website</label>
                            <input type='text' class='form-control' name='website' value=$website>
                        </div>
                        
                        <div class='col-xs-4'>
                            <label for='email'>Country</label>
                            <input type='id' class='form-control' name='country' value=$country>
                        </div>
                        
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                        <button type='submit' class='btn btn-default' >Submit</button>
                        </div>
                    </form>
                </body>
            </html>
            ");
    }

    if (isset($_REQUEST['name'])) {

    	$m_id= $_REQUEST['id'];
    	$name= $_REQUEST['name'];
    	$email= $_REQUEST['email'];
    	$phone_number= $_REQUEST['phone_number'];
    	$website= $_REQUEST['website'];    	
    	$country= $_REQUEST['country'];

    	if ($obj->updateManufacturer($m_id, $name, $email, $phone_number, $website, $country)){
    		echo("<div><h3 style='color:green;'>Update Sucessful</h3>"
    . "</div>");
    		// header("Location: manufacturer.php");
    		echo("<script> location.href = 'manufacturer.php';</script>");
    	}else{
    		echo("<div><h3 style='color:red;'>Update Error</h3>"
    . "</div>");

    	}
    }

    include("footer.html");
    ?> 

</html>