<!-- The purpose of this page is to add a user datbase. This code was built by Updating Chloe Acheampong and Judah Lafia King's work-->


<html>

    <?php
    include_once("user.php");
    include("header.html");
    echo("<div><h1 style='color:#5f6468;'><b>Add User Details</b></h1>"
//    . "<em>the first priority information</em>"
    . "<hr></div>");
        
        echo("<html>
                <body>
                    <form role='form' class='horizontal'>                        
                        <div class='col-xs-6'>
                            <label for='email'>Name</label>
                            <input type='text' class='form-control' name='name' >
                        </div>
                        <div class='col-xs-2'>
                            <label for='email'>User Name</label>
                            <input type='id' class='form-control' name='username'>
                        </div>
						<div class='col-xs-2'>
                            <label for='email'>Password</label>
                            <input type='id' class='form-control' name='password'>
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
						<div class='col-xs-2'>
                            <label for='email'>User Type</label>
                            <input type='id' class='form-control' name='user_type'>
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
        $obj = new User();

    	$name= $_REQUEST['name'];
		$username= $_REQUEST['username'];
		$password= $_REQUEST['password'];
    	$email= $_REQUEST['email'];
		$user_type= $_REQUEST['user_type'];
    	$phone_number= $_REQUEST['phone_number'];

    	if ($obj->addUser( $name,$username,$password, $email, $phone_number,$user_type )){
    		echo("<div><h3 style='color:green;'>Added Successful</h3>"
    . "</div>");
    		echo("<script> location.href = 'users.php';</script>");
    	}else{
    		echo("<div><h3 style='color:red;'>Cannot add user</h3>"
    . "</div>");

    	}
    }

    include("footer.html");
    ?> 

</html>