<?php
require_once('conn.php');
$name=$_POST['username'];

$sql = "select * from users where id=".$id;
$result = mysqli_query($db_conn, $sql);  
while($row = mysqli_fetch_assoc($result))
                {
                    $output= $row["phone"] + $row["url"] + $row["birthdate"];
                }
                echo  $output;
    ?>