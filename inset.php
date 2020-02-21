<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost","root","","findb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$item_type = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$brand = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$expiry = mysqli_real_escape_string($link, $_REQUEST['email']);
$quantity = mysqli_real_escape_string($link, $_REQUEST['last_name']);
// Attempt insert query execution
$sql = "INSERT INTO items (first_name, last_name, email) VALUES ('$item_type', '$brand', '$expiry', '$quantity')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>