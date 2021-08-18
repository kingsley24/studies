
<?php
// Fetching Values From URL
$name2 = $_POST['name1'];
$email2 = $_POST['email1'];
$password2 = $_POST['password1'];
$contact2 = $_POST['contact1'];
$connection = mysqli_connect("localhost", "root", "","mydba"); // Establishing Connection with Server..
//$db = mysqli_select_db( $connection, "mydba"); // Selecting Database
if (isset($_POST['name1'])) {
$query = mysqli_query("insert into form_element(name, email, password, contact) values ('$name2', '$email2', '$password2','$contact2')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed
?>