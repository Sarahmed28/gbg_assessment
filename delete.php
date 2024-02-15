<?php
include 'conn.php';
if (isset($_GET['id'])) {
$id = $_GET['id'];
$sql ="DELETE FROM users WHERE id = $id";
$query = mysqli_query($db_conn, $sql);
$row = mysqli_fetch_assoc($query);

if ($row) {
    echo '<input type="submit" name="confirm" value="Yes">';
            echo '<a href="view.php">No</a>';
header("Location: view.php?delete_action=success");
} else {
echo $query->error;
}
}
// Handle the delete operation
if (isset($_POST['confirm'])) {
    $id = $_POST['id'];

    // Delete the record from the database
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo 'Record deleted successfully.';
    } else {
        echo 'Error deleting record: ' . mysqli_error($conn);
    }
}
?>