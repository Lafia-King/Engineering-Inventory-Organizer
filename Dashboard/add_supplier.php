<!-- The purpose of this page is to edit  the supplier details of items in the datbase-->

<html>

    <?php
    include_once("supplier_model.php");
    include("header.html");
    echo("<div><h1 style='color:#5f6468;'><b>Add Supplier Details</b></h1>"
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
        $obj = new Supplier();

    	$name= $_REQUEST['name'];
    	$email= $_REQUEST['email'];
    	$phone_number= $_REQUEST['phone_number'];

    	if ($obj->addsupplier( $name, $email, $phone_number)){
    		echo("<div><h3 style='color:green;'>Added Successful</h3>"
    . "</div>");
    		echo("<script> location.href = 'suppliers.php';</script>");
    	}else{
    		echo("<div><h3 style='color:red;'>Cannot add supplier</h3>"
    . "</div>");

    	}
    }

    include("footer.html");
    ?> 

</html>