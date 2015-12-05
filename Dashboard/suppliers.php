<html>
<body>
    <?php
    
    include_once("header.html");
    include_once("supplier_model.php");
    echo("<div><h1 style='color:#5f6468;'><b>suppliers</b></h1>"
    . "<hr></div>");

 

    $obj = new supplier();

    $obj->getAllsuppliers();
    //begin running query for equipment info from inventorydb  for requests table
    $row = $obj->fetch();
    if (!$row) {
        echo "No suppliers available";
    }

    echo("<div>
        <h2 class='sub-header'>Requests</h2>
        </div>");

    echo ("<table class='table table-condensed table-hover'>");
    echo("<tr> 
          <th>Name</th> 
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th><a style='color:white; text-decoration:none' href='add_supplier.php'><button 
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
        echo ("<td>");
        echo ("<a style='color:white; text-decoration:none' href='edit_supplier.php?id={$row['id']}'><button type='button' class='btn btn-primary btn-sm' style='width:100%;'>Edit</button></a>");
        echo ("</td>");
        echo ("</tr>");
        $row = $obj->fetch();
    }
    echo ("</table>");


    include("footer.html");
    ?> 

</body>

    </html>