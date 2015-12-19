<html>
<body>
    <?php
    
    include_once("header.html");
    include_once("user.php");
    echo("<div><h1 style='color:#5f6468;'><b>Users</b></h1>"
    . "<hr></div>");

 

    $obj = new User();

    $obj->getAllUsers();
    //begin running query for user info from inventorydb  for user table
    $row = $obj->fetch();
    if (!$row) {
        echo "No users available";
    }

   

    echo ("<table class='table table-condensed table-hover'>");
    echo("<tr> 
          <th>Name</th> 
				  <th>User Name</th>
                  <th>Email</th>
                  <th><a style='color:white; text-decoration:none' href='add_users.php'><button 
                  type='button' class='btn btn-success btn-sm' style='width:100%;'>Add</button></a></th>
                  </tr> ");

    // $row = $dataset;
    while ($row) {
        echo ("<tr><td>");
        echo $row["name"];
        echo ("</td>");
		echo ("<td>");
        echo $row["username"];
        echo ("</td>");
        echo ("<td>");
        echo $row["email"];
        echo ("</td>");     
        echo ("<td>");
        echo ("<a style='color:white; text-decoration:none' href='edit_users.php?id={$row['id']}'><button type='button' class='btn btn-primary btn-sm' style='width:100%;'>Edit</button></a>");
        echo ("</td>");
        $row = $obj->fetch();
    }
    echo ("</table>");


    include("footer.html");
    ?> 

</body>

    </html>