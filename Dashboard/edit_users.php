<!-- The purpose of this page is to edit  the user details of items in the database-->
<!-- A modification of code from Chloe Acheampong, Author Jessica Ali-->
<html>

    <?php
    include_once("user.php");
    include("header.html");
    echo("<div><h1 style='color:#5f6468;'><b>Edit User Details</b></h1>"
//    . "<em>the first priority information</em>"
    . "<hr></div>");

    if (isset($_GET['id'])) {
        $u_id = $_GET['id'];
    }


    $obj = new User();

    $obj->getUserById($u_id);
    
    
    while ($row = $obj->fetch()) {
		
        $name= $row['name'];
		$username= $row['username'];
		$password= $row['password'];
    	$email= $row['email'];
		$user_type= $row['user_type'];
    	
        
        echo("<html>
                <body>
                    <form role='form' class='horizontal'>                        
                        <div class='col-xs-6'>
                            <label for='email'>Name</label>
                            <input type='text' class='form-control' name='name' value=$name>
                            <input type='hidden' class='form-control' name='id' value=$u_id >
                        </div>
						
						<div class='col-xs-6'>
                            <label for='email'>User Name</label>
                            <input type='text' class='form-control' name='username' value=$username>
                        </div>
                        
						<div class='col-xs-6'>
                            <label for='email'>Password</label>
                            <input type='text' class='form-control' name='password' value=$password>
                        </div>
						
                        <div class='col-xs-4'>
                            <label for='email'>Email</label>
                            <input type='id' class='form-control' name='email' value=$email>
                        </div>
						
						<div class='col-xs-6'>
                            <label for='email'>User Type</label>
                            <input type='text' class='form-control' name='user_type' value=$user_type>
                           
                        </div>
                        <br/><br/><br/><br/>                      
                                              
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

    	$u_id= $_REQUEST['id'];
		$name= $_REQUEST['name'];
		$username= $_REQUEST['username'];
		$password= $_REQUEST['password'];
    	$email= $_REQUEST['email'];
		$user_type= $_REQUEST['user_type'];
    	

    	if ($obj->updateUser( $u_id,$name,$username,$password, $email, $user_type)){
    		echo("<div><h3 style='color:green;'>Update Sucessful</h3>"
    . "</div>");
    		// header("Location: users.php");
    		echo("<script> location.href = 'users.php';</script>");
    	}else{
    		echo("<div><h3 style='color:red;'>Update Error</h3>"
    . "</div>");

    	}
    }

    include("footer.html");
    ?> 

</html>