
<?php include_once 'header.php'?>
    <h1>list page</h1>
    <div id="LIST_Wrapper">

        <?php 
        // if (isset($_REQUEST['submit'])) {
              foreach($_SESSION["product"] as $key => $value) {
              //  print_r($value);
              //  print_r("<div class='card'><div class='card-body' id=$key><p  contenteditable='false' class='A_$key-card-text item_name'>$value[name]</p></div></div>");
 
               print_r( "
               <form method='post' enctype='multipart/form-data'>
                  <div class='card' >
                    <div class='card-body' id='$key'>
                      <p  contenteditable='false' class='A_$key-card-text item_name'>$value[name]</p>
                      <input type='hidden' value='$value[name]'>
                      <img src='./Storage/$value[item_img_name]' alt='IMG NOT FOUND'>
                      <input type='hidden' value='$value[item_img_name]'>
                      <p  contenteditable='false' class='A_$key-card-text item_price'>$value[price]</p>
                      <input type='hidden' value='$value[price]'>
                      <p  contenteditable='false' class='A_$key-card-text item_description'>$value[description]</p>
                      <input type='hidden' value='$value[description]'>
                      <p  contenteditable='false' class='A_$key-card-text item_quantity'>$value[item_quantity]</p>
                      <input type='hidden' value='$value[item_quantity]'>
                      <p  contenteditable='false' class='A_$key-card-text item_category'>$value[item_category]</p>
                      <input type='hidden' value='$value[item_category]'>
                    
                      <button id='EDIT' class='btn btn-primary' onclick='EDIT(this) name='Edit'>Edit</button>
                      <button id='DEL' class='btn btn-danger' onclick='DELETE(this) name='Delete''>Delete</button>
                    </div>
                  </div>
                </form>
                  <hr/>"); 
                
              };
        //  } 
         ?>
    </div> 
    

