<!-- The purpose of this page is to edit  the manufacturer details of items in the datbase-->

<html>

    <?php
    include_once("manufacturer_model.php");
    include("header.html");
    echo("<div><h1 style='color:#5f6468;'><b>Add Manufacturer Details</b></h1>"
//    . "<em>the first priority information</em>"
    . "<hr></div>");
        
        echo("<html>
                <body>
                    <form role='form' class='horizontal'>                        
                        <div class='col-xs-6'>
                            <label for='email'>Name</label>
                            <input type='text' class='form-control' name='name' >
                        </div>
                        
                        <div class='col-xs-4'>
                            <label for='email'>Email</label>
                            <input type='id' class='form-control' name='email'>
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                            <label for='email'>Phone Number</label>
                            <input type='id' class='form-control' name='phone_number'>
                        </div>
                                                                     
                        <br/><br/><br/><br/>
                        <div class='col-xs-2'>
                        <button type='submit' class='btn btn-default' >Submit</button>
                        </div>
                    </form>
                </body>
            </html>
            ");
    // }

    if (isset($_REQUEST['name'])) {
        $obj = new Manufacturer();

    	$name= $_REQUEST['name'];
    	$email= $_REQUEST['email'];
    	$phone_number= $_REQUEST['phone_number'];

    	if ($obj->addManufacturer( $name, $email, $phone_number)){
    		echo("<div><h3 style='color:green;'>Added Sucessful</h3>"
    . "</div>");
    		// header("Location: manufacturer.php");
    		echo("<script> location.href = 'manufacturer.php';</script>");
    	}else{
    		echo("<div><h3 style='color:red;'>Cannot add manufacturer</h3>"
    . "</div>");

    	}
    }

    include("footer.html");
    ?> 

</html>