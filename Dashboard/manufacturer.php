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
    echo("<tr><th>ID</th> 
 		  <th>Name</th> 
                  <th>Email</th>
 		          <th>Phone Number</th> 
                  <th>Website</th>
                  <th>Country</th>
                  <th><button type='submit' value='add' name='submit' class='btn btn-success btn-sm' 
                  style='width:100%;' data-toggle='modal' data-target ='#myModal'>Add</button></th>
                  </tr> ");

    // $row = $dataset;
    while ($row) {
        echo ("<tr><td>");
        echo $row["id"];
        echo ("</td>");
        echo ("<td>");
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

    <div id="myModal" class="modal fade" role ="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class= "modal-header">
                        <button type="button" class="close" data-dismiss= "modal">&times;</button>
                        <h4 class="modal-title">Add New Manufacturer</h4>
                </div>
                <div class="modal-body">
                    <form role='form' class='horizontal' id ='myModal' action="manufacturer.php">

                        <div class='col-xs-6'>
                            <label for='email'>Name</label>
                            <input type='text' class='form-control' name= "name">
                        </div>
                        
                        <div class='col-xs-6'>
                            <label for='email'>Email</label>
                            <input type='text' class='form-control' name="email">
                        </div>
                        <br/><br/><br/><br/>
                        <div class='col-xs-4'>
                            <label for='email'>Phone Number</label>
                            <input type='text' class='form-control' name="number">
                        </div>
                        
                        <div class='col-xs-4'>
                            <label for='email'>Website</label>
                            <input type='text' class='form-control' name="website">
                        </div>
                        
                        <div class='col-xs-4'>
                            <label for='email'>Country</label>
                            <input type='text' class='form-control' name='country'>
                        </div>                        
                        <br/><br/><br/><br/>

                    </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type='submit' class='btn btn-default'>Submit</button>
                    </div>
         </div>
      </div>
    </div>
</body>

    </html>