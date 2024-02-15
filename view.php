<?php
   require_once('conn.php');
   $sql = "select * from users";
   $result = mysqli_query($db_conn, $sql);   
 
//get modal value using the username
if(isset($_POST['name'])){
  $name = $_POST['name'];
  $stmt1 = $db_conn->prepare("select * from users where name='$name'");
  $stmt1->execute();
  $user_details = $stmt1->fetch(PDO::FETCH_ASSOC);
  if($stmt1->rowCount()>0)
  {
     $output['phone'] = $user_details['phone_number'];
     $output['birthDate'] = $user_details['birthDate'];
     $output['url'] = $user_details['url'];
  echo json_encode($output);
  }
  else
  {
    $output['failed'] = '<font color="#ff0000" style="font-size: 20px;">Data not available</font>';
    echo json_encode($output);
  }
  exit;
  }
            ?>

<!DOCTYPE html>
<html lang="en">
 
<head>
   
    <!-- CSS FOR STYLING THE PAGE -->
    
    <link rel="stylesheet" href="style.css">
    <script src="jscript.js"></script>

    
</head>
 
<body>
  
        <h1>Users Information</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                
                <th>User Name</th>
                <th>E-mail</th>
                <th>Action</th>
            </tr>
           <tbody>
            <tr>
                 <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php 
                // LOOP TILL END OF DATA
                while($rows = mysqli_fetch_assoc($result))
                {
            ?>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                   
                <td> <a class="info"  href="#" onclick="openForm()"><?php echo $rows['name'];?></a></td>
                <td><?php echo $rows['email'];?></td>
                <td><button type="button" onclick="delete.php?id=' . $row['id'] . ' ">delete</button></td>
                
            </tr>
            <?php
                }
                ?>
                </tbody>
        </table>

        <div class="form-popup" id="myForm">
  <div class="body_div">
  <h3>User Details</h3><br>
  <br>

    
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
        $('.info').on('click', function() {
            var modalid = $(this).modalid('id');
            //alert(modalID);
            if(modalname) {
                $.ajax({
                    url: 'upload.php',
                    type: "POST",
                    data: {'id':modalname},
                    dataType: "json",
                    success:function(data) {
                      $('#body_div').html(data);
                    }
                });
            }
         });
      });
</script>
</body>
 
</html>