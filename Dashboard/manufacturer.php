<html>
<body>
    <?php
    
    include_once("header.html");
    include_once("manufacturer_model.php");
    echo("<div><h1 style='color:#5f6468;'><b>Manufacturers</b></h1>"
    //    . "<em>the first priority information</em>"
    . "<hr></div>");

 

    $obj = new Manufacturer();

    $obj->getAllManufacturers();
    //begin running query for equipment info from inventorydb  for requests table
    $row = $obj->fetch();
    if (!$row) {
        echo "No manufacturers available";
    }

    echo("<div>
        <h2 class='sub-header'>Requests</h2>
        </div>");

    echo ("<table class='table table-condensed table-hover'>");
    echo("<tr> 
 		  <th>Name</th> 
                  <th>Email</th>
 		          <th>Phone Number</th> 
                  <th>Website</th>
                  <th>Country</th>
                  <th><a style='color:white; text-decoration:none' href='add_manufacturer.php'><button 
                  type='button' class='btn btn-success btn-sm' style='width:100%;'>Add</button></a></th>
                  </tr> ");

    // $row = $dataset;
    while ($row) {
        echo ("<tr><td>");
        echo $row["name"];
        echo ("</td>");
        echo ("<td>");
        echo $row["email"];
        echo ("</td>");
        echo ("<td>");
        echo $row["phone_number"];
        echo ("</td>");
        echo ("<td>");
        echo $row["website"];
        echo ("</td>");
        echo ("<td>");
        echo $row["country"];
        echo ("</td>");
        echo ("<td>");      echo ("<td>");
        echo ("<a style='color:white; text-decoration:none' href='edit_manufacturer.php?id={$row['id']}'><button type='button' class='btn btn-primary btn-sm' style='width:100%;'>Edit</button></a>");
        echo ("</td>");
        echo ("</tr>");
        $row = $obj->fetch();
    }
    echo ("</table>");

    if (isset($_REQUEST['name'])) {
        $req = $_REQUESt['name'];
        if ($req =='add'){}
        elseif (condition) {
                # code...
            }
    }
    include("footer.html");
    ?> 

</body>

    </html>